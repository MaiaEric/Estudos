
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author 169127512022.5
 */
public class Exercicio6 {
                public static void main(String[] args) {
                    double sal1 = Integer.parseInt (JOptionPane.showInputDialog("Digite um salario:"));
                    double sal2 = Integer.parseInt (JOptionPane.showInputDialog("Digite um salario:"));
                    double tot = sal1 + sal2;
System.out.println("Total de salarios: " + tot);
                    System.out.println("Media dos salarios: " + tot/2);

        }
}
