<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<?php include("./includes/header.php");?>
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
						<?php
require('./includes/connect_db.php'); // Include database connection

echo '<div class="about">';
echo '<h2>ABOUT US</h2>';
echo '<ul>';

// Fetch data from the `about` table
$q_about = "SELECT * FROM about";
$r_about = mysqli_query($dbc, $q_about);

// Loop through the results and display them
while ($row = mysqli_fetch_assoc($r_about)) {
    echo '<li>';
    echo '<h2><a href="about.html">' . $row['title'] . '</a></h2>';
    echo '<p>' . $row['description'];
    if (!empty($row['link_label']) && !empty($row['link_url'])) {
        echo ' <a href="' . $row['link_url'] . '">' . $row['link_label'] . '</a>';
    }
    echo '</p>';
    echo '</li>';
}

echo '</ul>';
echo '</div>';
?>

						</div>
						
					    <div id="sidebar">
						
						
						        <div class="featured">
								        <h2>Featured Topic</h2>
								        <ul>
											<li>
											    <a href="about.html"><img src="images/puppy2.jpg" width="115" height="155" alt="Pet Shop" title="Pet Shop"></a>
											    <h2><a href="about.html">What they need</a></h2>
												<p>
												   Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="about.html">read more</a>
												</p>
												
											</li>
											<li>
											    <a href="about.html"><img src="images/bird2.jpg" width="115" height="155" alt="Pet Shop" title="Pet Shop"></a>
											    <h2><a href="about.html">Fun birds</a></h2>
												<p>
												   Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="about.html">read more</a>
												</p>
												
											</li>
											<li class="last">
											    <a href="about.html"><img src="images/cat2.jpg" width="115" height="155" alt="Pet Shop" title="Pet Shop"></a>
											    <h2><a href="about.html">Something good</a></h2>
												<p>
												   Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="about.html">read more</a>
												</p>
												
											</li>
										</ul>
								</div>
								
								
								<div class="search">
									<input type="text" name="s" value="Find"><button>&nbsp;</button>
									<label for="articles"><input type="radio" id="articles"> Articles</label>
									<label for="products"><input type="radio" id="products" checked> PetMart Products</label>
								</div>
								
                                <div class="section"> 								
									<ul class="navigation">
										<li class="active"><a href="index.html">Shopping Guides</a></li>
										<li><a href="index.html">Discounted Items</a></li>
									</ul>
									
									<div class="aside">
									 <div>
										<div>
											 <ul>
												<li><a href="index.html">Pet Accesories </a> <a class="more" href="index.html">see all</a></li>
												<li><a href="index.html">Bath Essentials</a> <a class="more" href="index.html">see all</a></li>
												<li><a href="index.html">Pet Food</a> <a class="more" href="index.html">see all</a></li>
												<li><a href="index.html">Pet Vitamins</a> <a class="more" href="index.html">see all</a></li>
												<li><a href="index.html">Pet Needs</a> <a class="more" href="index.html">see all</a></li>
												<li><a href="index.html">Pet Toy and Treats</a> <a class="more" href="index.html">see all</a></li>
												<li><a href="index.html">Pet Supplies</a> <a class="more" href="index.html">see all</a></li>
												<li><a href="index.html">Pet Emergency Kit</a> <a class="more" href="index.html">see all</a></li>
											 </ul>
										</div>
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