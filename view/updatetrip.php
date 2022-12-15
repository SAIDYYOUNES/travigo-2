<?php

require_once '../controller/trips.controller.php';
$idi = array(
	'id' => $_GET['id']
);
if(isset($_POST['image'])){

}
$update = new ADD_trip();
 $trips = $update->gettrip($idi);


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
    <a href="index.html">
    <img src="./img/11J-removebg-preview.png" alt="" width="49"
  
		
		height="49">
    </a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="dashbord.php">dashboard</a></li>
			<li><a href="tours.php">Tours</a></li>
			<li><a href="../controller/logout.php">logout</a></li>
			
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
		</div>>
		
    
            <div class="add">
                <h2 style="color:white"> fill trip Info</h2>
            <div class="d-flex justify-content-center">
            
<?php
foreach( $trips as $trip ){
?>


            <form class="col-4" action="" method="post" autocomplete="off">
			<input type="hidden" name="id" value="<?php echo $trip['id'] ?>">
              <label for="name" style="color:white">trip name : </label>
              <input class="form-control"  type="text" name="nom" id = "name"  value="<?php echo $trip['nom'] ?>"> 
              <label for="username" style="color:white">price </label>
              <input class="form-control"  type="text" name="prix" id = "username" value="<?php echo $trip['prix'] ?>"> 
              
              <label class="form-label" style="color:white" for="password">trip picture</label>
              <input class="form-control"  type="file" name="photo" id = "password"  value="<?php echo $trip['photo'] ?>"> 
               <button class="btn btn-primary" type="submit" name="update_trip">update</button>
            </form>
			<?php 
			}
			?>
            </div>
            </div>
        
		</div>
	</section>


	

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

</html>