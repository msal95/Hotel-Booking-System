<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ob_start();?>

	<section id="main" class="column">
		<article class="module width_full">
			<header><h3>All Packages</h3></header>
				<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   				
    			
                    <th>Image</th> 
                    <th>Title</th> 
    				<th>Hotel Name</th>
                    <th>Details</th> 
                    <th>Price</th> 
                   
    				<th>Feature</th> 
                    <th>Action</th> 
    				
				</tr> 
			</thead> 
			<tbody>
            <?php 
			$select_dt=mysql_query("select * from packages");
			while($get_dt=mysql_fetch_array($select_dt)){
				$hotel_dt=mysql_fetch_array(mysql_query("select * from hotels where hotel_id=".$get_dt["hotel_id"]));
			 ?> 
				<tr> 
   					
                    <td><a href="#"><img src="<?php echo "../images/".$get_dt["image"]; ?>" height="60" alt="<?php echo $get_dt["heading"]; ?>"></a></td> 
                    <td><?php echo $get_dt['title']; ?></td> 
                    <td><?php echo $hotel_dt['title']; ?></td> 
                    <td width="50%"><?php echo $get_dt["details"]; ?></td> 
                    <td><?php echo "Rs ".number_format($get_dt["price"]); ?></td> 
                  
                    <td><?php if( $get_dt["feature"]==1): echo "Yes"; elseif( $get_dt["feature"]==0): echo "No"; endif;?></td> 
        
    				<td><a href="<?php echo "all_packages.php?del=".$get_dt["package_id"]; ?>"><img src="images/delete.png" alt="delete"></a></td> 
				</tr>
              <?php } ?>
               <?php 
			   if(isset($_GET["del"])):
			   $del1=mysql_query("delete from packages where package_id=".$_GET["del"]);
			   if($del1)
			   {
				   header("location:all_packages.php");
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