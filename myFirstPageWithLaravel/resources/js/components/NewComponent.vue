<template>

                    <div id="app" style="text-align: center">
                        <label>Name:</label>
                        <input placeholder="Write your name" v-model="name">
                        <label>Select the font color:</label>
                        <input type="color" v-model="color">
                        <label>Chose the size:</label>
                        <input type="number" placeholder="insert the font size" v-model="size">
                        <label>Select the background color:</label>
                        <input type="color" v-model="color1">
                        <div :style="{backgroundColor:color1}">
                        <p v-bind:style="{color:color,fontSize:size+'px'}" >{{name}}</p>
                        </div>
                    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('you are new')
        },
        data(){
            return{
                name:'',
                color:'',
                color1:'',
                size:''
            }
        }
        ,
        methods: {
            newfun() {
                alert('this is a new alert');
            }
        }

    }
</script>
