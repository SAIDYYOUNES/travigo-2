
<?php 
// empty
session_start();
require '../controller/trips.Controller.php';
if(!isset(($_SESSION['email']))){
  header('location:login.php');
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travigo - Travel for everyone</title>
	<link rel="stylesheet" type="text/css" href="./css/tours.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<!--header--->
	<header>
	<a href="index.php">
    <img src="./img/11J-removebg-preview.png" alt="" width="49">
    </a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="addtrip.php" >add trip</a></li>
			<li><a href="dashbord.php">dashbord</a></li>
			<li><a href="tours.php">Tours</a></li>
			<li><a href="../controller/logout.php">logout</a></li>
			
			
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
		</div>>
		<div class="dashbord">
			<h1>dashbord</h1>
		</div>
		</div>
	</section>

<div class="admin">
	<button class="btn btn-primary"><a href="addtrip.php" >add trip</a></button>
	
</div>
	<!--Package section--->
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
      <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $trip['id'] ?>">
     
      <th scope="row"><?php echo $trip['id'] ?></th>
      <td><?php echo $trip['nom'] ?></td>
      <td><?php echo $trip['prix'] ?></td>
      <td><?php echo $trip['photo'] ?></td>
      <td>
      
      <button  type="submit" name="update" class="btn btn-primary "><a style="color:powderblue;" href="updatetrip.php?id=<?php echo $trip['id'] ?>">update</a></button>
      <button type="submit" name="delete" class="btn btn-danger">delete</button>
      </td>
      </form>
      
      
      
    </tr>
    <?php
   
        
    }
    ?>
  </tbody>
</table>

	

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>