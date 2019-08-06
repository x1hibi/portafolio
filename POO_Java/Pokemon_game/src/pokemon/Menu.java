/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pokemon;

import java.util.Scanner;
import java.awt.Desktop;
import java.io.File;
import java.io.IOException;

/**
 *
 * @author ray_din
 */
public class Menu {
   //Se declara el metodo constructor 
   public Menu (){}
    
   static void main(){
   int option;
   int condition = 0;
   Scanner reader = new Scanner(System.in); 
    PokedexMain pokedex = new PokedexMain();
   while(condition == 0){
   //Opciones mostradas en pantalla al usuario
   
   System.out.println("Selecciona una opción:");
   System.out.println("1)Iniciar");
   System.out.println("2)Pokedex");
   System.out.println("3)Instrucciones");
   System.out.println("4)Salir");    
       
   option = reader.nextInt();
   
       switch(option){
           case 1:

               //Parte 1 creacion de jugadores
               //Se crean los dos jugadores, los scanner de cada uno y el objeto repositorio
               Jugador jugador1 = new Jugador();
               Jugador jugador2 = new Jugador();
               Scanner read = new Scanner(System.in);
               Scanner read2 = new Scanner(System.in);
               Scanner read0 = new Scanner(System.in);
               Repo listpredef = new Repo();
                //Parte 2 Se indica el numero de pokemons a elegir  
               int numpoke=0;
               int cond = 0;
               while(cond==0){
               System.out.println("Selecciona el numero de pokemones a combatir(min 1 max 6) ");
               numpoke = read0.nextInt();
               if (numpoke <= 6 & numpoke >0 ){
                   cond = 1;
               }
               else {
                   System.out.println("El numero ingresado no es valido");
               }}
               
              //jugador 1
              //se asigna el nombre del jugador 1
               System.out.println("Ingrese el nombre del jugador 1:");
               String name = read.nextLine();
               //Usamos el metodo get para asignar el nombre
               jugador1.setnombre(name);
               //Se asignan los pokemons al jugador 1
               jugador1.addPokemons(listpredef, numpoke);
              //jugador 2
              //Se asigna el nombre del jugador 2
               System.out.println("Ingrese el nombre del jugador 2:");
               String name2 = read2.nextLine();
               jugador2.setnombre(name);
               jugador2.addPokemons(listpredef, numpoke);
               //Parte 3 Se crea un objeto de tipo batalla y se llama al metodo iniciar batalla
               Batalla battle = new Batalla();
               battle.iniciarBatalla(jugador1, jugador2, numpoke);
      
               
               break;
           case 2:
               //Se crea el objeto pokedex que nos permitira conocer los pokemons que hay y sus estadisticas
              // PokedexMain pokedex = new PokedexMain();
               pokedex.showMain();
               
               break;
           case 3:
               System.out.println("The instructions are open in a pdf file");
               try{    
                 //Se llama al metodo get de la clase Desktop
                  Desktop d = Desktop.getDesktop();
                 //La variable dir contiene la direccion del archivo
                File f = new File("/home/ray_din/proteco/java/proyecto/pokemon_easy/build/test.pdf");
                d.open(f);
                }
                catch(Exception e) {
                  System.out.println("The file is not found");
        }               
             
               break;
           case 4:
               condition = 1;
               System.out.println("Thanks for play with us!"); 
               System.out.println("Came back again!!!"); 
               break;
           default:
               System.out.println("The number that you inserted is not inside the list, try again");
               break;
       }
    }
   
  }
    
}
