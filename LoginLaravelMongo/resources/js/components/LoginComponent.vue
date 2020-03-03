<template>   
    <form action="login" method="POST"> 
        <br/>
        <h2>Login</h2>
        <input type="hidden" name="_token" :value="csrf">
        <label>Username</label><input id="UserNameInput" type="text" name="userName" placeholder="nickname" required> 
        <label>Password</label><input id="UserPassword" type="password" name="userPassword" placeholder="password" required>
        <br/>
        <input type="submit" value="Login">
        <br/>
    </form>
</template>


<script>
    export default {
        name:'loginComponent',
        mounted() {
            console.log('loginComponent')
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

.banner{
    background-color: darkblue;
}

nav {
    background-color: darkblue;
}


</style>