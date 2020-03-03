<template>
    <div class="flexContainer" style="align-items: flex-start;" >
        <aside>
            <h4>Topics</h4>
            <ol v-for="value in responseQuery">
                <li>.-{{value.topic}}</li>
            </ol>
        </aside>
        <section> 
                <header class="sectionHeader flexContent">
                <i id="left" class="flexContainer">&lt</i>
                <h2>Capacitation Course</h2>
                <i id="right" class="flexContainer">&gt</i>
                </header>
                <article v-for="(value,index) in responseQuery">
                    <h3>{{value.topic}}</h3>
                    <p>{{value.description}}</p>
                    <iframe :src="responseQuery[index].url" allowfullscreen></iframe>
                </article>
                </section>

    </div>
</template>

<script>
    export default {
        name:'CourseComponent',
        mounted() {
            console.log('CourseComponent'),
            this.query()
        
        },
        data(){
            return {
                responseQuery:[],
                counter:0
            }
        },
        methods:{
            //DFUNC This is a method to get the table 
            query(){
                let urlRequest='/query';
                axios.get(urlRequest).then((petitionResult)=>{
                console.log(petitionResult.data);
                this.responseQuery = petitionResult.data;
                }); 
            //DFUNC 
            },
        }
    
    }
</script>

<style>

h2 {
    color:white;
    text-shadow: 0 0 1px black;
}

article h3 {
    color:black;
    font-size:150%;
}

section{
    margin: 0;
    padding: 0;
}

aside {
    border: 3px solid darkblue;
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    margin-right: 2.5%;
    width: 25%;
}

@media screen and (max-width:1025px) {
      
h2 {
    font-size: 100%;
}

}

</style>