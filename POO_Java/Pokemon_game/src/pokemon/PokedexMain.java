/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pokemon;

import java.util.Scanner;

/**
 *
 * @author ray_din
 */
public class PokedexMain {

//No se define el metodo contructor, ya que el metodo showManin() es estatico y publico, por lo que puede ser 
//llamado sin la necesidad de crear un objeto de esta clase
    static void list2() {
        
        //atributos para el uso del loop while    
         int number;
        int condition = 0;
        //Se crea un arreglo con los nombres de los pokemons disponibles
        String[] list = {"Bulbasaur","Chikorita","Oddish","Paras","Bellsprout",
        "Blastoise","Lapras", "Gyarados", "Charizard", "Blaiziken", "Infernape", "Ampharos", "Zapdos", "Raikou"};
       
        //Se hace un loop para que se pueda revisar las estadisticas de los pokemons ,sin volver al menu
        
        //con este ciclo for se enlista los pokemons 
        for (int i=0;i<list.length;i++){
        int l=i+1;
        System.out.println(l+")"+list[i]);
        } 
        
    }
    
   //Este me permite el mostrar una lista con los pokemons disponibles en el juego
   static void list(){
   //atributos para el uso del loop while    
   int number;
   int condition = 0;
   //Se crea un arreglo con los nombres de los pokemons disponibles
   String[] list = {"Bulbasaur","Chikorita","Oddish","Paras","Bellsprout",
   "Blastoise","Lapras", "Gyarados", "Charizard", "Blaiziken", "Infernape", "Ampharos", "Zapdos", "Raikou"};
   Scanner reader = new Scanner(System.in); 
   //Se hace un loop para que se pueda revisar las estadisticas de los pokemons ,sin volver al menu
   //El cilo while tiene como condicion que el valor sea igual a 0 cuando este valor cambie acaba el ciclo y vuelve al menu anterio
   while(condition == 0){
        System.out.println("Select one pokemon to see his statics");
        //con este ciclo for se enlista los pokemons 
        for (int i=0;i<list.length;i++){
           int l=i+1;
        System.out.println(l+")"+list[i]);
        } 
        System.out.println("Select 0 to back to the menu");
   //Se solicita al usuario que ingrese un numero para ver las estadisticas de un pokemon
   number = reader.nextInt();
   //Con el valor cero se vuelve al menu anterio
      if (number == 0){
          condition = 1;
      }else if (number <= list.length){
          System.out.println("The info are:");
          String name;
          //con el numero que inserto el usuario se obtiene el nombre del pokemon y se guarda en name
          name=list[number-1];
          //Se crea el objeto repos de la clase Repo 
          Repo biblio =new Repo();
          //Se llama el metodo info
          biblio.pokedex(name);
      }
      else {
          System.out.print("No se ingreso un numero enlistado, ingrese un numero nuevamente");          
                  }
    }
   
  }
    
  
   //Se define el metodo showlist()
   static void showMain(){
   int option;
   int condition = 0;
   Scanner reader = new Scanner(System.in); 
   
   while(condition == 0){
       System.out.print("\033[H\033[2J");
        System.out.println("Select one option");
        System.out.println("1)Pokemons list and stats");        
        System.out.println("2)Return to menu");
   
   option = reader.nextInt();
       //Menu de la pokedex
       switch(option){
           case 1:
               //Se llama a un metodo de la misma clase (propia del pokedex)
               System.out.print("\033[H\033[2J");
               list();
               break;
           case 2:
               System.out.print("\033[H\033[2J");
               condition = 1;
               System.out.println("return to the main menu");
               break;
           default:
               System.out.print("\033[H\033[2J");
               System.out.println("The number that you insert is not between the above options");
               break;
       }
    }
   
  }
   
   
   
     
     
}    
        
    
