<?php include "includes/header.php";?>
<?php
if($_SESSION["username"]) { 
	include "includes/sidebar.php";
	include "news/article-resource.php";
} else {
header("Location: login.php");	
}
?>
<?php include "includes/footer.php";?>