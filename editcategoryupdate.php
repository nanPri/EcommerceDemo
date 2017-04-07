<?php
session_start();
  //check to see if user is logged in .If not redirect to admin page
  if(!isset($_SESSION['admin'])){
	  header("Location:index.php");
  }

  $editcat_sql="Update category Set name='".$_SESSION['editcategory']['name']."' Where categoryId=".$_SESSION['editcategory']['categoryID'];
  $editcat_query=mysqli_query($dbconnect,$editcat_sql);
   
   unset($_SESSION['editcategory']);
?>

<h1>Edit category </h1>
<p>Category successfully updated</p>
<p><a href="index.php?page=admin">Back to admin panel</a></p>