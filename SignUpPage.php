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
            $Confirm = true;
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
        $sql = "insert into user_account (First_name,Last_name,Email,Password,Balance) values ('$First_name','$Last_name','$Email','$Password','$Balance')";
        if($connect->query($sql) === true){
            echo "Data inserted";
            header('Location: ' . 'index.html');
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
