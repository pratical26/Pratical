<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <style>
        body {
            font-family: Arial;
            background: lightblue;
            text-align: center;
        }

        .login {
            background: white;
            width: 300px;
            margin: 100px auto;
            padding: 25px;
            border-radius: 10px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 8px;
        }

        button {
            padding: 10px 30px;
            background: blue;
            color: white;
            border: 0;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="login">
    <h2>Login</h2>

    <form onsubmit="return login()">
        <input type="email" id="email"
               placeholder="Email" required>

        <input type="password" id="password"
               placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <p id="message"></p>
</div>

<script>
function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email == "admin@gmail.com" && password == "12345")
        document.getElementById("message").innerHTML = "Login Successful!";
    else
        document.getElementById("message").innerHTML = "Invalid Login!";

    return false;
}
</script>

</body>
</html>