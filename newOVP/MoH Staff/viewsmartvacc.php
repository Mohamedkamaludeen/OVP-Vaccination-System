<?php 
    include("../dbms.php");
    $result=mysqli_query($con,"select * from `smartvacc`");
   // $row=mysqli_fetch_assoc($result);

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewsmartvacc</title>
</head>
<body>
    <table border="3px">
        <tr>
            <th>Nic</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Mobile No</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)){
            $nic=$row["nic"];
            $result2=mysqli_query($con,"select * from `person` where nic='$nic'"); ?>
            <tr>
                <?php while($row2=mysqli_fetch_assoc($result2)){ ?>
                        <td><?php echo $row2["nic"] ?></td>
                        <td><?php echo $row2["fname"] ?></td>
                        <td><?php echo $row2["lname"] ?></td>
                        <td><?php echo $row2["address"] ?></td>
                        <td><?php echo $row2["tel"] ?></td>
                        <td><button>View</button></td>
                        <td><button>Approve</button></td>
                        <td><button>Reject</button></td>
                <?php } ?>        
                
            </tr>
        <?php } ?>
    </table>
</body>
</html>