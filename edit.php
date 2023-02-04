<?php

include "conn.php";

if (isset($_POST['submit']))
{
    $error_msg = [];

    $fnme = htmlspecialchars($_POST['fName']);
    $lnme = htmlspecialchars($_POST['lName']);

    $uID = $_GET['id'];

    $updqry = "update accounts set firstName = '".$fnme."' AND lastName = '".$lnme."' where userID = ".$uID;

    
    $rs = mysqli_query($conn,$updqry);

    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
</head>
<body>
    <form action="" method="post">
        <center>
        <input type="text" name="fName" placeholder="Enter First Name: ">
        <input type="text" name="lName" placeholder="Enter Last Name: ">

        
        </center>

        <br>

        <center>
        
        <button class="btn btn-primary" type="submit" name="submit">Update</button>
      </center>

      <br>

      <a href="index.php" class="btn btn-secondary">Back </a>
    </form>
</body>
</html>