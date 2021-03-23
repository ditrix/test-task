<template>
    <div class="container">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">

<ol class="breadcrumb">

<li class="breadcrumb-item active" aria-current="page"><a href="/">к анкетам</a></li>

</ol>
</nav>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header container">
                        <div class="row">
                        <div class="col-md-10">
                        <strong>{{anketa}}</strong>
                        </div>
                        
                        <div class="col-md-2">
                            <button type="button" @click="deleteRow()" class="btn btn-danger">удалить</button>
                        </div>
                        </div>    
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody  v-if="orders.length > 0">

                              <tr v-for="(order,key) in orders" :key="key">
                                   <th scope="row"><input type="checkbox" name="" @click="setCurrentRow(order.id)"></th>
                                   <td>
                                        ФИО:{{order.name}}<br />
                                        Телефон: {{order.phone}}<br />
                                        Email: {{order.email}}<br />
                                    </td>
                                   <td>
                                    <p>
                                        {{order.content}}
                                    </p>    

                                 </td>
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
    export default {

        data(){
            return {
                anketa: '',
                orders: [],
                currentRow: { id: null, checked: false,},
            }
        },

        mounted() {
            this.getData()

            console.log('Component mounted. ',this.$route.params.id)
//            this.getData(this.$route.params.id)
        },
        methods: {
            
            getData(){
  
               this.axios.get(`/api/order/${this.$route.params.id}/anket`)
                    .then(response=> {
                        this.orders = response.data.orders   
                        this.anketa = response.data.anketa
                    console.log(this.orders)
                    })
                    .catch(error=>{
                    console.log(error)
                    })
                this.refreshChecked()

            }, 
            deleteRow(){

                if(this.currentRow.id){
                    this.axios.delete(`/api/order/${this.currentRow.id}/`)
                        .then(res => {
                            this.getData()                    
                        })
                        .catch(err => {
                            console.log(error)
                        })
              
                    console.log('delete ',this.currentRow.id)  
                }

            },

            setCurrentRow(id){
        
                if(this.currentRow.checked){
                    this.currentRow.id = null; this.currentRow.checked = false;
                }else {
                    this.currentRow.id = id; this.currentRow.checked = true;
                }
        
            },

            refreshChecked(){
                this.currentRow.id = null; this.currentRow.checked = false;
            }

        }
    }

</script>
