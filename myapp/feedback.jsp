<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        /* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Form Container */
form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px;
    width: 100%;
    max-width: 400px;
    margin: 20px;
}

/* Labels */
label {
    display: block;
    margin: 15px 0 5px;
    font-weight: bold;
    color: #333;
}

/* Input and Textarea Fields */
input, 
textarea {
    width: calc(100% - 16px); /* To account for padding */
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

/* Focus State for Inputs and Textarea */
input:focus, 
textarea:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    outline: none;
}

/* Button Styling */
button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 15px;
    width: 100%;
}

/* Button Hover Effect */
button:hover {
    background-color: #45a049;
}

/* Response Box */
.response {
    margin: 20px 0;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #e8f5e9;
    font-size: 16px;
    color: #2e7d32;
}

/* Media Queries for Responsiveness */
@media (max-width: 500px) {
    input, textarea {
        width: calc(100% - 12px);
        font-size: 14px;
    }

    button {
        font-size: 14px;
        padding: 10px;
    }
}

    </style>
</head>
<body>
    <h1>Feedback Form</h1>
    <form method="post" action="feedback.jsp">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <%
        // Handle form submission
        String name = request.getParameter("name");
        String email = request.getParameter("email");
        String feedback = request.getParameter("feedback");

        if (name != null && email != null && feedback != null) {
    %>
        <div class="response">
            <h2>Thank you for your feedback!</h2>
            <p><strong>Name:</strong> <%= name %></p>
            <p><strong>Email:</strong> <%= email %></p>
            <p><strong>Feedback:</strong> <%= feedback %></p>
        </div>
    <%
        }
    %>
</body>
</html>