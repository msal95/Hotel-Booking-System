<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ob_start();?>
 <?php
	if(isset($_POST['add']))
	{
		$cat=$_POST['cat'];
		$price=$_POST['price'];
		$name=$_POST['name'];
		$imgname1=$_FILES['image']['name'];
$imgname1tmp=$_FILES['image']['tmp_name'];
$imgname1type=$_FILES['image']['type'];
$imgname1size=$_FILES['image']['size'];
	if($imgname1type=="image/jpg" || $imgname1type=="image/jpeg" || $imgname1type=="image/png"):
	$move_img=move_uploaded_file($imgname1tmp,"../images/".$imgname1);
		$insert_data=mysql_query("INSERT INTO vehicle(image,category,price,name) VALUES('$imgname1','$cat','$price','$name')");
	
	if($insert_data)
	{
		$data_txt="Vehicle Created";
	}
	else
	{
		$data_txt="Vehicle Not Created";
	}
	
	else:
	echo "Please Select Valid Image Type PNG/JPG/JPEG";
	endif;
	
	}
	
	 ?>
	
	<section id="main" class="column">
		
		
		<article class="module width_full">
	
				<div class="module_content">
                <form  method="post" enctype="multipart/form-data">
              
						<fieldset>
							<label>Add Vehicle Name</label>
							<input type="text" name="name">
						</fieldset>
                        	<fieldset>
							<label>Add Category</label>
							<select name="cat">
                            <option>Economy</option>
                            <option>Standard</option>
                            <option>Luxury</option>
                            </select>
						</fieldset>
                        <fieldset>
							<label>Price PER/DAY (PKR)</label>
							<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="price">
						</fieldset>
                        <fieldset>
							<label>Add Image</label>
							<input type="file" name="image">
						</fieldset>
                       
                         <fieldset>
                        <button type="submit" name="add">Add Now!</button>
                        
                        </fieldset>
						</form>
                        <p align="center"><?php if(isset($data_txt)): echo $data_txt;   endif; ?></p>
						<div class="clear"></div>
				</div>
			
		</article><!-- end of post new article -->

		

		
		<article class="module width_full">
			<header><h3>All Vehicle</h3></header>
				<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   				
    				<th>Car Name</th>
                    <th>Image</th> 
                    <th>Price (PER/DAY)
    				<th>Category</th> 
                    <th>Action</th> 
    				
				</tr> 
			</thead> 
			<tbody>
            <?php $select_dt=mysql_query("select * from vehicle");
			while($get_dt=mysql_fetch_array($select_dt)){
			 ?> 
				<tr> 
   					 
    				
    				 <td><?php echo $get_dt["name"]; ?></td> 
                    <td><a href="#"><img src="<?php echo "../images/".$get_dt["image"]; ?>" height="60" alt="<?php echo $get_dt["heading"]; ?>"></a></td> 
                    <td><?php echo $get_dt["price"]; ?></td> 
                     <td><?php echo $get_dt["category"]; ?></td> 
    				<td><a href="<?php echo "vehicle.php?del=".$get_dt["vehicle_id"]; ?>"><img src="images/delete.png" alt="delete"></a></td> 
				</tr>
              <?php } ?>
				 
                    <?php 
			   if(isset($_GET["del"])):
			   $del1=mysql_query("delete from vehicle where vehicle_id=".$_GET["del"]);
			   if($del1)
			   {
				   header("location:vehicle.php");
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