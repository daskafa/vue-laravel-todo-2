import Home from './components/Home';
import About from './components/About';
import Login from "./components/Login";
import Register from "./components/Register";
import Dashboard from "./components/Dashboard";

import NotFound from "./components/NotFound";

export default {
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Home,
            name: 'Home'
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/login',
            component: Login,
            name: 'Login'
        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/dashboard',
            component: Dashboard,
            name: 'Dashboard',
            beforeEnter: (to, form, next) => {
                axios.get('/api/authenticated').then(() => {
                    next()
                }).catch(() => {
                    return next({name: 'Login'})
                })
            }
        }
    ]
}
