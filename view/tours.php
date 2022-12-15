<?php

require_once '../controller/trips.controller.php';



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travigo - Travel for everyone</title>
	<link rel="stylesheet" type="text/css" href="./css/tours.css?=<?php time() ?>">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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
			<li><a href="index.php">Home</a></li>
			<li><a href="tours.php">Tours</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
		</div>>
		<div class="search_container">
			<div class="box-1">
				<!-- <p style="color:#4285F4;">destination <br >where to go ?</p> -->
				<td><label style="color:#4285F4;"> destination <br >where to go ? </label></td>
				<td><input type="text" id=""></td>
				
			</div>
			<div class="box-2">
				<label> From </label>
				
				<input type="date" id="">
				<label> To </label>
				<input type="date" id="">
			</div>
			<div class="box-3">
				<td><label> filter </label></td>
				<select>
					<option></option>
					<option>europe</option>
			        <option>africa</option>
					<option>asia</option>
					<option>south america</option>
				</select>
				
			</div>
			<div class="box-4">
				<h3 >Search</h3>
			</div>
		</div>
	</section>
	
<!--destination section--->
<section class="destination" id="destination">
		<div class="title">
			<h2>Our tours</h2>
		</div>

		<div class="destination-content">
		<?php
    foreach( $new_trips as $trip){

    
    ?>

			<div class="col-content">
				<img src="img/<?php echo $trip['photo'] ?>">
				<h5><?php echo $trip['nom'] ?></h5>
				<p style="
    font-size: 20px;
"><?php echo $trip['prix'] ?>$</p>
			</div>
			<?php } ?> 

			

			

		</div>
	</section>


	<!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe For more HTML, CSS, and <br> coding tutorials</p>
		</div>

		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tours</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">98 West 21th Street</a></li>
						<li><a href="#">New York NY 10016</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
						<li><a href="#">info@travigo.com</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook' ></i></a>
						<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#"><i class='bx bxl-twitter' ></i></a>
						<a href="#"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2022 All rights reserved | Travigo</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
