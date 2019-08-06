/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.awt.Desktop;
import java.io.*;
import java.util.Scanner;

/**
 * Esta clase contiene un metodo para abrir la guia de usuario
 * @author ray_din
 */
public class pdfOpen {
    
    public class pdfOpen(){}
    
    /**
     * Este metodo abre el archivo de guia de usuaio
     */
    
    static void open(){
        
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
    
    
    }
    
   
     
     
    
}