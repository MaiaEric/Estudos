package br.com.Projeto1.servlet;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/NovoProjeto1")
public class NovoProjeto1Servlet extends HttpServlet {
	
	private static final long serialVersionUID = 1L;
	
    protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		System.out.println("Cadastrando nova empresa");
		
		String nomeloja = request.getParameter("loja");
		String nomefilme = request.getParameter("filme");
		String codigo = request.getParameter("codigo");
		
		NovoProjeto1Servlet loja = new NovoProjeto1Servlet();
		loja.setloja(nomeloja);
		loja.setloja(nomefilme);
		loja.setloja(codigo);
		
		PrintWriter out = response.getWriter();
		out.println("<html><body>"+
				"Nome da Loja:"+ nomeloja +"<br>"
				+"Nome do filme:"+ nomefilme +"<br>"
				+"Codigo do FIlme:"+ codigo+"<br>"				
				+"</body></html>");
    }

	private void setloja(String nomeloja) {
		// TODO Auto-generated method stub
		
	}

}
