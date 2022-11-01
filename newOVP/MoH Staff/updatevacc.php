<?php 
    include("../dbms.php");
    if(isset($_POST["add"]))
    {
        $date=$_POST["date"];
        $nic=$_POST["nic"];
        $vacctype=$_POST["vacctype"];
        $batchNO=$_POST["batchNO"];
        $vaccstatus=$_POST["vaccstatus"];

        $result = mysqli_query($con,"INSERT INTO `updatevacc`(`date`,`nic`,`vacctype`,`batchNO`,`vaccstatus`)VALUES('$date','$nic','$vacctype','$batchNO','$vaccstatus')");

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

        <label name="nic">Nic :</label>
        <input type="text" name="nic"><br><br>

        <label name="vacctype">Vaccination Product :</label>
        <input type="text" name="vacctype"><br><br>

        <label name="batchNO">Batch Number :</label>
        <input type="text" name="batchNO"><br><br>

        <label name="vaccstatus">Vaccination Status :</label>
        <input type="number" name="vaccstatus"><br><br>

        <input type="submit" name="add" value="Add">
        <input type="submit" name="clear" value="clear">
    </form>
</body>
</html>