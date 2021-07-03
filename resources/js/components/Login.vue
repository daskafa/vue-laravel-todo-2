<template>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input v-model="form.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input v-model="form.password" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" @click.prevent="loginUser" class="btn btn-primary">login</button>
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
