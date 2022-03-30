import {createRouter,createWebHistory} from 'vue-router'
import Home from './components/Home.vue'
import Profile from './components/Profile.vue'
import Login from './components/Login.vue'
import Nav from './components/Nav.vue'

export const routes = [
    {
        path:'/',
        component:Home
    },
      {
        path:'/home',
        component:Home
    },
    {
        path:'/profile',
        component:Profile
    },
    {
        path:'/login',
        component:Login
    },
    {
        path:'/nav',
        component:Nav
    },

];

const router = createRouter ({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router