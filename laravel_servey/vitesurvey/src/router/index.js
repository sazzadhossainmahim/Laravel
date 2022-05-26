import { createRouter, createWebHashHistory } from "vue-router";
// import views
import Dashboard from '../views/Dashboard.vue'
import LoginVue from "../views/Login.vue";
import Surveys from "../views/Surveys.vue";
import RegisterVue from "../views/Register.vue";
import DefaultLayout from "../components/DefaultLayout.vue"
import AuthLayout from "../components/AuthLayout.vue"
import store from "../store";

const routes = [{
        path: '/',
        redirect: '/dashboard',
        // name: 'Dashboard',
        component: DefaultLayout,
        meta: { requiresAuth: true },
        children: [{
                path: '/dashboard',
                name: 'Dashboard',
                component: Dashboard,
            }, {
                path: '/surveys',
                name: 'Surveys',
                component: Surveys
            }

        ]
    },
    {
        path: '/auth',
        redirect: '/login',
        name: 'Auth',
        component: AuthLayout,
        children: [{
                path: '/login',
                name: 'Login',
                component: LoginVue
            },
            {
                path: '/register',
                name: 'Register',
                component: RegisterVue
            }
        ]

    },

    {
        path: '/login',
        name: 'Login',
        component: LoginVue
    },
    {
        path: '/register',
        name: 'Register',
        component: RegisterVue
    }

]


const router = createRouter({
    history: createWebHashHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.user.token) {
        next({ name: 'Login' })
    } else if (store.state.user.token && to.name === 'Login' || (to.name === 'Register')) {
        next({ name: 'Dashboard' })
    } else {
        next();
    }
})
export default router