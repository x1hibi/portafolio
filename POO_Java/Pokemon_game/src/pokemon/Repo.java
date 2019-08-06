/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pokemon;

import java.util.LinkedList;

/**
 *
 * @author ray_din
 */

//Esta clase quiero que tenga los valores ya inicializados de todos los pokemon del juego, lo cuales
//por medio de metodo que contiene podra mandarlos a una lista que contengan lo sjugadores, 
//en pocas palabras esta solo servira como la libreria de datos de cada pokemons
public class Repo {
    //tiene atributos 
    String name;
    //Se crea una lista que contiene a los pokemons que puede guardar el jugador
    LinkedList<Pokemon> repolist = new LinkedList<>();
    
    //El metodo constructor no requiere de parametros para que se pueda llamar al inicio de la batalla
    public Repo(){}
    
    /**
     * Este metodo me permite el inicializar a los pokemones de manera individual al hacer consultas en el 
     * metodo de la pokedex
     * @param name Es el nombre del pokemon elegido  
     */
    public void pokedex(String name) {
        
            if ( name == "Bulbasaur" ){
     
            Pokemon bulbasaur = new Pokemon("Bulbasaur", 2, 3, 2, 3, "Hierba","ok");
            bulbasaur.show();
            }
            
            if ( name == "Chikorita" ){
            Pokemon chikorita = new Pokemon("Chikorita", 2, 3, 3, 3, "Hierba","ok");
            chikorita.show();
           
    }
            if (name=="Oddish"){
            Pokemon oddish = new Pokemon("Oddish", 2, 3, 3, 2, "Hierba","ok");
            oddish.show();
        }
            if (name=="Paras"){
            Pokemon paras = new Pokemon("Paras", 2, 4, 3, 2, "Hierba","ok");
            paras.show();
        }
             if (name=="Bellsprout"){
            Pokemon bellsprout = new Pokemon("Bellsprout", 2, 4, 2, 2, "Hierba","ok");
            bellsprout.show();
        }
        
            if (name =="Blastoise")
        {
            Pokemon blastoise = new Pokemon("Blastoise",2, 5, 3, 2, "Agua","ok" );
            blastoise.show();
        }
        
             if (name =="Lapras")
        {
            Pokemon lapras = new Pokemon("Lapras",2 ,4 ,2 ,3 , "Agua","ok");
            lapras.show();
        }
        if (name=="Gyarados")
        {
            Pokemon gyarados =  new Pokemon("Gyarados",3 ,4, 3, 2, "Agua","ok");
            gyarados.show();
        }
        
        if (name=="Charizard")
        {
            Pokemon charizard = new Pokemon("Charizard", 3, 5, 3, 3, "Fuego","ok");
            charizard.show();
        }
        
        if (name=="Blaziken")
        {
            Pokemon blaziken = new Pokemon("Blaziken", 2, 4, 3, 2, "Fuego","ok");
            blaziken.show();
        }
        
        if (name =="Infernape")
        {
            Pokemon infernape = new Pokemon("Infernape", 2, 3, 3, 2, "Fuego","ok");
            infernape.show();
        }
        
        if (name=="Ampharos")
        {
            Pokemon ampharos = new Pokemon("Ampharos",2, 3, 2, 3, "Electrico","ok");
            ampharos.show();
        }
        
        if (name=="Zapdos")
        {
            Pokemon zapdos = new Pokemon("Zapdos",3, 2, 2, 3, "Electrico","ok");
            zapdos.show();
        }
                
        if (name=="Raikou")
        {
            Pokemon raikou = new Pokemon("Raikou",4, 3, 3, 2, "Electrico","ok");
            raikou.show();
        }
            
}


    /**
     * Este metodo crea los pokemon uno por uno, es decir que asigna una direccion de memoria distinta, por lo que
     * cada pokemon es independoiente uno del otro 
     * @param n es id del pokemon, la cual esta basada en en la clase Repo
     */
    
    public void createList(LinkedList<Pokemon> lista,int n){
        if (n==0){
        Pokemon bulbasaur =new Pokemon("Bulbasaur", 100, 3, 2, 3, "Hierba","ok");
        lista.add(bulbasaur);
        }
        if (n==1){
        Pokemon chikorita = new Pokemon("Chikorita", 100, 3, 3, 3, "Hierba","ok");
        lista.add(chikorita);
        }
        if (n==2){
        Pokemon oddish = new Pokemon("Oddish", 100, 3, 3, 2, "Hierba","ok");
        lista.add(oddish);
        }
        if (n==3){
        Pokemon paras = new Pokemon("Paras", 100, 4, 3, 2, "Hierba","ok");
        lista.add(paras);
        }
        if (n==4){
        Pokemon bellsprout = new Pokemon("Bellsprout", 2, 4, 2, 2, "Hierba","ok");    
        lista.add(bellsprout);
        }
        if (n==5){
        Pokemon blastoise = new Pokemon("Blastoise",100, 5, 3, 2, "Agua" ,"ok");    
        lista.add(blastoise);
        }
        if (n==6){
        Pokemon lapras = new Pokemon("Lapras",100 ,4 ,2 ,3 , "Agua","ok");
        lista.add(lapras);
        }
        if (n==7){
        Pokemon gyarados =  new Pokemon("Gyarados",125 ,4, 3, 2, "Agua","ok");    
        lista.add(gyarados);
        }
        if (n==8){
         Pokemon charizard = new Pokemon("Charizard", 125, 5, 3, 3, "Fuego","ok");    
        lista.add(charizard);
        }
        if (n==9){
        Pokemon blaziken = new Pokemon("Blaziken", 100, 4, 3, 2, "Fuego","ok");    
        lista.add(blaziken);
        }
        if (n==10){
        Pokemon infernape = new Pokemon("Infernape", 100, 3, 3, 2, "Fuego","ok");    
        lista.add(infernape);
        }
        if (n==11){
        Pokemon ampharos = new Pokemon("Ampharos",100, 3, 2, 3, "Electrico","ok");    
        lista.add(ampharos);
        }
        if (n==12){
        Pokemon zapdos = new Pokemon("Zapdos",125, 2, 2, 3, "Electrico","ok");
        lista.add(zapdos);
        }
        if (n==13){
        Pokemon raikou = new Pokemon("Raikou",150, 3, 3, 2, "Electrico","ok");    
        lista.add(raikou);
        }
       
    }
    
}
  
