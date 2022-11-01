<?php 
    include("../dbms.php"); 
    if(isset($_POST["submit"]))
    {
        $nic=$_POST["nic"];
        $fullname=$_POST["fullname"];
        $age=$_POST["age"];
        $email=$_POST["email"];
        $passport4to=$_FILES["passport4to"]["name"];
        $nic4to=$_FILES["nic4to"]["name"];
        $vaccincard4to=$_FILES["vaccincard4to"]["name"];


        echo $_FILES["passport4to"]["name"]."<br>";
        echo $_FILES["passport4to"]["type"]."<br>";
        echo $_FILES["passport4to"]["size"]."<br>";
        echo $_FILES["passport4to"]["tmp_name"]."<br>";

        $result=mysqli_query($con,"INSERT INTO `smartvacc`(nic,fullname,age,email,passport4to,nic4to,vaccincard4to)VALUES('$nic','$fullname','$age','$email','C:\\xampp\\htdocs\\OVP\\newOVP\\person\\uploaded files\\$fullname.$passport4to','C:\\xampp\\htdocs\\OVP\\newOVP\\person\\uploaded files\\$fullname.$nic4to','C:\\xampp\\htdocs\\OVP\\newOVP\\person\\uploaded files\\$fullname.$vaccincard4to')");

        if(move_uploaded_file($_FILES["passport4to"]["tmp_name"],"C:\\xampp\\htdocs\\OVP\\newOVP\\person\\uploaded files\\$fullname.$passport4to") && move_uploaded_file($_FILES["nic4to"]["tmp_name"],"C:\\xampp\\htdocs\\OVP\\newOVP\\person\\uploaded files\\$fullname.$nic4to") && move_uploaded_file($_FILES["passport4to"]["tmp_name"],"C:\\xampp\\htdocs\\OVP\\newOVP\\person\\uploaded files\\$fullname.$vaccincard4to"))
        {

            echo "succsessfull";
        }

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
        <form action="smart.php" method="post" eynctype="multipart/form-data"> 
            <label for="nic">Nic or Passport No:</label>
            <input type="text" name="nic"><br><br>

            <label for="fullname">Full Name :</label>
            <input type="fullname" name="fullname"><br><br>

            <label for="age">Age :</label>
            <input type="text" name="age"><br><br>

            <label for="email">Email :</label>
            <input type="email" name="email"><br><br>
            
            <label>Document :</label>
            <ol>
            <li> <label for="passport4to">Photocopy of the Passport (Detail Page) :</label></li>
                <input type="file" name="passport4to" id="passport4to"><br><br>

                <li><label for="nic4to">Photocopy of the NIC (Front and Back Page) :</label></li>
                <input type="file" name="nic4to" id="nic4to"><br><br>

                <li><label for="vaccincard4to">Photocopy of the Vaccination Card (Front and Back Page) :</label></li>
                <input type="file" name="vaccincard4to" id="vaccincard4to"><br><br>
            </ol>    
            <input type="submit" name="upload" value="Upload"><br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="submit" name="clear" value="Clear">
        </form>
</body>
</html>