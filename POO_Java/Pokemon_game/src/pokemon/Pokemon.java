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
public class Pokemon {
    //Atributos de los pokemons
    private Scanner sc = new Scanner(System.in);
    String nombre;
    String tipo;
    String estado;
    private int hp;
    int attack;
    int defense;
    int speed;
    

    //Métodos
    //Constructor
    public Pokemon(String nombre, int hp, int attack, int defense, int speed, String tipo,String estado) {
        this.nombre = nombre;
        this.hp = hp;
        this.attack = attack;
        this.defense = defense;
        this.speed = speed;
        this.tipo = tipo;
        this.estado = estado;
    }
    
    public void setState(String estado){
        this.estado = estado;
    }
    
    public String getState(){
        return estado;
    }
       
    //metodo para mostrar datos del pokemon
    public void show() {
        System.out.println("Estadisticas de " + nombre);
        System.out.println("Puntos de vida: " + hp);
        System.out.println("Ataque: " + attack);
        System.out.println("Defensa: " + defense);
        System.out.println("Velocidad: " + speed);
        System.out.println("Tipo: " + tipo);
        System.out.println("");
    }
    
    public String getName(){
        return nombre;
    }
    
    /**
     * Este metodo ser me permite el modificar el valor de hp del pokemon 
     * @return 
     */
        
    public void setHp(int hp){
        this.hp = hp;
    }
    
    public int getHp(){
        return hp;
    }
    
    
    public int getAtk(){
        return attack;
    }
    
      public int getDef(){
        return defense;
    }
    
    //este metod serivira para ver es estatus durante la batalla del pokemon
    
    public void status(){
        System.out.println("Pokemon: "+nombre);
        System.out.println("Vida: "+hp);
        System.out.println("Estado: "+estado);
        System.out.println("");
    
    }
    
    
    
    
   
        

}
