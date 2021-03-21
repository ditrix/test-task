<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header container">
                        <div class="row">
                        <div class="col-md-8">
                        список анкет пользователя <strong>{{user_email}}</strong>
                        </div>
                        <div class="col-md-2">
                            <router-link :to='{name:"createAnketa"}' class="btn btn-primary">добавить</router-link>    
                        </div>    
                        <div class="col-md-2">
                            <button type="button" @click="deleteAnketa(0)" class="btn btn-danger">удалить</button>
                        </div>
                        </div>    
                    </div>

                    <div class="card-body">

                        <table class="table table-striped">
                        <tbody  v-if="ankets.length > 0">

                          <tr v-for="(anketa,key) in ankets" :key="key">
       <th scope="row"><input type="checkbox" name="" @click="setCurrent(anketa.id)"></th>
       <td>{{anketa.name}}</td>


                                     <td>
                                 <router-link :to='{name:"editAnketa",params:{id:anketa.id}}' >правка</router-link>
                             </td>
                              <td>
                                <router-link :to='{name:"showOrders",params:{id:anketa.id}}' >
                                Результаты ({{anketa.count_results}})
                                </router-link>
                            </td>
                              <td>{{formatDate(anketa.updated_at)}}</td>
                          </tr>
        
                          
                        </tbody>
         
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
import moment from 'moment'

// https://www.positronx.io/create-laravel-vue-js-crud-single-page-application/


    export default {

        data(){

            return {
                ankets: [],
                user_email: '',
                currentId: {
                    value: null,
                    checked: false,
                },
            }
        },
        mounted() {
            this.getAnkets()
        },
        methods:{

            //  NB! async
            getAnkets(){
                this.axios
                    .get(`/api/admin/${uid}`)
                    .then(res => {
                        console.log(res.data)
                        this.ankets = res.data.ankets
                        this.user_email = res.data.user_email
                    })
                    .catch(err => {
                        console.log(error)
                    })
                    .finally()

            },
            deleteAnketa(anketaId){},
            setCurrent(anketaId){
                console.log(anketaId)

                /*
                    если ID.value тот же меням checked 
                    в ином случае скидываем текущий и назначаем новый

                */

            },
             formatDate(dt){

                return moment(dt).format("DD.MM.YYYY");

    // you dont have to use fromNow() it's just an example

            }
        }
    }
</script>
