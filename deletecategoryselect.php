<?php
//include("dbconnect.php");
session_start();
  
  if(!isset($_SESSION['admin'])){
	  header("Location:index.php");
  }
?>

<h1>Delete category </h1>
<?php
   $delcat_sql="Select * From category";
   $delcat_query=mysqli_query($dbconnect,$delcat_sql);
   $delcat_rs=mysqli_fetch_assoc($delcat_query);
   do{?>
	   <p><a href="index.php?page=deletecategoryconfirm&categoryID=<?php echo $delcat_rs['categoryId'];?>">
	   <?php echo $delcat_rs['name']; ?></a></p>
	   <?php
   }while($delcat_rs=mysqli_fetch_assoc($delcat_query));
   ?> 