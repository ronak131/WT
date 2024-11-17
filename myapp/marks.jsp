<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
    <head>
        <title>Average marks</title>
    </head>
    <body>
        <%
String mathsParam = request.getParameter("maths");
String sciParam = request.getParameter("sci");
String engParam = request.getParameter("eng");

if (mathsParam != null && sciParam != null && engParam != null) {
    int maths = Integer.parseInt(mathsParam);
    int science = Integer.parseInt(sciParam);
    int english = Integer.parseInt(engParam);
    int total = maths + science + english;
    int avg = total / 3;
%>
    <p>Average: <%= avg %></p>
<%
    }
%>
    </body>
</html>