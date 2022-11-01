<?php 
    $host="localhost";
    $username="root";
    $password="";
    $db="ovp";
      
    $con =mysqli_connect($host,$username,$password,$db);

    if(!$con)
    {
        echo "sorry there is a some thing wrong connected";
    }
?>