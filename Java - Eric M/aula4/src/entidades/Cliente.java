
package entidades;

public class Cliente {
    public int idCliente;
    public String nomeCliente;   
    public String cpfCliente;
    public String telefone;
   
    
    public int getIdCliente() {
        return idCliente;
    }

    public void setIdCliente(int idCliente) {
        this.idCliente = idCliente;
    }

    public String getNomeCliente() {
        return nomeCliente;
    }

    public void setNomeCliente(String nomeCliente) {
        this.nomeCliente = nomeCliente;
    }
    

    public String getCpfCliente() {
        return cpfCliente;
    }

    public void setCpfCliente(String cpfCliente) {
        this.cpfCliente = cpfCliente;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }

   public Cliente(){
       //construtor vazio serve para a saída das informações
   }
   
   public Cliente(int idCliente,String nomeCliente, 
      String cpfCliente,String telefone){
      this.idCliente = idCliente;
      this.nomeCliente = nomeCliente;
      this.cpfCliente = cpfCliente;
      this.telefone = telefone;
   }
    
}
