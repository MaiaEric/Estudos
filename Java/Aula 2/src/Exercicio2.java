
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *Exercicio 02: Entrade de 5 numeros inteiros
 * @author 169127512022.3
 */
public class Exercicio2 {
    public static void main(String[] args) {
        System.out.println("Verificação de numero");
        System.out.println("");
        for(int i = 1; i <= 5; i++) {
            int x = Integer.parseInt
                    (JOptionPane.showInputDialog("numero"));
            if(x %5 ==0) {
                System.out.println(x +" é multiplo.");
            } else{
                System.out.println(x+" não é multiplo.");
            }
           
        }
    }
 
}
