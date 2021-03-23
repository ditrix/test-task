<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="/">к анкетам</a></li>
                    </ol>
                </nav>                
                <div class="card">
                     <form @submit.prevent="create">
                    
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="anketa.name">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-primary">Просмотр</button>
                                    <button type="submit" class="btn btn-outline-secondary">Сохранить</button>
                                    <a href="/" type="button" class="btn btn-outline-success">Закрыть</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label>контент</label>
                                        <input type="text" class="form-control" v-model="anketa.content">
                                    </div>
                                </div>
                            </div>                                          
                            <div class="row">
                              <div class="col-12 mb-2">  
                              <div class="form-group form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox"  v-model="anketa.send_email">отправлять email автору анкеты
                                </label>
                              </div>
                                </div>
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                anketa: {
                    user_id: uid,
                    name: '',
                    content: '',
                    send_email: false,

                }
            }
        },
        mounted(){
            console.log(`create.anketa.userid: ${uid}`)
        },
        methods:{
             create(){
                axios.post(`/api/anket`,this.anketa)
                    .then( response=> {
                        console.log(response.data)

                         }   
                    )
                    .catch(error => console.log(error))

            }
        }

    }
</script>
