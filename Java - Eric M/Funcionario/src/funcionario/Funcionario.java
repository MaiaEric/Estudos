/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package funcionario;

import javax.swing.JOptionPane;

/**
 *
 * @author 169127512022.4
 */
public class Funcionario {
    
          private int codFunc;
  private double salario;
  private double desconto;
  private double salfinal; 
  private String nome;

    public int getCodFunc() {
        return codFunc;
    }

    public void setCodFunc(int codFunc) {
        this.codFunc = codFunc;
    }

    public double getSalario() {
        return salario;
    }

    public void setSalario(double salario) {
        this.salario = salario;
    }

    public double getDesconto() {
        return desconto;
    }

    public void setDesconto(double desconto) {
        this.desconto = desconto;
    }

    public double getSalfinal() {
        return salfinal;
    }

    public void setSalfinal(double salfinal) {
        this.salfinal = salfinal;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

  
    
    
   void inseirFuncionario(){
        codFunc = Integer.parseInt(JOptionPane.showInputDialog("Codigo do funcionario"));
   }
    
    void calcularDesconto(double desconto) {
               desconto = Integer.parseInt(JOptionPane.showInputDialog("Codigo do funcionario"));
    }
    
        void calcularSalario(double salario) {
        
    }
  
      void mostrarFuncionario () {
        
    }
  
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    }
    
}
