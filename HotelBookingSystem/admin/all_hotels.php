<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ob_start();?>

	<section id="main" class="column">
		<article class="module width_full">
			<header><h3>All Hotels</h3></header>
				<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   				
    				<th>Hotel Name</th>
                    <th>Image</th> 
    				<th>Place</th> 
                    <th>Feature</th> 
                    <th>Action</th> 
    				
				</tr> 
			</thead> 
			<tbody>
            <?php $select_dt=mysql_query("select * from hotels");
			while($get_dt=mysql_fetch_array($select_dt)){
				$place_name=mysql_fetch_array(mysql_query("select * from places where place_id=".$get_dt["place_id"]));
			 ?> 
				<tr> 
   					 
    				
    				<td><?php echo $get_dt["title"]; ?></td>
                    <td><a href="#"><img src="<?php echo "../images/".$get_dt["image"]; ?>" height="60" alt="<?php echo $get_dt["heading"]; ?>"></a></td> 
                    <td><?php echo $place_name["heading"]; ?></td>
                    <td><?php if($get_dt["slider"]==1): echo "Yes"; elseif($get_dt["slider"]==0): echo "No"; endif;?></td> 
    			
                    <td><a href="<?php echo "all_hotels.php?edit=".$get_dt["hotel_id"]; ?>"><img src="images/edit.png" alt="edit"></a>&nbsp;&nbsp;<a href="<?php echo "all_hotels.php?del=".$get_dt["hotel_id"]; ?>"><img src="images/delete.png" alt="delete"></a></td> 
				</tr>
              <?php } ?>
				 
                    <?php 
			   if(isset($_GET["del"])):
			   $del1=mysql_query("delete from hotels where hotel_id=".$_GET["del"]);
			   if($del1)
			   {
				   header("location:all_hotels.php");
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