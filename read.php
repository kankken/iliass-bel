<?php
//------------------------------Read------------------------------
?>  
<?php 

include "php.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Voir page</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <!--les styles-->
   <style type="text/css">


    body {
        background-image:url(bkg2.jpg);
        background-attachment: fixed;
        ;
        
        }
</style>
</head>
<body>

    <div class="container">

        <h2>utilisateurs</h2>

<table class="table">

    <thead>
        <tr>

        <th>ID</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Le genre</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody> 

        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

        ?>
                    <tr>

                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Editer</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Effacer</a></td>

                    </tr>                       
        <?php       }

            }
        ?>                

    </tbody>
</table>
    </div> 
</body>
</html>

<?php
