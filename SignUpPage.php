<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/SignUpPage.style.css">
</head>
<body>
    <form action="SignUpPage.php" method="POST" id="SignUpForm">
        <h2 id="Sign_title">Sign Up</h2>
        <div id="F_L">
            <input type="text" name="First_name" placeholder="First_name" id="First_name">
            <span id="First_name_Error"></span>
            <input type="text" name="Last_name" placeholder="Last_name" id="Last_name">
            <span id="Last_name_Error"></span>
        </div>
        <input type="email" name="new_Email" placeholder="Email" id="Email">
        <span id="Email_Error"></span>
        <input type="password" name="new_Password" placeholder="Password" id="Password">
        <span id="Password_Error"></span>
        <input type="password" name="confirm_Password" placeholder="Confirm Password" id="Password_Confirm">
        <span id="Password_Confirm_Error"></span>
        <input type="text" name="Balance" id="Balance">
        <button id="Sign_Up_btn">Sign Up</button>
    </form>

    <script src="SignUpPage.js"></script>
</body>
</html>

<?php
    include "./dbconnect.php";
    
    if (isset($_POST["First_name"], $_POST["Last_name"], $_POST["new_Email"], $_POST["new_Password"], $_POST["confirm_Password"]) &&!empty($_POST["First_name"]) &&!empty($_POST["Last_name"]) &&!empty($_POST["new_Email"]) &&!empty($_POST["new_Password"]) &&!empty($_POST["confirm_Password"]) && !empty($_POST["Balance"])) {
        $First_name = $_POST["First_name"];
        $Last_name = $_POST["Last_name"];
        $Email = $_POST["new_Email"];
        $Password = $_POST["new_Password"];
        $Password_Confirm = $_POST["confirm_Password"];
        $Balance = $_POST["Balance"];

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
    if($Balance < 0){
        $Confirm = false;
    }else{
        $Confirm = true;
    }

    if($Confirm){
        $sql = "insert into user_account (First_name,Last_Name,Email,Password,Balance) values ('$First_name','$Last_name','$Email','$Password','$Balance')";
        if($connect->query($sql) === true){
            echo "Data inserted";
        }else{
            echo "Error occurred" . $connect->error;
        }
    }else{
        echo "The Confirm is false";
    }
} else {
        echo"";
    }
?>
