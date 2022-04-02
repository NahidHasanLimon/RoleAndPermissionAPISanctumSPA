import {createRouter,createWebHistory} from 'vue-router'
import Home from './components/Home.vue'
import Profile from './components/Profile.vue'
import Login from './components/Login.vue'
import Nav from './components/partials/Nav.vue'
import Blog from './components/Blog.vue'
import BlogDetails from './components/BlogDetails.vue'

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
    {
        path:'/blog',
        component:Blog
    }, 
    {
        path:'/blog/details',
        component:BlogDetails
    },

];

const router = createRouter ({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router