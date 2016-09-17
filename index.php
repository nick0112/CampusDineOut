<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BCIT Food</title>
	<link href="css/base.css" rel="stylesheet" type="text/css">
	<link href="css/form.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
</head>
    
<body>

	<!-- #wrapper -->
	<div class="wrapper">
		<!-- #header -->
		<div class="header">
            <a><img src="images/test.png" alt="icon" height ="55" /></a>
			<div class="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
				<li><a href="form.html">Contact</a></li>
				<li><a href="Restaurant.php">Restaurants</a></li>
	            <li><a href="login.html">JoinUs</a></li>

				</ul>

			</div>

		</div>

		<div class="content">
			<div class="mainpage">
				

				<div class="container">
					
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/slideshowimg/2Mato.jpg" alt="2Mato" width="460" height="345">
								<div class="carousel-caption">
									<h3>2Mato</h3>

								</div>
							</div>

							<div class="item">
								<img src="images/slideshowimg/AustinGrill.png" alt="AustinGrill" width="460" height="345">
								<div class="carousel-caption">
									<h3>Austin Grill</h3>
								</div>
							</div>

							<div class="item">
								<img src="images/slideshowimg/BentoSushi.jpg" alt="BentoSushi" width="460" height="345">
								<div class="carousel-caption">
									<h3>Bento Sushi</h3>
								</div>
							</div>

							<div class="item">
								<img src="images/slideshowimg/ProfessorMugs.jpg" alt="ProfessorMugs" width="460" height="345">
								<div class="carousel-caption">
									<h3>Professor Mugs</h3>
								</div>
							</div>

							<div class="item">
								<img src="images/slideshowimg/timhortonsdonut.jpg" alt="TimHortonsDonut" width="460" height="345">
								<div class="carousel-caption">
									<h3>Tim Hortons</h3>
								</div>
							</div>

							<div class="item">
								<img src="images/slideshowimg/tripleos.jpg" alt="Tripleos" width="460" height="345">
								<div class="carousel-caption">
									<h3>Triple O's</h3>
								</div>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>

				<div class="homeparagraph">
					<h2 class ="aboutus">About Us </h2>
					<br>
					<div class="intro">
					<p>
						This website is designed to help BCIT Students to locate restaurants on campus. We want to provide students with information that is accurate and easy to access. We share some of our favourite food and drinks on some of the restaurants.
						If you want to find out more about us, sign up and join our membership to receive our newsletter and share your feedback. Click <span class="below"> below </span>to check out our facebook page and twitter page.
					</p>
					</div>
					
				</div>
			</div>
		</div>
		<!-- #footer -->
		<?php
		// footer
		include("footer.php")
		?>
