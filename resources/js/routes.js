import UserAnketList from './components/UserAnketList.vue';
import CreateAnketForm from './components/CreateAnketForm.vue';
import EditAnketForm from './components/EditAnketForm.vue';
 
import Example from './components/ExampleComponent.vue';

export const routes = [
    {
        name: 'anketa',
        path: '/',
        component: UserAnketList
    },
    {
        name: 'createAnketa',
        path: 'api/ankets/create',
        component: CreateAnketForm
    },
    {
        name: 'editAnketa',
        path: 'api/ankets/edit/:id',
        component: EditAnketForm
    },
    {
        name: 'edit',
        path: 'api/ankets/edit/:id',
        component: EditAnketForm
    },    
    
];
// 