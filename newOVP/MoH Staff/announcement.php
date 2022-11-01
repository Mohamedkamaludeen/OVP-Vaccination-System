<?php
    include("../dbms.php");
    if(isset($_POST["add"]))
    {
        $date=$_POST["date"];
        $vaccin=$_POST["vaccin"];
        $venue=$_POST["venue"];
        $agegroup=$_POST["agegroup"];
        $nodose=$_POST["nodose"];

        $result=mysqli_query($con,"INSERT INTO `announcement`(`date`,`vaccin`,`venue`,`agegroup`,`nodose`) VALUES('$date','$vaccin','$venue','$agegroup','$nodose')");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label name="date">Date :</label>
        <input type="date" name="date"><br><br>

        <label name="vaccin">Veccin :</label>
        <input type="text" name="vaccin"><br><br>

        <label name="venue">Venue :</label>
        <input type="text" name="venue"><br><br>

        <label name="agegroup">Age Group :</label>
        <input type="text" name="agegroup"><br><br>

        <label name="nodose">No of Does :</label>
        <input type="number" name="nodose"><br><br>

        <input type="submit" name="add" value="Add">
        <input type="submit" name="clear" value="clear">
    </form>
</body>
</html>