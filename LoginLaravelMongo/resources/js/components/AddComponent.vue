<template>   
    <form action="addTopic" method="POST"> 
        <br/>
        <h2>Add Topic</h2>
        <input type="hidden" name="_token" :value="csrf">
        <label>Topic Name</label><input id="topic" type="text" name="topic" placeholder="write a topic" required> 
        <label>Description</label><textarea id="description" type="text" name="description" placeholder="write a description" required></textarea>
        <label>URL tutorial</label><input id="url" type="url" name="url" placeholder="add a video url" required>
         <br/>
        <input type="submit" value="Add Topic">
        <br/>
    </form>
</template>

<script>
    export default {
        name:'addComponent',
        mounted() {
            console.log('add component')
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