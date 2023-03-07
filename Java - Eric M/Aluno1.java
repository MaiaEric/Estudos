/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aluno1;

import javax.swing.JOptionPane;

/**
 *
 * @author 169127512022.4
 */
public class Aluno1 {
     
 private int matricula;
  private String nome;
  private String cpf;
  private double prova01;
  private double prova02;
  private double media; 
  private String situacao;
  
  //2° Encapsulamento
  //get - pegar a informação
  //set - apontar a informação
     
    public int getMatricula() {
        return matricula;
    }

    public void setMatricula(int matricula) {
        this.matricula = matricula;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public double getProva01() {
        return prova01;
    }

    public void setProva01(double prova01) {
        this.prova01 = prova01;
    }

    public double getProva02() {
        return prova02;
    }

    public void setProva02(double prova02) {
        this.prova02 = prova02;
    }

    public double getMedia() {
        return media;
    }

    public void setMedia(double media) {
        this.media = media;
    }

    public String getSituacao() {
        return situacao;
    }

    public void setSituacao(String situacao) {
        this.situacao = situacao;
    }
 
  //3° passo: constructor
 //Ele vai construir uma ponte classe e a saida da informação
 
    public Aluno1() {
        
    }
    void inseirAluno(){
        matricula = Integer.parseInt(JOptionPane.showInputDialog("matricula"));
        nome = JOptionPane.showInputDialog("nome");
         cpf = JOptionPane.showInputDialog("cpf");
          prova01 = Double.parseDouble(JOptionPane.showInputDialog("Prova 01: "));
            prova02 = Double.parseDouble(JOptionPane.showInputDialog ("Prova 02: "));
   
    }
    void calcularMedia(double media) {
        media = (getProva01()+getProva02())/2;
        this.media = media;
    }
    
    void mostrarSituacao(String situacao) {
      if(getMedia()>= 7){
          situacao = "aprovado";
    }else{
     situacao = "reprovado";
    
    this.situacao = situacao;
 }
    }
    void mostrarAluno(){
     System.out.print("matricula"+getMatricula());
     System.out.print("nome"+getNome());
     System.out.print("cpf"+getCpf());
     System.out.print("prova01"+getProva01());
     System.out.print("media"+getMedia());
     System.out.print("situacao"+getSituacao());
        
    }
 public static void main (String[] args) {
     double media = 0;
     String situacao = "";
     Aluno1 aluno = new Aluno1();
     System.out.println("Escola do Saber:");
     System.out.println("");
     aluno.inseirAluno();
     aluno.calcularMedia(0);
     aluno.mostrarSituacao(situacao);
     aluno.mostrarAluno();
         }
}
