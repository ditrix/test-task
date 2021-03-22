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
                            <button type="button" @click="deleteAnketa()" class="btn btn-danger">удалить</button>
                        </div>
                        </div>    
                    </div>

                    <div class="card-body">

                        <table class="table table-striped">
                        <tbody  v-if="ankets.length > 0">

                          <tr v-for="(anketa,key) in ankets" :key="key">
                               <th scope="row"><input type="checkbox" name="" @click="setCurrentRow(anketa.id)"></th>
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


    export default {

        data(){

            return {
                ankets: [],
                user_email: '',
                currentRow: { anketaId: null, checked: false,},
            }
        },
        mounted() {
            this.getAnkets()
        },
        methods:{

            async getAnkets(){
                await this.axios.get(`/api/ankets/${uid}`)
                    .then(res => {
//                        console.log(res.data)
                        this.ankets = res.data.ankets
                        this.user_email = res.data.user_email
                    })
                    .catch(err => {
                        console.log(error)
                    })
            },

            deleteAnketa(){

                if(this.currentRow.anketaId){
                    this.axios.delete(`/api/ankets/${this.currentRow.anketaId}`)
                        .then(res => {
                            this.getAnkets()                    
                        })
                        .catch(err => {
                            console.log(error)
                        })
                }

            },

            setCurrentRow(anketaId){
        
                if(this.currentRow.checked){
                    this.currentRow.anketaId = null; this.currentRow.checked = false;
                }else {
                    this.currentRow.anketaId = anketaId; this.currentRow.checked = true;
                }
        
            },

             formatDate(dt){

                return moment(dt).format("DD.MM.YYYY");

            }
        }
    }
</script>
