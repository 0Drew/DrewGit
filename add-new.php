<?php

include "conn.php";

if (isset($_POST['submit']))
{
    $error_msg = [];

    $fnme = htmlspecialchars($_POST['fName']);
    $lnme = htmlspecialchars($_POST['lName']);
    $stat = $_POST['status'];

    $insqry = "insert into accounts (firstName, lastName, status) values ('$fnme','$lnme','$stat')";
    $rs = mysqli_query($conn,$insqry);

    if(mysqli_affected_rows($conn) == 1)
      {
        $lastInsertedID = mysqli_insert_id($conn);
        $_SESSION['success_msg'] = 'Account Creation Successful';
        header('location:index.php');
        exit();
      }
      else
      {
        $error_msg[] = 'Unable to save record!' ;
      }

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

        <select name="status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
        </select>
        </center>

        <br>

        <center>
        
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
      </center>

      <br>

      <a href="index.php" class="btn btn-secondary">Back </a>
    </form>
</body>
</html>