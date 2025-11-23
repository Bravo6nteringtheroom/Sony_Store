<?php
    $Username = $_POST["Email"];
    $Password = $_POST["Password"];
    if(isset($Username) && isset($Password)){
        echo"This variable is Set";
    }else{
        echo "This variable aint Set";
    }
?>