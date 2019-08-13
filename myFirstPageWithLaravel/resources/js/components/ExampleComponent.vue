<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">This is a example of Vue component</div>

                    <div class="card-body" id="app">
                        <input placeholder="Write your name">
                        <button class="btn" @click=newfun()>push me</button>
                        <p>{{name}}</p>
                    </div>
                </div>
            </div>
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
                name:'mynamexd'
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
