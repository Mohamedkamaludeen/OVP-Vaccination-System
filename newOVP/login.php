<?php 
    define("page=login");
    include("dbms.php");
    if(isset($_POST["submit"]))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $result=mysqli_query($con,"select * from account");
        while($row = mysqli_fetch_assoc($result))
        {
            if($row["userName"]==$username && $row["password"] && $row["role"]="admin")
            {
                header("Location:./admin/admin.php");
                break;
            }
            if($row["userName"]==$username && $row["password"] && $row["role"]="mohstaff")
            {
                //header("Location:./admin/admin.php?");
                break;
            }
            if($row["userName"]==$username && $row["password"] && $row["role"]="public")
            {
                header("Location:./person/profile.php?username=$username&password=$password");
                break;
            }
        }
        $row = mysqli_fetch_assoc($result);
        echo $row["userName"];
        echo $row["password"];
        echo $row["role"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action="" method="post">
        <label name="username">Username :</label>
        <input type="text" name="username" require/><br><br>
        <label name="password">Password :</label>
        <input type="password" name="password"><br><br>
        <a href="">Reset password</a>
        <a href="./person/registration.php">New Persone</a></br>
        <input type="submit" name="submit" value="Login">
    </form>
    </body>
</html>