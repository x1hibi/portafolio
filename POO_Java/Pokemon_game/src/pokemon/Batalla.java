/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pokemon;

import java.util.Scanner;

/**
 * Esta clase nos permite comenzar la secuencia de batalla 
 * @author ray_din
 */
public class Batalla {
    
    //se definen como atributros a los juegadores

    
    //Se llama al constrcutor por defecto 

    /**
     * Este es el metodo constructor que nos permite el crear un objeto de la clase batalla 
     */
        public Batalla(){}
    /**
     * Este metodo contiene la secuencia de batalla
     * @param player1 jugador 1
     * @param player2 jugador 2
     * @param okp Es el numero de estados ok que tendra cada jugador
     */
    
    public void iniciarBatalla(Jugador player1,Jugador player2,int okp) {
        System.out.println("Inicia la batalla");
        System.out.println("El pokemon por defecto es el primero que se eligio por lo que se recomienda el cambiar el pokemon al iniciar el turno");
        //Se genera un numero random, que es el que decide que juegador empieza primero 
        int turno= (int) (Math.random()*2+10);
        //Declaracion de variables de fin de combate
        //Al haber 6 pokemons el numero de estados ok inicial parta cada juador es igual a 6 
        int okp1 = okp;
        int okp2 = okp;  
        //Se definen las variables de los jugadores
        int p1 = 1;
        int p2 = 2;            
        //Se define al lector de la clase escaner
        Scanner reader = new Scanner(System.in);
        //La batalla continuara hasta que el numero de estados ok ses mayor no sea cero
        while( okp1 != 0 || okp1 != 0 ){    
        //la condicion para que inicie el turno del jugador 1 es que el numero sea par
        int cond = 0;
        //Se definen el pokemon actual de cada jugador
        int actual=0;
        int actual2=0;
        if (turno%2 == 0){ //Empieza el jugador 1 
            //Se indica el id del jugador con la variable player 
               //Se indica una condicion para que podamos salir del menu hasta que esta se cumpla
            while(cond == 0){
                System.out.println("el valor del tueno es:"+turno);
                System.out.println("Es el turno del jugador 1");
                System.out.println("Selecciona una opción:");
                System.out.println("1)Atacar");
                System.out.println("2)Usar pocion");
                System.out.println("3)Cambiar de pokemon");
                System.out.println("4)Ver pokemons");
                System.out.println("5)Estatus del pokemon actual");
                //Se define la varible opcion y el jugador guarda la opcion que eligio
                int option = reader.nextInt();
                //Se inicia el las opciones que podra realizar, es decir que se llaman las funciones
                //Que corresponde a cada accion 
                switch(option){
                    case 1:
                        //El jugador decide atacar con el pokemon en turno 
                        //Se manda a llamar el metodo atacar del pokemon en turno 
                        System.out.println("Selecciona el tipo de ataque:");
                        System.out.println("1)Ataque simple");
                        System.out.println("2)Ataque special");
                        System.out.println("0)Volver a las opciones de batalla");
                        //se define la opcion que tendra la seccion de ataque
                        int optatk =reader.nextInt();
                        switch(optatk){
                            case 0:
                                //con este caso podemos volver al menu anterior sin salir del turno
                                break;
                            case 1:
                                int atk1=player1.pokelist.get(actual).getAtk();
                                int def2=player2.pokelist.get(actual2).getDef();
                                double result=atk1-(0.666*def2)*10;
                                int res = (int) result;
                                 //Se hace un if para verificar si el resultado del ataqque es mayor a 0 
                                if (res > 0 ){
                                    System.out.println("vida antes "+player2.pokelist.get(actual).getHp());
                                    int vida = player2.pokelist.get(actual).getHp();
                                    player2.pokelist.get(actual).setHp(vida-res);
                                    System.out.println("El pokemon de "+player2.getnombre()+" recibe un dano de "+res);
                                    
                                    if ( vida <=0 ){
                                        player2.pokelist.get(actual2).setState("K.O.");
                                        System.out.println("EL pokemon de "+player2.getnombre()+" no puede continuar");
               
                                    }
                                    
                                    System.out.println("vida despues "+player2.pokelist.get(actual).getHp());
                                }else{
                                    System.out.println("El pokemon de "+player2.getnombre()+" no recibe dano");
                                }
                              
                                cond = 1;
                                break;
                            case 2:
                                System.out.println("Se realizo el ataque especial");
                                //se llama a la funcion de que realiza el ataque especial
                                cond = 1;
                                break;
                            default:
                            System.out.println("Selecciona una de las opciones anteriores ");
                            break;  
                        }
                        break;
                    case 2:
                        //El jugador usar una posicion para el pokemon en turno
                        System.out.println("Elige una de las siguientes pociones:");
                        System.out.println("1)Usar pocion de vida");
                        System.out.println("2)Usar pocion de ataque");
                        System.out.println("3)Usar pocion de defensa");
                        System.out.println("4)Ver lista de items");
                        System.out.println("0)Volver a las opciones de batalla");
                        
                        int optpos =reader.nextInt();
                        switch(optpos){
                            case 0:
                                //con este caso podemos volver al menu anterior sin salir del turno
                                break;
                            case 1:
                                System.out.println("Se uso la posicion de vida");
                                //se llama a la funcion de que aumenta la vida
                                cond = 1;
                                break;
                            case 2:
                                System.out.println("Se uso la posicion de ataque");
                                //se llama a la funcion de que realiza el aumenta el ataque
                                cond = 1;
                                break;
                            case 3:
                               System.out.println("Se uso la posicion de defensa");
                                 //se llama a la funcion de que realiza el aumento de defensa
                                  cond = 1;
                                break;   
                            case 4:
                                //se llama a la funcion de que realiza el aumento de defensa
                                player1.showItem();
                                break;
                            default:
                            System.out.println("Selecciona una de las opciones anteriores ");
                            break;  
                        }
                        
                        
                        break;
                    case 3:
                        System.out.println("Selecciona el pokemon que deseas usar:");
                        //Se manda a llamar la lista de pokemons del jugador 2
                        cond = 1;
                        break;
                    case 4:
                        System.out.println("Pokemons de "+player1.getnombre());
                        for (int i=0; i< player1.pokelist.size();i++){
                            int in=i+1;
                            System.out.println(in+")"+player1.pokelist.get(i).getName());
                        }
                        break;   
                    case 5:
                        System.out.println("El estatus es:");
                        player1.pokelist.get(actual).status();
                        break;     
                     default:
                     System.out.println("Selecciona una de las opciones anteriores ");
                     break;
                 }
            
            }
         // la condicion para que sea el turno del jugador 2 es que el numero sea impar   
        }else { //Empieza el jugador 2
            //Se indica el id del jugador con la variable player 
            //Se indica una condicion para que podamos salir del men u hasta que esta se cumpla
  
            while ( cond == 0 ){
                System.out.println("el valor del turno es:"+turno);
                System.out.println("Es el turno del jugador 2");
                System.out.println("Selecciona una opción:");
                System.out.println("1)Atacar");
                System.out.println("2)Usar pocion");
                System.out.println("3)Cambiar de pokemon");
                System.out.println("4)Ver pokemons");
                System.out.println("5)Estatus del pokemon actual");
                //Se define la varible opcion y el jugador guarda la opcion que eligio
                int option = reader.nextInt();
                //Se inicia el las opciones que podra realizar, es decir que se llaman las funciones
                //Que corresponde a cada accion 
                switch(option){
                    case 1:
                        //El jugador decide atacar con el pokemon en turno 
                        //Se manda a llamar el metodo atacar del pokemon en turno 
                        
                        System.out.println("Estado actual:");
                        System.out.println("Selecciona el tipo de ataque:");
                        System.out.println("1)Ataque simple");
                        System.out.println("2)Ataque special");
                        System.out.println("0)Volver a las opciones de batalla");
                        //se define la opcion que tendra la seccion de ataque
                        int optatk =reader.nextInt();
                        switch(optatk){
                            case 0:
                                //con este caso podemos volver al menu anterior sin salir del turno
                                break;
                            case 1:
                                //Se hace el calculo del ataque
                                int atk2=player2.pokelist.get(actual2).getAtk();
                                int def1=player1.pokelist.get(actual).getDef();
                                double result=(atk2-0.666*def1)*10;
                                int res = (int) result;
                                 //Se hace un if para verificar si el pokemon esta vivo
                                String status = player2.pokelist.get(actual2).getState();
                                if ( status == "K.O." ){
                                    System.out.println("No puedes usar este poquemon ");
                                }
                                if (res > 0){
                                    System.out.println("vida antes "+player1.pokelist.get(actual).getHp());
                                    int vida = player1.pokelist.get(actual).getHp();
                                    player1.pokelist.get(actual).setHp(vida-res);
                                    System.out.println("El pokemon de "+player1.getnombre()+" recibe un dano de "+res);
                                    //se cambia el estado del pokemon
                                    
                                    if ( vida <=0 ){
                                        player1.pokelist.get(actual).setState("K.O.");
                                        System.out.println("EL pokemon de "+player1.getnombre()+" no puede continuar");
               
                                    }
                                    
                                    System.out.println("vida despues "+player1.pokelist.get(actual2).getHp());
                                }else{
                                    System.out.println("El pokemon de "+player1.getnombre()+" no recibe dano");
                                }
                              
                                cond = 1;
                                break;
                            case 2:
                                System.out.println("Se realizo el ataque especial");
                                //se llama a la funcion de que realiza el ataque especial
                                cond = 1;
                                break;
                            default:
                            System.out.println("Selecciona una de las opciones anteriores ");
                            break;  
                        }
                        break;
                    case 2:
                        //El jugador usar una posicion para el pokemon en turno
                        System.out.println("Elige una de las siguientes pociones:");
                        System.out.println("1)Pocion de vida");
                        System.out.println("2)Pocion de ataque");
                        System.out.println("3)Pocion de defensa");
                        System.out.println("4)Ver lista de items");
                        System.out.println("0)Volver a las opciones de batalla");
                        
                        int optpos =reader.nextInt();
                        switch(optpos){
                            case 0:
                                //con este caso podemos volver al menu anterior sin salir del turno
                                break;
                            case 1:
                                System.out.println("Se uso la posicion de vida");
                                //se llama a la funcion de que aumenta la vida
                                cond = 1;
                                break;
                            case 2:
                                System.out.println("Se uso la posicion de ataque");
                                //se llama a la funcion de que realiza el aumenta el ataque
                                cond = 1;
                                break;
                            case 3:
                                System.out.println("Se uso la posicion de defensa");
                                //se llama a la funcion de que realiza el aumento de defensa
                                cond = 1;
                                break; 
                            case 4:
                                //se llama a la funcion de que realiza el aumento de defensa
                                player1.showItem();
                                break;    
                                
                            default:
                            System.out.println("Selecciona una de las opciones anteriores ");
                            break;  
                        }
                        
                        
                        break;
                    case 3:
                        System.out.println("Selecciona el pokemon que deseas usar:");
                        //Se manda a llamar la lista de pokemons del jugador 2
                        cond = 1;
                        break;
                    case 4:
                        System.out.println("Pokemons de "+player2.getnombre());
                        for (int i=0; i< player2.pokelist.size();i++){
                            int in=i+1;
                            System.out.println(in+")"+player2.pokelist.get(i).getName());
                        }
                        break;   
                    case 5:
                        System.out.println("El estatus es:");
                        player2.pokelist.get(actual2).status();
                        break;     
                     default:
                     System.out.println("Selecciona una de las opciones anteriores ");
                     break;
                 }
            }
        }
        //Al numero aleatorio turno se le suma 1, por lo que el modulo sera cero si era impar(jugador 2) y sera
        //par si era impar(juegador1) 
        turno = turno+1;
       }
        //Para salir del juego el valor de okp1 o el de okp2 debe ser cero y cuando se haga la comparcion numerica
        //se determinara el jugador ganador
        if (okp1 > okp2){
       System.out.println("Termino la batalla el ganador es: "+p1);
        }else{
        System.out.println("Termino la batalla el ganador es: "+p2);
        }
               
     }
    
    }     
