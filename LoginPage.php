<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/LoginPage.style.css">
</head>
<body>
    <form action="LoginPage.php" method="POST" id="LoginForm">
        <h2 id="title">Login Page</h2>
        <input type="text" name="Email" placeholder="Email">
        <input type="password" name="Password" placeholder="Password">
        <button>LOGIN</button>
    </form>

    <?php
        if(isset($Username) && isset($Password)){
            $Username = $_POST["Email"];
            $Password = $_POST["Password"];
            echo"The variable is set";
        }else{
        }
    ?>
</body>
</html>