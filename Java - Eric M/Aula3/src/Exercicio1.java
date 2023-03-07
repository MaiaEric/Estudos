
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
public class Exercicio1 {
    public static void main(String[] args) {
        String x = JOptionPane.showInputDialog("Informe a primeira letra do seu nome: ");
                String y = JOptionPane.showInputDialog("Informe uma letra do seu nome: ");
                String z = JOptionPane.showInputDialog("Informe uma letra do seu nome: ");
                                String p = JOptionPane.showInputDialog("Informe a ultima letra do seu nome: ");

        System.out.println("nome completo: " + x+y+z+p);
        System.out.println("nome letra por letra: ");
        System.out.println(x);
        System.out.println(y);
        System.out.println(z);
        System.out.println(p);
    }
}
