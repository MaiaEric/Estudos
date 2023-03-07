
import javax.swing.JOptionPane;

/*
Exercício 03: Operadores Aritméticos
*/

public class Exercicio03 {
    public static void main(String[] args) {
        System.out.println("Operadores");
        System.out.println("");
       
        Double N1 = Double.parseDouble(JOptionPane.showInputDialog("N1: "));
        Double N2 = Double.parseDouble(JOptionPane.showInputDialog("N2: "));
        
        Double soma = N1+N2;
        Double sub = N1-N2;
        Double mult = N1*N2;
        Double div = N1/N2;
        
        System.out.println(N1+"+"+N2+"="+soma);
          System.out.println(N1+"-"+N2+"="+sub);
           System.out.println(N1+"*"+N2+"="+mult);
            System.out.println(N1+"/"+N2+"="+div);
        
        
    }
}
