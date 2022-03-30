import {createRouter,createWebHistory} from 'vue-router'
import Home from './components/Home.vue'
import Profile from './components/Profile.vue'

export const routes = [
    {
        path:'/',
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

];

const router = createRouter ({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router