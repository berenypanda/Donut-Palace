<?php
// acquire shared info from other files
include("dbconn.inc.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

$conn = dbConnect();
?>
<?php
 echo $head;
 echo $navbar;
?>

 <div class="hero">
        <div class="hero-text">
            <h1>Donut Palace</h1>
            <p>Where Freshness Meets Flavor Every Day</p>
            <p>Open 7 Days a Week, 5AM-12PM</p>
        </div>
        <button>View Menu</button>
    </div>
    <h2>Our Menu</h2>
    <?php // Retrieve category items
	$sql = "SELECT Name, Picture_URL, Category_ID FROM Categories";
	
	global $conn;

	$stmt = $conn->stmt_init();

	if ($stmt->prepare($sql)){

		$stmt->execute();
		$stmt->bind_result($Name,$Picture_URL,$Category_ID);
		
	    print "<div class='category-section'>";
		while($stmt->fetch()){
                print "<div class='category-item'>
            <img src='images/menu/$Picture_URL' alt='$Name' width='200px'>
            <p>$Name</p>
            <button><a href='menu_byCategory.php?CID=$Category_ID'>View All</a></button>
        </div>";
		}
					
		$stmt->close();
		print "</div>";
	} else {

		$output = "Query to retrieve category information failed.";
	
	}

	$conn->close();
	?>
    <h2>About Us</h2>
    <div class="about-us-section">
        <div class="about-us-card">
            <i class="fa-solid fa-location-dot"></i>
            <h3>Local Delight</h3>
            <p>At Donut Palace, we take pride in being a local haven, strategically located near Highway 61 to serve our community with the warmth of freshly baked delights right around the corner.</p>
        </div>
        <div class="about-us-card">
            <i class="fa-solid fa-dollar-sign"></i>
            <h3>Affordability </h3>
            <p>We believe that everyone deserves a sweet escape without breaking the bank. Donut Palace is committed to offering mouthwatering treats at prices that bring joy without compromise.</p>
        </div>
        <div class="about-us-card">
            <i class="fa-solid fa-mug-hot"></i>
            <h3>Freshness Unveiled</h3>
            <p>Our commitment to freshness is the heartbeat of Donut Palace. Each day, our ovens hum to life, ensuring that every bite is a testament to the vibrant flavors that only truly fresh donuts can deliver.</p>
        </div>
        <button>Learn more about our shop.</button>
    </div>
    
<?php echo $footer ?>