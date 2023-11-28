<?php
// acquire shared info from other files
include("../dbconn.inc.php"); // database connection 
include("../shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

$conn = dbConnect();
?>
<?php
 echo $pagesHead;
 echo $pagesNavbar;
?>

<?php
//send the query to the database and get results
    
$Category_ID = $_GET['Category_ID'];
if (!empty($_GET['Category_ID']) && is_numeric($_GET['Category_ID'])){ 
    
    $Category_ID = intval($_GET['Category_ID']);

	$sql = "SELECT Name, Description, Price, Picture_URL FROM
MenuItems WHERE Category_ID= ? ";
	
	
	/* create a prepared statement */
	$stmt = $conn->stmt_init();
		
	if ($stmt->prepare($sql)) {
        /*bind parameters */
        $stmt->bind_param('i', $Category_ID);
        
		/* execute statement */
		$stmt->execute();
        

		/* bind result variables */
		$stmt->bind_result($Name, $Description, $Price, $Picture_URL);

        echo "<div class='page-title'>
        <h1>Menu</h1>
        </div>
      <div class='menu-section'>";
		
		/* fetch values */
		while ($stmt->fetch()) {
			print "<div class='menu-item'>
            <img src='../images/menu/$Picture_URL' width='200px' height='200px'>
            <p>$Name</p>
            <p>$$Price</p>
            <button>Add To Cart</button>
        </div>";
		}
		
        echo "</div>";
		/* close statement */
		$stmt->close();

	} else {
		print ("query failed");
	}
} else {

		echo "<div class='error'>No valid product category is supplied.  Plase go to the <a href='layered_category_s.php'> catgory list page</a> and select from the list of categories.</div>";
}
	
/* close connection */
$conn->close();
?>
<?php print $footer ?>
