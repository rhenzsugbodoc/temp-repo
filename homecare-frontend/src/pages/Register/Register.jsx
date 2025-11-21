import { Link } from 'react-router-dom'

export default function Register(){
    return(
        <>
        <div className="h-screen flex items-center justify-center bg-gray-50">
            <div className="container max-w-4xl">
                <div className="bg-white rounded-2xl shadow-lg p-8">
                <div className="text-center mb-6">
                    <h1 className="text-3xl font-bold mb-2">Register</h1>
                    <hr className="mb-4" />
                    <p className="text-gray-500">Create New Account</p>
                </div>

                {/* Social buttons */}
                <div className="flex gap-2 justify-center mb-6">
                    <a href="https://www.google.com/gmail/" className="btn btn-google w-full">Google</a>
                    <a href="https://twitter.com/" className="btn btn-twitter w-full">Twitter</a>
                    <a href="https://www.facebook.com/" className="btn btn-facebook w-full">Facebook</a>
                </div>

                <hr className="my-6" />

                {/* Form */}
                <form onSubmit={handleSubmit} className="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input
                    type="text"
                    name="firstName"
                    value={formData.firstName}
                    onChange={handleChange}
                    placeholder="First Name"
                    className="form-input"
                    />
                    <input
                    type="text"
                    name="lastName"
                    value={formData.lastName}
                    onChange={handleChange}
                    placeholder="Last Name"
                    className="form-input"
                    />
                    <input
                    type="email"
                    name="email"
                    value={formData.email}
                    onChange={handleChange}
                    placeholder="Email"
                    className="form-input"
                    />
                    <input
                    type="password"
                    name="password"
                    value={formData.password}
                    onChange={handleChange}
                    placeholder="Password"
                    className="form-input"
                    />
                    <select
                    name="gender"
                    value={formData.gender}
                    onChange={handleChange}
                    className="form-input"
                    >
                    <option value="">Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="others">Others</option>
                    </select>
                    <input
                    type="date"
                    name="dob"
                    value={formData.dob}
                    onChange={handleChange}
                    className="form-input"
                    />

                    {/* Checkbox */}
                    <label className="col-span-2 flex items-center space-x-2 mt-2">
                    <input
                        type="checkbox"
                        name="agree"
                        checked={formData.agree}
                        onChange={handleChange}
                    />
                    <span>
                        Agree to the{" "}
                        <a href="/pages/terms" className="text-blue-600 underline">
                        Terms and Policy
                        </a>
                    </span>
                    </label>

                    {/* Submit */}
                    <div className="col-span-2 mt-4">
                    <button
                        type="submit"
                        className="btn btn-primary w-full py-3 text-lg"
                    >
                        Create account →
                    </button>
                    </div>
                </form>

                {/* Login redirect */}
                <div className="text-center pt-4">
                    <p className="text-gray-600">
                    Already have an account?{" "}
                    <a href="/login" className="text-blue-600 underline">
                        Login Here
                    </a>
                    </p>
                </div>
                </div>
            </div>
        </div>

        </>
    );
}