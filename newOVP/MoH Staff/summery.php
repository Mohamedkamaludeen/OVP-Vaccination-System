<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumery</title>
</head>
<body>
    <form action="" method="post">
        <label for="from">From date :</label>
        <input type="date" name="from">

        <label for="to">To date : </label>
        <input type="date" name="to"><br><br>

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

        <input type="submit" name="view" value="View">
        <input type="submit" name="clear" value="Clear"><br><br>

        <table border="3px">
            <tr>
                <th>Age group</th>
                <th>Number of Patient</th>
            </tr>
        </tabel>




    </form>
</body>
</html>