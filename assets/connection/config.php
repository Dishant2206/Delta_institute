<?php

    $conn = mysqli_connect('localhost','root','','delta_institute');

    if(!$conn){
        die("Connection failed: ".mysqli_connect_errno());
    }
?>
