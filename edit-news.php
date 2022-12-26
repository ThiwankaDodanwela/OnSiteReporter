<?php include "includes/header.php";?>
<?php
if($_SESSION["username"]) { 
	include "includes/sidebar.php";
	include "news/edit-news.php";
} else {
header("Location: login.php");	
}
?>
<?php include "includes/footer.php";?>