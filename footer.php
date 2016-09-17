<div class="footer group">
		    <div class="section group">
	           <div class="col span_1_of_4">
				      <ul>
				      <li><a href="2MatoPizza.php">2MatoPizza</a></li>
				      <li><a href="AustinGrill.php">AustinGrill</a></li>
				      <li><a href="BentoSushi.php">BentoSushi</a></li>
				      <li><a href="CoffeePod.php">CoffeePod</a></li>
				      </ul>
	            </div>
	            <div class="col span_1_of_4">
	               <ul>
				   <li><a href="ElectricGrill.php">ElectricGrill</a></li>
				   <li><a href="GatewayDeli.php">GatewayDeli</a></li>
				   <li><a href="GlobalVillage.php">GlobalVillage</a></li>
				   <li><a href="ProfessorMugs.php">ProfessorMugs</a></li>
				   </ul>
	            </div>
	            <div class="col span_1_of_4">
	               <ul>
				   <li><a href="TheRix.php">The Rix</a></li>
				   <li><a href="TimHortons.php">TimHortons</a></li>
				   <li><a href="TimHortonsExpress.php">TimHortons Express</a></li>
				   <li><a href="TripleO.php">TripleO</a></li>
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
	            <div class="copyright">
				    <p>Copyright &copy; 2016 BCIT Food Page by Team#16</p>

				</div>
			</div>
		</div>
	</div>
</body>


</html>