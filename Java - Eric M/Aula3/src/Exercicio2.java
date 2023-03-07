
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
public class Exercicio2 {
            public static void main(String[] args) {
                    int num1 = Integer.parseInt (JOptionPane.showInputDialog("Digite um numero:"));
                    int num2 = Integer.parseInt (JOptionPane.showInputDialog("Digite um numero para ser multiplicado:"));
System.out.println("Primeiro numero escolhido: " + num1);
                    System.out.println("Segundo numero escolhido: : " +num2);
                    System.out.println("Resultado: " + num1*num2);

        }
}
