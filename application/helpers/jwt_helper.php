<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * JWT Helper
 * Helper functions for JWT token generation and validation
 */

if (!function_exists('generate_jwt')) {
    /**
     * Generate JWT Token
     * @param array $payload Data to encode in token
     * @param int $expiry Token expiry time in seconds (default 2 hours)
     * @return string JWT token
     */
    function generate_jwt($payload, $expiry = 7200) {
        $secret_key = getenv('JWT_SECRET_KEY') ?: 'your-secret-key-change-this-in-production';
        
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
        
        $payload['iat'] = time();
        $payload['exp'] = time() + $expiry;
        
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode(json_encode($payload)));
        
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secret_key, true);
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        
        return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
    }
}

if (!function_exists('verify_jwt')) {
    /**
     * Verify and decode JWT Token
     * @param string $token JWT token
     * @return array|false Decoded payload or false if invalid
     */
    function verify_jwt($token) {
        $secret_key = getenv('JWT_SECRET_KEY') ?: 'your-secret-key-change-this-in-production';
        
        $tokenParts = explode('.', $token);
        
        if (count($tokenParts) !== 3) {
            return false;
        }
        
        $header = base64_decode(str_replace(['-', '_'], ['+', '/'], $tokenParts[0]));
        $payload = base64_decode(str_replace(['-', '_'], ['+', '/'], $tokenParts[1]));
        $signatureProvided = $tokenParts[2];
        
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));
        
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secret_key, true);
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        
        if ($base64UrlSignature !== $signatureProvided) {
            return false;
        }
        
        $payload = json_decode($payload, true);
        
        if (!isset($payload['exp']) || $payload['exp'] < time()) {
            return false;
        }
        
        return $payload;
    }
}

if (!function_exists('get_bearer_token')) {
    /**
     * Get Bearer Token from Authorization Header
     * @return string|null Token or null if not found
     */
    function get_bearer_token() {
        $headers = null;
        
        if (isset($_SERVER['Authorization'])) { //method 1
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //method 2
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } else if (function_exists('apache_request_headers')) { //method 3
            $requestHeaders = apache_request_headers();
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }
        
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return $matches[1];
            }
        }
        
        return null;
    }
}