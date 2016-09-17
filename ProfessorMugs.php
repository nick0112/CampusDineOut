<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Campus Dine out</title>
	<link href="css/base.css" rel="stylesheet" type="text/css">
	<link href="css/form.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="wrapper">

		<!-- #header -->
		<div class="header">
		    <a><img src="images/test.png" alt="icon" height ="55" /></a>
			<div class= "navbar">
			    <ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="form.html">Contact</a></li>
				<li><a href="Restaurant.php">Restaurants</a></li>
	            <li><a href="signUp.php">JoinUs</a></li>
                </ul>
			</div>
		</div>

		<!-- #content -->
		<div class="content">
			<div class="restaurant-page">
			     <div class="restaurants-nav">
			        <ul>
				      <li><a href="2MatoPizza.php">2MatoPizza</a></li>
				      <li><a href="AustinGrill.php">AustinGrill</a></li>
			          <li><a href="BentoSushi.php">BentoSushi</a></li>
				      <li><a href="CoffeePod.phpl">CoffeePod</a></li>
				      <li><a href="ElectricGrill.php">ElectricGrill</a></li>
				      <li><a href="GatewayDeli.php">GatewayDeli</a></li>
				      <li><a href="GlobalVillage.php">GlobalVillage</a></li>
				      <li><a href="ProfessorMugs.php">ProfessorMugs</a></li>
				      <li><a href="TheRix.php">The Rix</a></li>
				      <li><a href="TimHortons.php">TimHortons</a></li>
				      <li><a href="TimHortonsExpress.php">TimHortonsExpress</a></li>
				      <li><a href="TripleO.php">TripleO</a></li>
					  </ul>
			     </div>

				<div class="main-info">

					<div class="right-info">
						<h1>Professor Mugs</h1>
						<h2>Location: SE12</h2>
						<h2>Hours of Operation</h2>
						<div class="map">
							<img src="images/se12.png" alt="se12 building" height="230">
						</div>
						<div class="tablebox">
							<table>
								<thead>
									<tr>
										<th id="day">Day</th>
										<th id="hours">Hours</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td headers="day">Monday</td>
										<td headers="hours">8am-5pm</td>
									</tr>

									<tr>
										<td headers="day">Tuesday</td>
										<td headers="hours">8am-5pm</td>
									</tr>

									<tr>
										<td headers="day">Wednesday</td>
										<td headers="hours">8am-5pm</td>
									</tr>

									<tr>
										<td headers="day">Thursday</td>
										<td headers="hours">8am-5pm</td>
									</tr>

									<tr>
										<td headers="day">Friday</td>
										<td headers="hours">8am-5pm</td>
									</tr>

									<tr>
										<td headers="day">Saturday</td>
										<td headers="hours">10am-6pm</td>
									</tr>

									<tr>
										<td headers="day">Sunday</td>
										<td headers="hours">Closed</td>
									</tr>

								</tbody>
							</table>
						</div>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.Nunc viverra imperdiet enim. Fusce est.
							Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
						</p>
						
					</div>

					<div class="contact-info">
						<img src="images/timmies.gif" alt="tim hortons logo" height="200">
						<a href="http://www.timhortons.com/ca/en/index.php?nav=menu">Menu</a>
						<h3>Our recommendations</h3>
						<ul>
							<li>Banana Chocolate Muffin</li>
							<li>Chocolate-glazed Donuts</li>
							<li>Breakfast Sandwich</li>
							<li>Oreo Iced Cap</li>
							<li>Maple Dip Donuts</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<?php
		// footer
		include("footer.php")
		?>
