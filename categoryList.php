<?php
        $cat_sql="select * from category";
		$cat_query=mysqli_query($dbconnect,$cat_sql);
		$cat_rs=mysqli_fetch_assoc($cat_query);
		?>
		<?php
		do{ ?>
		<a href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryId'];?>"><?php echo $cat_rs['name'];?></a>	
         
		<?php  
		}while($cat_rs=mysqli_fetch_assoc($cat_query))
?>