import { createBrowserRouter } from "react-router-dom";
import Dashboard from './views/Dashboard'
import Guest from "./components/Guest";
import Login from './views/Login'
import Signup from './views/Signup'
import Default from "./components/Default";
import Others from "./views/Others";


const router = createBrowserRouter([
    {
        path: '/',
        element: <Default />,
        children: [{
            path: "/",
            element: <Dashboard />,
        }, {
            path: "/others",
            element: <Others />,
        },]
    },
    {
        path: '/',
        element: <Guest />,
        children: [
            {
                path: "/login",
                element: <Login />,
            },
            {
                path: "/signup",
                element: <Signup />,
            },
        ],
    }
])

export default router;