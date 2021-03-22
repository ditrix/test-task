import UserAnketList from './components/UserAnketList.vue';
import CreateAnketForm from './components/CreateAnketForm.vue';
import EditAnketForm from './components/EditAnketForm.vue';
import OrderList from './components/OrderList';
 
import Example from './components/ExampleComponent.vue';

export const routes = [
    {
        name: 'anketa',
        path: '/',
        component: UserAnketList
    },
    {
        name: 'createAnketa',
        path: '/ankets/create',
        component: CreateAnketForm
    },
    {
        name: 'editAnketa',
        path: '/anket/edit/:id',
        component: EditAnketForm
    },
    {
        name: 'edit',
        path: '/anket/edit/:id',
        component: EditAnketForm
    },
    {
        name: 'orderList',
        path: '/order/:id/anket',
        component: OrderList
    },    
    
];
// 