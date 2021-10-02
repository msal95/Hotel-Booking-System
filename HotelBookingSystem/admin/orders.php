<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php"); ob_start(); ?><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>All Orders</h3></header>
				<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   				<th>Name</th> 
                <th>email</th>
                <th>Phone</th> 
    				<th>Place</th> 
    				<th>Hotel</th> 
    				<th>Package</th> 
                    <th>Vehicle</th> 
                    <th>Nights</th> 
                    <th>Adults</th> 
                    <th>Total Price</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
            
            <?php $select_q=mysql_query("select * from booking order by booking_id DESC"); ?>
            <?php while($order=mysql_fetch_array($select_q)){ 
			$place=mysql_fetch_array(mysql_query("select heading from places where place_id=".$order['place']));
			$hotels=mysql_fetch_array(mysql_query("select title from hotels where hotel_id=".$order['hotel_id']));
			$packages=mysql_fetch_array(mysql_query("select * from packages where package_id=".$order['package_id']));
			$vehicle=mysql_fetch_array(mysql_query("select * from vehicle where vehicle_id=".$order['vehicle_id']));
			
			?>
<tr>
				<tr> 
   					 
    				 
    				
                    <td><?php echo $order['name']; ?></td>
                    <td><?php echo $order['email']; ?></td>
                    <td><?php echo $order['phone']; ?></td>
                    <td><?php echo $place['heading']; ?></td>
                    <td><?php echo $hotels['title']; ?></td>
                    <td><?php echo $packages['title']; ?></td>
                    <td><?php echo $vehicle['name']; ?></td>
                    <td><?php echo $order['nights']; ?></td>
                    <td><?php echo $order['adults']; ?></td>
                     <td><?php echo $order['total_price']." PKR"; ?></td>
                    
                     
                    
                    <td><a href="<?php echo "orders.php?del=".$order['booking_id']; ?>"><img src="images/delete.png" alt="delete"></a></td> 
				</tr>
                <?php } 
				
			   if(isset($_GET["del"])):
			   $del1=mysql_query("delete from booking where booking_id=".$_GET["del"]);
			   if($del1)
			   {
				   header("location:orders.php");
			   }
			   endif;
			    
				?>
			
			    
                
                
                 
                 
				 
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		</article><!-- end of post new article -->
	
	</section>


</body>

</html>