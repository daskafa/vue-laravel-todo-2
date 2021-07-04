<template>
    <div class="container my-3">
        <div class="text-white text-center">
            <p>Welcome {{user.name}}</p>
        </div>
        <div class="d-flex justify-content-center my-3">
            <button class="bg-white border-0 px-3 py-1" @click.prevent="logout">Logout</button>
        </div>
        <example-component></example-component>
    </div>
</template>

<script>
import ExampleComponent from "./ExampleComponent";

export default {
    components: {
        ExampleComponent
    },
    data(){
        return {
            user: null
        }
    },
    methods: {
      logout(){
          axios.post('/api/logout').then(() => {
              this.$router.push({name: 'Home'})
          })
      }
    },
    mounted() {
        axios.get('/api/user').then((res) => {
            this.user = res.data
        })
    }
}
</script>

<style scoped>

</style>
