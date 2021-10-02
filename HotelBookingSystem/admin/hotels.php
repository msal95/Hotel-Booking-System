<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ob_start();?>
 <?php
	if(isset($_POST['add']))
	{
		$hotelName=$_POST['hotelName'];
		$place=$_POST['place'];
		$slider=$_POST['slider'];
		$imgname1=$_FILES['image']['name'];
$imgname1tmp=$_FILES['image']['tmp_name'];
$imgname1type=$_FILES['image']['type'];
$imgname1size=$_FILES['image']['size'];
	if($imgname1type=="image/jpg" || $imgname1type=="image/jpeg" || $imgname1type=="image/png"):
	$move_img=move_uploaded_file($imgname1tmp,"../images/".$imgname1);
		$insert_data=mysql_query("INSERT INTO hotels(title,image,slider,place_id) VALUES('$hotelName','$imgname1','$slider','$place')");
	
	if($insert_data)
	{
		$data_txt="Hotel Created";
	}
	else
	{
		$data_txt="Hotel Not Created";
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
							<label>Add Hotel Name</label>
							<input type="text" name="hotelName">
						</fieldset>
                        <fieldset>
							<label>Add Image</label>
							<input type="file" name="image">
						</fieldset>
                          <fieldset>
							<label>Show on Slider</label>
							<select name="slider">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                            </select>
						</fieldset>
    <?php $place_select=mysql_query("select * from places"); ?>
                          <fieldset>
							<label>Select Place</label>
							<select name="place">
                            <?php while($places=mysql_fetch_array($place_select)){ ?>
                            <option value="<?php echo $places['place_id']; ?>"><?php echo $places['heading']; ?></option>
                            <?php } ?>
                            </select>
						</fieldset>
                       
                         <fieldset>
                        <button type="submit" name="add">Add Now!</button>
                        
                        </fieldset>
						</form>
                        <p align="center"><?php if(isset($data_txt)): echo $data_txt;   endif; ?></p>
						<div class="clear"></div>
				</div>
			
		</article><!-- end of post new article -->

		

		
		<!-- end of post new article -->
	
	</section>


</body>

</html>