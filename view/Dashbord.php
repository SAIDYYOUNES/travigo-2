
<?php 
require '../controller/trips.Controller.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prix</th>
      <th scope="col">photo</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach( $new_trips as $trip){

    
    ?>
    <tr>
      <th scope="row"><?php echo $trip['id'] ?></th>
      <td><?php echo $trip['nom'] ?></td>
      <td><?php echo $trip['prix'] ?></td>
      <td><?php echo $trip['photo'] ?></td>
      <td>
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-danger">Danger</button>
      </td>
    </tr>
    <?php
   
        
    }
    ?>
  </tbody>
</table>
    
</body>
</html>