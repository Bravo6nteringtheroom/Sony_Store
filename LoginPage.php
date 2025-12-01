<?php
    include "./dbconnect.php";

    if(isset($_POST["Email"]) && isset($_POST["Password"])){
        $Username = $_POST["Email"];
        $Password = $_POST["Password"];

        $sql = "select Email , Password From user_account where Email = '$Username' ";
        $Compare = $connect->query($sql);
        if($Compare->num_rows > 0){
            while($row = $Compare->fetch_assoc()){
                if($Password == $row["Password"]){
                    header('Location: ' . 'index.html');
                }
                else { echo "Wrong Email or password"; }
            }
        }
    }else{
        echo "";
    }
?>
