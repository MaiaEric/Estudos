
import javax.swing.JOptionPane;

/*
Exercício 06: Switch Case
 */

public class Exercicio06 {
    public static void main(String[] args) {
        System.out.println("Switch Case");
        System.out.println("");
        System.out.println("Menu");
        System.out.println("1 - Ex03");
        System.out.println("2 - Ex04");
        System.out.println("3 - Ex05");
        
           
         int op = Integer.parseInt(JOptionPane.showInputDialog("ESCOLHA UM NÚMERO: 1, 2 ou 3 "));
         int N2,N1;
                switch (op) {
case 1: 
                  N1 = Integer.parseInt(JOptionPane.showInputDialog("N1: "));
                  N2 = Integer.parseInt(JOptionPane.showInputDialog("N2: "));
        
        int soma = N1+N2;
        int sub = N1-N2;
        int mult = N1*N2;
        int div = N1/N2;
        
        System.out.println(N1+"+"+N2+"="+soma);
        System.out.println(N1+"-"+N2+"="+sub);
        System.out.println(N1+"*"+N2+"="+mult);
        System.out.println(N1+"/"+N2+"="+div);
        
            
          break;
          
case 2:
                       
        N2 = Integer.parseInt(JOptionPane.showInputDialog("Primeiro número:"));
        N1 = Integer.parseInt(JOptionPane.showInputDialog("segundo número:"));
     if (N2>N1){
            System.out.println(N2+" é maior que "+N1);
        }else if( N2< N1){
            System.out.println(N2+" é maior que "+N1);
        }else{
            System.out.println(N2+" = "+N1);
        }
   break;

   case 3:
        int batata = Integer.parseInt(JOptionPane.showInputDialog("Número:"));
     if( batata%2 == 0 ){
        System.out.println(batata+" é par");
        }else{
        System.out.println(batata+" é impar");
        }
    break;
    default:
        System.out.println("opção invalida"); 
    }                  
    }
}  

