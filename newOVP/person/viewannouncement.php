<?php 
    include("../dbms.php");
    $result = mysqli_query($con,"select * from `announcement`")
    

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
    <table border="2px">
        <tr>
            <th>Date</th>
            <th>vaccin</th>
            <th>venue</th>
            <th>Age Group</th>
            <th>No of Dose</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["vaccin"]; ?></td>
                <td><?php echo $row["venue"]; ?></td>
                <td><?php echo $row["agegroup"]; ?></td>
                <td><?php echo $row["nodose"]; ?></td>
             </tr>
         <?php } ?>    
    </table>
</body>
</html>