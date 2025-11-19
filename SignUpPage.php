<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Sony_Store/Css/SignUpPage.style.css">
</head>
<body>
    <form action="SignUpPage.php" method="POST" id="SignUpForm">
        <h2 id="Sign_title">Sign Up</h2>
        <div id="F_L">
            <input type="text" name="First_name" placeholder="First_name">
            <input type="text" name="Last_name" placeholder="Last_name">
        </div>
        <input type="email" name="new_Email" placeholder="Email">
        <input type="password" name="new_Password" placeholder="Password">
        <input type="password" name="confirm_Password" placeholder="Confirm Password">
        <button id="Sign_Up_btn">Sign Up</button>
    </form>
</body>
</html>

<?php
    include "./dbconnect.php";
    
    if (isset($_POST["First_name"], $_POST["Last_name"], $_POST["new_Email"], $_POST["new_Password"], $_POST["confirm_Password"]) &&!empty($_POST["First_name"]) &&!empty($_POST["Last_name"]) &&!empty($_POST["new_Email"]) &&!empty($_POST["new_Password"]) &&!empty($_POST["confirm_Password"])) {
        $First_name = $_POST["First_name"];
        $Last_name = $_POST["Last_name"];
        $Email = $_POST["new_Email"];
        $Password = $_POST["new_Password"];
        $Password_Confirm = $_POST["confirm_Password"];

        if($Password === $Password_Confirm){
        echo"These 2 strings are equal";
    }
    $Confirm = true;
    if(str_contains($Email,'@gmail.com')){
        $Confirm = true;
    }else{
        $Confirm = false;
    }
    if(strlen($Password) > 8 && preg_match('/\\d/',$Password)){
        $Confirm = true;
    }else{
        $Confirm = false;
    }

    if($Confirm){
        $sql = "insert into user (First_name,Second_name,Email,Password) values ('$First_name','$Last_name','$Email','$Password')";
        if($connect->query($sql) === true){
            echo "Data inserted";
        }else{
            echo "Error occurred" . $connect->error;
        }
    }else{
        echo "The Confirm is false";
    }
} else {
        echo"Please fill in the following stuff:";
    }
?>