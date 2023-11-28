<?php
// acquire shared info from other files
include("../dbconn.inc.php"); // database connection 
include("../shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

$conn = dbConnect();
?>
<?php
 echo $pagesHead;
 echo $navbar;
?>

<body>
      <div class="page-title">
        <h1>Menu</h1>
      </div>
      
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
            <img src='../images/menu/$Picture_URL' alt='$Name' width='200px' height='200px'>
            <p>$Name</p>
            <button><a href='menu_byCategory.php?Category_ID=$Category_ID'>View All</a></button>
        </div>";
		}
					
		$stmt->close();
		print "</div>";
	} else {

		$output = "Query to retrieve category information failed.";
	
	}

	$conn->close();
	?>
</body>
</html>