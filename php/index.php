<?php
// acquire shared info from other files
include("dbconn.inc.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables
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
    <div class="category-section">
        <div class="category-item">
            <img src="../images/menu/" width="200px">
            <p>Category Name</p>
            <button>View All</button>
        </div>
        <div class="category-item">
            <img src="../images/menu-item-placeholder.png" width="200px">
            <p>Category Name</p>
            <button>View All</button>
        </div>
        <div class="category-item">
            <img src="../images/menu-item-placeholder.png" width="200px">
            <p>Category Name</p>
            <button>View All</button>
        </div>
        <div class="category-item">
            <img src="../images/menu-item-placeholder.png" width="200px">
            <p>Category Name</p>
            <button>View All</button>
        </div>
    </div>
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