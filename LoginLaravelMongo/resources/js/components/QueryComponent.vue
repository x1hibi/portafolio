<template>
    <div>
        <h2>query axiso test</h2><br>
        <button v-on:click="query">make query</button>
        <code>{{responseQuery[0]}}</code>
    </div>    
</template>


<script>
    export default {
        name:'queryComponent',
        mounted() {
            console.log('queryComponent'),
            this.query()
        },
        data(){
            return {
                responseQuery:[],
            }
        },
        methods:{
            //DFUNC This is a method to get the table 
            query(){
                let urlRequest='/query2';
                axios.get(urlRequest).then((petitionResult)=>{
                console.log(petitionResult.data);
                this.responseQuery = petitionResult.data;
                }); 
                
            },
        }
    
    }
</script>

<style>
main{
    grid-template-columns:1fr;
}
</style>