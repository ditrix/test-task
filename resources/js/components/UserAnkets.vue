<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">список анкет пользователя</div>

                    <div class="card-body">
                        Список анкет (пользователя берем по id)
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


// https://www.positronx.io/create-laravel-vue-js-crud-single-page-application/


    export default {

        data(){

            return {
                ankets: []
            }
        },
        mounted() {
            this.axios
                .get('http://127.0.0.1:8000/api/ankets/1')
                .then(res => {
                    console.log(res)
                })
                .catch(err => {
                    console.log(error)
                })
                .finally()



            console.log('для axios user_id: ',uid)
            console.log('Component mounted.')
        }
    }
</script>
