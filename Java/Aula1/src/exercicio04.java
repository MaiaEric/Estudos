
import javax.swing.JOptionPane;

/*
 Exerício 04: Estrutura de Decisão
 */

public class exercicio04 {
    public static void main(String[] args) {
        System.out.println("");
          int N1 = Integer.parseInt(JOptionPane.showInputDialog("N1: "));
         int N2 = Integer.parseInt(JOptionPane.showInputDialog("N2: "));
         
        if (N1 > N2){
           System.out.println(N1+" é maior "+N2);
           }else if (N1 < N2) {
                System.out.println(N2+" é maior "+N1);
        
        }else{
            System.out.println(N1 +" = "+ N2);
        }
    }
}

