
package dao;
import java.sql.*;
import entidades.Cliente;
import javax.swing.JOptionPane;
public class ClienteDao extends Conexao {
    Connection conexao = null;
    PreparedStatement stmt = null;
    ResultSet rs = null;
    
    public ClienteDao(){
        this.conexao = Conexao.conexao();
    }
    //1º CRUD = C = criar
    public void adicionar(Cliente cliente){
        String sql = "insert into cliente(nomeCliente,cpfCliente,telefone) values(?,?,?)";
        try{
            stmt = conexao.prepareStatement(sql);
            stmt.setString(1, cliente.getNomeCliente());
            stmt.setString(2, cliente.getCpfCliente());
            stmt.setString(3, cliente.getTelefone());
            stmt.executeUpdate();
        }catch(Exception e){
            JOptionPane.showMessageDialog
        (null,"Erro no SQL - DAO"+ e.getMessage());
        }
    }
    public Cliente consultar (String cpf){
        try{
            Cliente cliente = new Cliente();
            stmt = conexao.prepareStatement("select * from cliente where cpfCliente = ?");
            stmt.setString(1, cpf);
            rs = stmt.executeQuery();
            if (rs.next()){
                cliente.setIdCliente(rs.getInt("idCliente"));
                cliente.setNomeCliente(rs.getString("nomeCliente"));
                cliente.setCpfCliente(rs.getString("cpfCliente"));
                cliente.setTelefone(rs.getString("telefone"));
return cliente;
            }else{
                return null;
            }
        }catch (Exception e){
            JOptionPane.showMessageDialog
        (null,"Erro no SQL - DAO"+ e.getMessage());
            return null;
        }
    }
}
