<?php
session_start();
  //check to see if user is logged in .If not redirect to admin page
  if(!isset($_SESSION['admin'])){
	  header("Location:index.php");
  }
   if(isset($_GET['categoryId']))
   {
	 $_SESSION['editcategory']['categoryID']=$_GET['categoryId'];   
   } 
  if(!isset($_SESSION['editcategory']['name']))
  {
		  $editcat_sql="Select* from category Where categoryId=".$_GET['categoryId'];
		  $editcat_query=mysqli_query($dbconnect,$editcat_sql);
		  $editcat_rs=mysqli_fetch_assoc($editcat_query);
		  $_SESSION['editcategory']['name']=$editcat_rs['name'];
  }  
?>

<h1>Edit category </h1>
<form action="index.php?page=editcategoryconfirm" method="post">
  <input name="name" value="<?php echo $_SESSION['editcategory']['name'] ?>" />
  <input type="submit" name="update" value="update" />
</form>