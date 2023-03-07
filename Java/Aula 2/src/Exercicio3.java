
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *Exercicio3: Testar 3 nomes, suas iddades e verificar se:
 * idade >= 65 "idade feliz"
 * idade >= 18 "Maior idade"
 * idade <= 18 "Menor idade"
 * @author 169127512022.3
 */
public class Exercicio3 {
        public static void main(String[] args) {
        System.out.println("Idades");
        System.out.println("");
        for (int i=1; i<=3; i++){
                                String nm = JOptionPane.showInputDialog("Digite um nome: ");
            int id = Integer.parseInt
                    (JOptionPane.showInputDialog("Digite um numero:"));
            if(id >=65) {
                System.out.println(nm + " tem " + id + " anos de idade " + " ou seja, tem uma idade feliz. ");
            } else if(id >=18){
                System.out.println(nm + " tem " + id + " anos de idade " + ", ou seja, é de maior idade ");
            }
            else if(id <18){
                System.out.println(nm + " tem " + id + " anos de idade " + " ou seja, é de menor idade ");
            }
           
        }
    }
}
