<?php 
    include("../dbms.php");
    if(isset($_POST["update"]))
    {
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $address=$_POST["address"];
        $tel=$_POST["tel"];
        $sex=implode($_POST["sex"]);
        $nic=$_POST["nic"];
        $date=$_POST["date"];
        $district=implode($_POST["district"]);
        $moh=implode($_POST["moh"]);
        $username=$_POST["username"];
        $password=$_POST["password"];
        $Rpassword=$_POST["Rpassword"];
        

        if($password==$Rpassword)
        {
             $result = mysqli_query($con,"INSERT INTO `person`(`fname`,`lname`,`address`,`tel`,`sex`,`nic`,`date`,`district`,`moh`,`username`,`password`) VALUES('$fname','$lname','$address','$tel','$sex','$nic','$date','$district','$moh','$username','$password')");

             $result2 = mysqli_query($con,"INSERT INTO `account`(`userName`,`password`,`role`)VALUES('$username','$password','public')");

             header("Location:../login.php");
            
        }
        else{
            echo "<script>alert('please enter the same password for both ');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pubic Registration</title>
</head>
<body>
    <form action="" method="post">
        <label name="fname">First Name :</label>
        <input type="text" name="fname"><br><br>

        <label name="lname">Last Name :</label>
        <input type="text" name="lname"><br><br>

        <label name="address">Address :</label>
        <input type="address" name="address"><br><br>

        <label name="tel">Mobile No :</label>
        <input type="phone" name="tel"><br><br>
        
        <label name="sex">Gender :</label>
        <select name="sex[]" size="1">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label name="nic">Nic :</label>
        <input type="text" name="nic"><br><br>

        <label name="date">Date of Birth :</label>
        <input type="date" name="date"><br><br>

        <label name="district">District :</label>
        <select name="district[]" size="1">
            <option value="Jaffna">Jaffna</option>
            <option value="Vavuniya">Vavuniya</option>
            <option value="Anuradapure">Anuradapure</option>
        </select><br><br>

        <label name="moh">MoH :</label>
        <select name="moh[]" size="1">
            <option value="Jaffna">Jaffna</option>
            <option value="Nallur">Nallur</option>
        </select><br><br>

        <label name="username">User Name :</label>
        <input type="text" name="username"><br><br>

        <label name="password">Password :</label>
        <input type="password" name="password"><br><br>

        <label name="Rpassword">Re-Password :</label>
        <input type="password" name="Rpassword"><br><br>

        <input type="submit" name="update" value="Update">
        <input type="submit" name="clear" value="clear">
</form>




    
    

</body>
</html>