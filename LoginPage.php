<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Sony_Store/Css/LoginPage.style.css">
</head>
<body>
    <form action="LoginPage.php" method="POST" id="LoginForm">
        <h2 id="title">Login Page</h2>
        <input type="text" name="Email" placeholder="Email">
        <input type="password" name="Password" placeholder="Password">
        <button>LOGIN</button>
    </form>
</body>
</html>

<?php
    include "./dbconnect.php";

    if(isset($_POST["Email"]) && isset($_POST["Password"])){
        $Username = $_POST["Email"];
        $Password = $_POST["Password"];

        $target_url = "http://localhost/xampp/Sony_Store/index.html?";
        //WTF
        $sql = "select Email , Password From user_account where Email = '$Username' ";
        $Compare = $connect->query($sql);
        if($Compare->num_rows > 0){
            while($row = $Compare->fetch_assoc()){
                if($Password == $row["Password"]){
                    header('Location: ' . $target_url);
                }
                else { echo "Wrong Email or password"; }
            }
        }
    }else{
        echo "";
    }
?>
