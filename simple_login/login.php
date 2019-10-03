<!doctype html>
<html lang="en">
<head>
    <title>Log In</title>
    <style>
        input {
            margin: 5px;
            padding: 5px;
        }
        form {
            height:200px; width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin") {
            echo "<h2>Welcome <span style='color: red'>" .$username. "</span> to website</h2>";
        } else {
            echo "<h2> <span style='color: red'>Login Error</span></h2>";
        }
    }
    ?>

    <form method="post">
        <h1>Login</h1>
        <input type = "text" name="username" placeholder="username"><br>
        <input type = "password" name="password" placeholder="password"><br>
        <input type = "submit" value = "Sign In">
    </form>
</body>
</html>