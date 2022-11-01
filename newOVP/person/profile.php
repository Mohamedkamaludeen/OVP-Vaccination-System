<?php 
    include("../dbms.php");
    $username=$_GET["username"];
    $password=$_GET["password"];
    $result = mysqli_query($con,"select * from person where username='$username' and password='$password'");
    $row = mysqli_fetch_assoc($result);
    
    $nic=$row["nic"];
    $result2 = mysqli_query($con,"select * from updatevacc where nic='$nic'");
    $row2 = mysqli_fetch_assoc($result2);
    $result3 = mysqli_query($con,"select * from updatevacc where nic='$nic'");
    $result4 = mysqli_query($con,"select * from updatevacc where nic='$nic'");
    

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
    <label name="fullname">Full Name :<?php echo $row["fname"]." ".$row["lname"] ?></label><br><br>

    <label name="address">Address :<?php  echo $row["address"] ?></label><br><br>
    
    <label name="sex">Gender :<?php  echo $row["sex"] ?></label><br><br>

    <label name="nic">Nic :<?php  echo $row["nic"] ?></label><br><br>

    <label name="dob">Date of Birth :<?php  echo $row["date"] ?></label><br><br>

    <label name="vaccdetail">Vaccination Detail  :</label><br><br>
    <table border="2px">
        <tr>
            <th></th>
            <th colspan="3">Vaccin Doses</th>
        </tr>
        <tr>
            <th>Date</th>
            <th>dd/mm/yyyy</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th>Vaccination Product</th>
           <?php while($row3=mysqli_fetch_assoc($result3)){ ?>
            <td><?php echo $row3["vacctype"] ?></td>
           <?php } ?>
        </tr>
        <tr>
            <th>Batch Number</th>
            <?php while($row4=mysqli_fetch_assoc($result4)){ ?>
            <td><?php echo $row4["batchNO"] ?></td>
            <?php } ?>
        </tr>
    </table><br>
    <span>Vaccination Status <?php echo $row2["vaccstatus"] ?>st does given</span>

</body>
</html>