
import javax.swing.JOptionPane;

/*
Exercício 05: Vericars eum número é par ou impar
 */

public class Exercicio05 {
    public static void main(String[] args) {
            int N1 = Integer.parseInt(JOptionPane.showInputDialog("N1: "));
            
            if(N1 %2 == 0){
                System.out.println(N1+" é par.");
            }else{
                System.out.println(N1+"é impar");
            }
    }
}
