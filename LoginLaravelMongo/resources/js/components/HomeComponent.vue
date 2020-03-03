<template>  
    <section style="padding:2.5%;margin:auto;">
        <h2 style="color:black">home</h2>
        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
    </section>
     
</template>


<script>
    export default {
        name:'HomeComponent',
        mounted() {
            console.log('HomeComponent')
        },
        data(){
            return {
                test:'value',
            }
        }
    
    }
</script>

<style>

main{
    grid-template-columns:1fr;
}

section{
    margin: 4% auto;
    padding:1.5%;
    width:90%;
}

 @media screen and (max-width:1025px) {
    section{
    margin: 2.5% auto;
    padding:5%;
    width:95%;
}
 }

</style>