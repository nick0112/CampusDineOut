<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
		<title>Campus Dine out</title>
		<link href="css/base.css" rel="stylesheet" type="text/css">
		<link href="css/form.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="javaScript.js"></script>
		<script type="text/javascript" src="jquery-ui.js"></script>
		

	<script>
	$(function(){
	    $( document ).tooltip({
		track: true});
	});
	</script>
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
				    <li><a href="Restaurant.html">Restaurants</a></li>
	                <li><a href="login.html">JoinUs</a></li>

				</ul>

			</div>

		</div>

		<!-- #content -->
		<div class="content">
			<div class="restaurantpage">
				<div id="row1">
					<ul>
						<li>
							<a href="2MatoPizza.php"><img src="images/restaurantimg/2MatoPizza.jpg" alt="2MatoPizza" /></a>
						</li>
						<li>
							<a href="AustinGrill.php"><img src="images/restaurantimg/AustinGrill.jpg" alt="AustinGrill" /></a>
						</li>
						<li>
							<a href="Bentosushi.php"><img src="images/restaurantimg/BentoSushi.jpg" alt="BentoSushi" /></a>
						</li>
						<li>
							<a href="CoffeePod.php"><img src="images/restaurantimg/CoffeePod.jpg" alt="CoffeePod" /></a>
						</li>
					</ul>
				</div>
				<div id="row2">
					<ul>
						<li>
							<a href="ElectricGrill.php"><img src="images/restaurantimg/ElectricGrill.jpg" alt="ElectricGrill" /></a>
						</li>
						<li>
							<a href="GatewayDeli.php"><img src="images/restaurantimg/GatewayDeli.jpg" alt="GatewayDeli" /></a>
						</li>
						<li>
							<a href="GlobalVillage.php"><img src="images/restaurantimg/GlobalVillage.jpg" alt="GlobalVillage" /></a>
						</li>
						<li>
							<a href="ProfessorMugs.php"><img src="images/restaurantimg/ProfessorMugs.jpg" alt="ProfessorMugs" /></a>
						</li>
					</ul>
				</div>
				<div id="row3">
					<ul>
						<li>
							<a href="TheRix.php"><img src="images/restaurantimg/The Rix.jpg" alt="TheRix" /></a>
						</li>
						<li>
							<a href="TimHortonsExpress.php"><img src="images/restaurantimg/TimHortons Express.jpg" alt="TimHortonsExpress" /></a>
						</li>
						<li>
							<a href="TimHortons.php"><img src="images/restaurantimg/TimHortons.jpg" alt="TimHortons" /></a>
						</li>
						<li>
							<a href="TripleO.php"><img src="images/restaurantimg/TripleO.jpg" alt="TripleOs" /></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer group">
		    <div class="section group">
	           <div class="col span_1_of_4">
				      <ul>
				      <li><a href="2MatoPizza.html">2MatoPizza</a></li>
				      <li><a href="AustinGrill.html">AustinGrill</a></li>
				      <li><a href="BentoSushi.html">BentoSushi</a></li>
				      <li><a href="CoffeePod.html">CoffeePod</a></li>
				      </ul>
	            </div>
	            <div class="col span_1_of_4">
	               <ul>
				   <li><a href="ElectricGrill.html">ElectricGrill</a></li>
				   <li><a href="GatewayDeli.html">GatewayDeli</a></li>
				   <li><a href="GlobalVillage.html">GlobalVillage</a></li>
				   <li><a href="ProfessorMugs.html">ProfessorMugs</a></li>
				   </ul>
	            </div>
	            <div class="col span_1_of_4">
	               <ul>
				   <li><a href="TheRix.html">The Rix</a></li>
				   <li><a href="TimHortons.html">TimHortons</a></li>
				   <li><a href="TimHortonsExpress.html">TimHortons Express</a></li>
				   <li><a href="TripleO.html">TripleO</a></li>
				   </ul>
	            </div>
	            <div class="col span_1_of_4">
	               <h3>For more news:</h3>
						 <a id="facebook"><img src="images/facebookicon.png" alt="facebook" height="40" /></a>
						 <a id="twitter"><img src="images/twittericon.png" alt="twitter" height="40" /></a>
						 
						 <p class = "log-in-model"> <?php
						 if(isset($_SESSION['user'])){
							 echo 'Welcome ';
							 echo  $_SESSION['user'];
							 echo '&nbsp <a href="forum.php">Visit Forum</a>';
							 echo '&nbsp <a href="logout.php?logout">Sign Out</a>';
						 } else 
						 {
							 echo '<p>Welcome to our website</p>';
						 }
						 ?></p>
						 
                </div>
	
			</div>
		</div>
	</div>
</body>


</html>