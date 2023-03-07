
import javax.swing.JOptionPane;

/*
 Exercício 02: Variáveuis
 */

public class Exercicio02 {
    public static void main(String[] args) {
        String nome = JOptionPane.showInputDialog("Nome: ");
        int idade = Integer.parseInt(JOptionPane.showInputDialog("Idade: "));
        double altura = Double.parseDouble(JOptionPane.showInputDialog("Altura: "));
        
        System.out.println(nome + " tem " + idade + " anos " + " e tem " + altura + " de altura ");
    }
}
