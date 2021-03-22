<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Orders</div>

                    <div class="card-body">
                        todo
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
                name: ''
            }
        },

        mounted() {


           this.axios.get(`/api/order/${this.$route.params.id}/anket`)
                .then(response=> {
                console.log(response)
                })
                .catch(error=>{
                console.log(error)
                })


            console.log('Component mounted. ',this.$route.params.id)
//            this.getData(this.$route.params.id)
        },
        methods: {
            
            getData(id){
            
            this.axios.get(`/api/order/${id}/anket`)
                .then(response=> {
                console.log(response)
                })
                .catch(error=>{
                console.log(error)
                })

            }
        }
    }

</script>
