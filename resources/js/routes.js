import UserAnkets from './components/UserAnkets.vue';
import CreateAnketa from './components/CreateAnketa.vue';
import EditAnketa from './components/EditAnketa.vue';
 
import Example from './components/ExampleComponent.vue';

export const routes = [
    {
        name: 'anketa',
        path: '/',
        component: UserAnkets
    },
    {
        name: 'create',
        path: 'api/ankets/create',
        component: CreateAnketa
    },
    {
        name: 'edit',
        path: 'api/ankets/edit/:id',
        component: EditAnketa
    },
    
];
// 