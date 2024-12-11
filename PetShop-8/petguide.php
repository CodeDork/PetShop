<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
  <?php include("./includes/header.php");?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							   <h2>Pet Guide</h2>
							   <div>
								   <p>
									  Here are some useful pet quide tips for your pets. Easy and convenient for you to learn more on how to understand them. basic intructions to useful information not just for your pet but also for other animals. 
								   </p>
							   </div>
							   
<?php
require('./includes/connect_db.php'); // Include database connection

echo '<ul class="section">';

// Fetch data from the `pet_guides` table
$q_guides = "SELECT * FROM pet_guides";
$r_guides = mysqli_query($dbc, $q_guides);

// Loop through the results and display them
while ($row = mysqli_fetch_assoc($r_guides)) {
    echo '<li>';
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['description'] . '</p>';
    echo '</li>';
}

echo '</ul>';

// Close database connection
mysqli_close($dbc);
?>

								<div class="paging">
								   <a class="active" href="petguide.html">1</a>
								   <a href="petguide.html">2</a>
								   <a href="petguide.html">3</a>
								   <a href="petguide.html">4</a>
								   <a class="next" href="petguide.html">NEXT</a>
								</div>
							   
						</div>
						
					    <div id="sidebar">
						
						     <div id="section">
							    <div>
							      <div>
							           <h2>Pet Guide Overview</h2>
										<ul>
											<li><a href="petguide.html">Pet Trainging Guides <span>(1)</span> </a></li>
											<li><a href="petguide.html">Behavior Training <span>(11)</span> </a></li>
											<li><a href="petguide.html">Pet Recipes <span>(3)</span> </a></li>
											<li><a href="petguide.html">Do's and Don'ts <span>(8)</span> </a></li>
											<li><a href="petguide.html">Pet Foods <span>(3)</span> </a></li>
											<li><a href="petguide.html">Cosplay Pets <span>(2)</span> </a></li>
											<li><a href="petguide.html">Shopping Guides <span></span> </a></li>
											<li><a href="petguide.html">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
											<li><a href="petguide.html">Medications <span>(7)</span> </a></li>
											<li><a href="petguide.html">Excercise <span>(7)</span> </a></li>
											<li><a href="petguide.html">Diet <span>(10)</span> </a></li>
											<li><a href="petguide.html">Grooming <span>(1)</span> </a></li>
											<li><a href="petguide.html">Cosplay Pets <span>(2)</span> </a></li>
											<li><a href="petguide.html">Shopping Guides <span></span> </a></li>
											<li><a href="petguide.html">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
											<li><a href="petguide.html">Medications <span>(7)</span> </a></li>
											<li><a href="petguide.html">Excercise <span>(7)</span> </a></li>
											<li><a href="petguide.html">Diet <span>(10)</span> </a></li>
											<li><a href="petguide.html">Grooming <span>(1)</span> </a></li>
										</ul>
							      </div>
							    </div>
							 </div>
						       
								
					    </div>
				   </div>
				   
				   <div class="featured">
				        <ul>
							<li><a href="index.html"><img src="images/organic-and-chemical-free.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li><a href="index.html"><img src="images/good-food.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li class="last"><a href="index.html"><img src="images/pet-grooming.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
						</ul>
				        
				   </div>
				  
			
			</div>
			
			<div id="footer">
			        <div class="section">
						<ul>
							<li>
								<img src="images/friendly-pets.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Friendly Pets</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonummy nib. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="images/pet-lover2.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">How dangerous are they</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="images/healthy-dog.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Keep them healthy</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonu mmy. <a class="more" href="index.html">Read More</a> 
								</p>
							</li>	
							<li>
								
								<h2><a href="index.html">Love...love...love...pets</a></h2>
								<p>
								     Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diameusim. <a class="more" href="index.html">Read More</a> 
								</p>
								<img src="images/pet-lover.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
							</li>	
						</ul>
					</div>
					<div id="footnote">
						<div class="section">
						   &copy; 2011 <a href="index.html">Petshop</a>. All Rights Reserved.
						</div>
					</div>
			</div>
			
	
</body>
</html>