<?php
include "conn.php";


$selsql = "Select * From accounts";

$res = mysqli_query($conn, $selsql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


<div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <a href="add-new.php" class="btn btn-success" >Add New</a>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <?php
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                            
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo htmlspecialchars($row['firstName']) ?></td>
                                <td><?php echo htmlspecialchars($row['lastName']) ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Update
                                    </button> 
                                </td>
                            </tr>
                    <?php	
				        }
			        ?>
                    </tbody>
                  </table>
            </div>
</div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>