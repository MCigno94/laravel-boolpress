import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// 1. Define route components.
// These can be imported from other files

import Home from './Pages/Home';
import About from './Pages/About';
import Posts from './Pages/Posts';
import Post from './Pages/Post';

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [{
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/posts',
        name: 'posts',
        component: Posts
    },
    {
        path: '/posts/:slug',
        name: 'post',
        component: Post
    }

]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    mode: 'history',
    routes, // short for `routes: routes`
})

export default router;