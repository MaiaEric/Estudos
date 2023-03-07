
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
public class Exercicio4 {
    public static void main(String[] args) {
        int sal = Integer.parseInt (JOptionPane.showInputDialog("salario"));
        Double reag = sal-sal*0.07;
        System.out.println(reag);
    }
    }

