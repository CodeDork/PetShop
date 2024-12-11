<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>
    <?php include("./includes/header.php");?>

 	<div id="body">
			
			       <div id="content">
				         
						 
						 <div class="search">
									<input type="text" name="s" value="Find"><button>&nbsp;</button>
									<label for="articles"><input type="radio" id="articles"> Articles</label>
									<label for="products"><input type="radio" id="products" checked> PetMart Products</label>
								</div>
								
				        <div class="content"><?php
require('./includes/connect_db.php');

// Fetch categories
$q_categories = "SELECT * FROM categories";
$r_categories = mysqli_query($dbc, $q_categories);

echo '<ul>';
while ($category = mysqli_fetch_assoc($r_categories)) {
    echo '<li>';
    echo '<a href="index.html"><img src="' . $category['image_url'] . '" width="140" height="250" alt="' . $category['name'] . '"></a>';
    echo '<h2>' . $category['name'] . '</h2>';
    
    // Fetch products for each category
    $q_products = "SELECT * FROM products WHERE category_id=" . $category['id'];
    $r_products = mysqli_query($dbc, $q_products);

    while ($product = mysqli_fetch_assoc($r_products)) {
        echo '<span><a href="' . $product['link'] . '">' . $product['name'] . '</a></span>';
    }
    echo '<span><a class="more" href="index.html">View all</a></span>';
    echo '</li>';
}
echo '</ul>';
?>

						</div>
						
					    <div id="sidebar">
								
                              								
								   <a href="petmart.html"><img src="images/discount.jpg" width="300" height="790" alt="Pet Shop" title="Pet Shop"></a> 	
								
								
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