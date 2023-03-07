
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Exercicio 5: Executar uma tabuada de multiplicar pelo numero escolhido pelo usuario . Faça a contagem de 0 a 10 usando While.
 * @author 169127512022.3
 */
public class Exercicio5 {
        public static void main(String[] args) {
        System.out.println("Tabuada");
        System.out.println("");
                    int num = Integer.parseInt (JOptionPane.showInputDialog("Digite um numero para ser multiplicado:"));
                    int num1 = 0;
        while (num1 <=10) {
System.out.println(num + "x" + num1 + "=" + num * num1);
           num1++; }
        }
      }