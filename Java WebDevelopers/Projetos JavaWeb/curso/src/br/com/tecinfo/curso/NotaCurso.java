package br.com.tecinfo.curso;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class NotaCurso
 */
@WebServlet("/NotaCurso")
public class NotaCurso extends HttpServlet {
	@Override
	protected void service(HttpServletRequest req,  HttpServletResponse resp) throws IOException{
		PrintWriter out = resp.getWriter( );
		out.println("<html>");
		out.println("<body>");
		out.println("<h1>Nota por bimestre : <br> 1 Bimestre: 8,5 <br> 2 Bimestre: 7,0 <br> 3 Bimestre: 9,5"
		+ "<br> 4 Bimestre: 5,5");
		out.println("</body>");
		out.println("</html>");
	}
	

}