<?php
session_start();
  //check to see if user is logged in .If not redirect to admin page
  if(!isset($_SESSION['admin'])){
	  header("Location:index.php");
  }
  
    unset($_SESSION['editcategory']);

  $editcat_sql="Select* from category";
  $editcat_query=mysqli_query($dbconnect,$editcat_sql);
  $editcat_rs=mysqli_fetch_assoc($editcat_query);
   
?>

<h1>Edit category </h1>
<?php do{ ?>
	<p><a href="index.php?page=editcategory&categoryId=<?php echo $editcat_rs['categoryId'];?>"><?php echo $editcat_rs['name'];?></a></p>
	<?php
}while($editcat_rs=mysqli_fetch_assoc($editcat_query))?>