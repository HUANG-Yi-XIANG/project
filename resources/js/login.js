import Home from './components/Home';
import Registered from './components/Registered';
import ForgetPassword from './components/ForgetPassword';
import UpdatePassword from './components/UpdatePassword';

export default {
    routes:[

        {
            path:'/',
            component: Home
        },

        {
            path:'/registered',
            component: Registered
        },
        {
            path:'/password/reset/',
            component: ForgetPassword
        },
        {
            path:'/password/reset/:token',
            component: UpdatePassword
        }

    ],
  
}
