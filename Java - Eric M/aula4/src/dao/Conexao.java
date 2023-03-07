
package dao;

import java.sql.*;


public class Conexao {
    public static Connection conexao(){
        Connection conexao = null;
        String driver = "com.mysql.jdbc.Driver";
        String url = "jdbc:mysql://localhost/aula4";
        String usuario = "root";
        String senha = "";
        /*
        try = tente = olhar para tudo que é verdadeiro
        catch = pegue = olhar para os possíveis erros
        */
        try{
            Class.forName(driver);
            conexao = DriverManager.getConnection
        (url,usuario,senha);
            return conexao;
        }catch(ClassNotFoundException | 
                SQLException e){
            return null;
        }
    }
}
