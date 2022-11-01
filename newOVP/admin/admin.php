<?php
    include("../dbms.php");
    if(isset($_POST["add"]))
    {
        $mohname=implode($_POST["mohname"]);
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $address=$_POST["address"];
        $tel=$_POST["tel"];
        $password=$_POST["password"];

        $result = mysqli_query($con,"INSERT INTO `mohstaff`(`mohname`,`fname`,`lname`,`address`,`tel`,`password`)VALUES('$mohname','$fname',' $lname','$address','$tel','$password')");

        $result2 = mysqli_query($con,"INSERT INTO `account`(`userName`,`password`,`role`)VALUES('moh','$password','mohstaff')");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <form action="" method="post">
        
        <label name="mohname">Name of the MoH :</label>
        <select name="mohname[]" size="1">
            <option value="Jaffna">Jaffna</option>
            <option value="Nallur">Nallur</option>
        </select><br><br>

        <label name="fname">First Name :</label>
        <input type="text" name="fname"><br><br>

        <label name="lname">Last Name :</label>
        <input type="text" name="lname"><br><br>

        <label name="address">Address :</label>
        <input type="address" name="address"><br><br>

        <label name="tel">Mobile No :</label>
        <input type="phone" name="tel"><br><br>

        <label name="password">Password :</label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="add" value="Add">
        <input type="submit" name="clear" value="clear">
    <form>    
</body>
</html>