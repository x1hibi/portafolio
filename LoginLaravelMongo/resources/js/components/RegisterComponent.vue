<template>   
    <form action="register" method="POST"> 
        <br/>
        <h2>Register</h2>
        <input type="hidden" name="_token" :value="csrf">
        <label>Username</label><input id="UserNameInput" type="text" name="userName" placeholder="nickname" required> 
        <label>Email</label><input id="UserEmailInput" type="email" name="userEmail" placeholder="name@revimex.mx" required> 
        <label>Password</label><input id="UserPassword" type="password" name="userPassword" placeholder="password" required>
        <label>Confirm Password</label><input id="UserPassword2" type="password" placeholder="confirm password" required>  
        <br/>
        <input type="submit" value="Register">
        <br/>
    </form>
</template>

<script>
    export default {
        name:'registerComponent',
        mounted() {
            console.log('login component')
        },
        data(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        }
    
    }
</script>

<style>
main{
    grid-template-columns:1fr;
}
</style>