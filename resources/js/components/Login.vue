<template>
    <div class="container w-75">
        <form>
            <div class="form-group text-white">
                <label for="exampleInputEmail1">Email address</label>
                <input v-model="form.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group text-white">
                <label for="exampleInputPassword1">Password</label>
                <input v-model="form.password" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" @click.prevent="loginUser" class="btn btn-primary">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            form: {
                email: '',
                password: ''
            },
            errors : []
        }
    },
    methods: {
        loginUser(){
            axios.post('/api/login', this.form).then(() => {
                this.$router.push({name: 'Dashboard'})
            }).catch(error => {
                this.error = error.response.data.errors
            })
        }
    }
}
</script>

<style scoped>

</style>
