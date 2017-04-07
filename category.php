<?php
  if(!isset($_GET['categoryId']))
  {
	 // header("Location:index.php"); 
  }
	 
  
    //select all items belonging to the seleted categoryId
     $stock_sql="select stock.stockID,stock.name,stock.price,stock.thumbnail,category.name As catname From stock Join category ON stock.categoryID =category.categoryId where stock.categoryID=".$_GET['categoryID'];
       //echo $stock_sql;
	 if($stock_query=mysqli_query($dbconnect,$stock_sql));
	 {
		 $stock_rs=mysqli_fetch_assoc($stock_query);
	 }		 
	 if(mysqli_num_rows($stock_query)==0)
	 {
		echo "Sorry, no items to display"; 
	 }
	 else
	 {
		 ?>
		 <h1><?php echo $stock_rs['catname'];?></h1>
		 <?php     do {
			        ?>
			           <div class="item">
			           <a href="index.php?page=item&stockID=<?php  echo $stock_rs['stockID'];?>">
					   
					   <p><img src="images/<?php echo $stock_rs['thumbnail']; ?>" /></p>
					   <p><?php echo $stock_rs['name']; ?></p>
					   <p>$<?php echo $stock_rs['price']; ?></p></a>
			           </div>
			           <?php 
		             }while( $stock_rs=mysqli_fetch_assoc($stock_query));
	 ?>
	 <?php
	 }
?>
