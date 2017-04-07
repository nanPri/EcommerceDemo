<?php
   //redirect back to index page if no stockIDhas been set
   if(!isset($_GET['stockID']))
	   header("Location: index.php");
   $item_sql="Select* from stock where stockID=".$_GET['stockID'];
   //echo $item_sql;
   if($item_query=mysqli_query($dbconnect,$item_sql))
   {
	   $item_rs=mysqli_fetch_assoc($item_query);
	   ?>
	   <p><img src="images/<?php echo $stock_rs['bigphoto'];?>"/>  </p>
	   <h1><?php echo $item_rs['name'];?></h1>
	   <p>Price:$<?php echo $item_rs['price'];?></p>
	   <p><?php echo $item_rs['description'];?></p>
	   <?php 
   }
?>