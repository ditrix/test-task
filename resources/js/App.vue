<template>
    <div class="container"> 
 
        <router-view></router-view>
    </div>
</template>
 
<script>

    export default {

  mounted() {
        console.log('user_id: ',uid)
            console.log('Component mounted.')
        }


    }
</script>