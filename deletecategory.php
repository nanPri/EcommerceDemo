<?php
//include("dbconnect.php");
session_start();
  
  if(!isset($_SESSION['admin'])){
	  header("Location:index.php");
  }
  $delcat_sql="Delete from category where categoryId=".$_GET['categoryID'];
  $delcat_query=mysqli_query($dbconnect,$delcat_sql);
  
  $delstock_sql="Delete from stock where categoryId=".$_GET['categoryID'];
  $delstock_query=mysqli_query($dbconnect,$delstock_sql);
  
?>

<h1>Category deleted </h1>
<p>Category has been successfully deleted </p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>