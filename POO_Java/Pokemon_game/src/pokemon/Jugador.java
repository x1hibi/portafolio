/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pokemon;
import java.util.LinkedList;
import java.util.Scanner;

/**
 *
 * @author 
 */
public class Jugador {
    //Atributos
    private String nombre;
    //Se define como otro atributo la lista de pokemons por medio de una lista vacia 
    LinkedList<Pokemon> pokelist = new LinkedList<>();
    //Se define una lista con las pociones  
    int pociones[]={2,2,2};

   //metedo para llamar a un pokemon
    public void llamar(Pokemon nompoke){
    nompoke.show();
    
    }
   
    //El metodo constructor recibe solo el nombre
    
    public Jugador(){} 
    
   /**
    * Me retorna un String que contiene el nombre del jugador
    * @return 
    */
    public String getnombre()
    {
        return nombre;
    }
    /**
     * Nos ayuda a definir el valor del nombre del jugador
     * @param nombre es el valor que es asignado al jugador
     */
    
    public void setnombre(String nombre){
        this.nombre = nombre;
    }
    
    /**
     * Me permite modificar el numero de pociones de vida del jugador
     * @param item1 numero de pociones de vida
     */
    
    public void setItem1(int item1){
        this.pociones[0]=item1;
    }
    
      /**
     * Me permite modificar el numero de pociones de ataque del jugador
     * @param item2 numero de pociones de vida
     */
    
    public void setItem2(int item2){
        this.pociones[1]=item2;
    }
    
      /**
     * Me permite modificar el numero de pociones de defensa del jugador
     * @param item3 numero de pociones de vida
     */
    
    public void setItem3(int item3){
        this.pociones[2]=item3;
    }
    /**
     * Muestra el numero de pociones que tiene el jugador
     */
    
    public void showItem(){
        System.out.println("Items:\n");
        System.out.println("Pocion de vida: "+pociones[0]);
        System.out.println("Pocion de ataque: "+pociones[1]);
        System.out.println("Pocion de defensa: "+pociones[2]);
    }
    
 
    /**Permite el anadir los pokemons de una lista predefinida creada por el metodo initList() de la 
     * clase repo y anadirla a la lista de cada jugador
     * @param rep es el nombre del objeto creado de la clase repo
     * @param num Es el numero de pokemons que tendra cada jugador 
     */
    
    public void addPokemons(Repo rep ,int num){
        System.out.println("Prueba de anadir 1 pokemon de una lista ya creada:\n");
        //Se muestran las opciones de pokemon de 1 al 14
        System.out.println("Select six pokemons, these can be qqual or diffents: ");
        for (int i=0;i < num;i++){
        PokedexMain.list2();
        Scanner read = new Scanner(System.in); 
        //El entero n representa el indice de la lista predefinida 
        int n = read.nextInt();
        int number = n-1;
        rep.createList(pokelist, number);
            System.out.println("We add a new pokemon !!!");
    }}
    
    


}