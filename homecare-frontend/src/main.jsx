
import React from 'react'
import ReactDOM from 'react-dom/client'
import Landing from './pages/Landing/Landing.jsx'
import App from './App.jsx'
// import Login from './pages/Login/Login.jsx'
// import Register from './pages/Register/Register.jsx'
import Dashboard from './pages/Dashboard/Dashboard.jsx'
import Schedule from './pages/Schedule/Schedule.jsx'
// import Schedule from './pages/Schedule/Schedule.jsx'

import { createBrowserRouter, RouterProvider } from 'react-router-dom'






const router = createBrowserRouter([

{
  path: '/',
  element: <Landing/>
},
// {
//   path: '/register',
//   element: <Register/>
// },
// {
//   path: '/login',
//   element: <Login/>
// },
{
  path: '/dashboard',
  element: <Dashboard/>
},
{
  path: '/schedule',
  element: <Schedule/>
}
])

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <RouterProvider router={router}/>
  </React.StrictMode>,
)