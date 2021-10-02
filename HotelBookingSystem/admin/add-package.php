<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php");
	$hotels=mysql_query("select * from hotels");
	 ?><!-- end of sidebar -->
   <?php
	if(isset($_POST['add']))
	{
		$heading=addslashes($_POST['heading']);
		$desc=addslashes($_POST['desc']);
		$price=addslashes($_POST['price']);
		$hotel=$_POST['hotel'];
		$latest=$_POST['latest'];
		$heading=$_POST['heading'];
		$imgname1=time().$_FILES['image']['name'];
$imgname1tmp=$_FILES['image']['tmp_name'];
$imgname1type=$_FILES['image']['type'];
$imgname1size=$_FILES['image']['size'];
	if($imgname1type=="image/jpg" || $imgname1type=="image/jpeg" || $imgname1type=="image/png"):
	$move_img=move_uploaded_file($imgname1tmp,"../images/".$imgname1);
		$insert_data=mysql_query("INSERT INTO packages(image,title,hotel_id,details,price,feature) VALUES('$imgname1','$heading','$hotel','$desc','$price','$latest')");
	
	if($insert_data)
	{
		$data_txt="Package Added";
	}
	else
	{
		$data_txt="Package Not Added";
	}
	
	else:
	$data_txt="Please Select Valid Image Type PNG/JPG/JPEG";
	endif;
	
	}
	
	 ?>
	
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>Add Package</h3></header>
				<div class="module_content">
                <form  method="post" enctype="multipart/form-data">
              
						<fieldset>
							<label>Image</label>
							<input type="file" name="image" required>
						</fieldset>
                        <fieldset>
							<label>Title</label>
							<input type="text" name="heading" required>
						</fieldset>
						<fieldset>
                        
                        
							<label>Description</label>
							<textarea name="desc" rows="5" id="desc" required></textarea>
                            </fieldset>
                          <fieldset>
							<label>Price</label>
							<input type="text" required   onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="price">
						</fieldset>
                         
                               <fieldset>
							<label>Select Hotel</label>
							<select name="hotel" required>
                            <?php while($hotels_data=mysql_fetch_array($hotels)){ ?>
                            <option value="<?php echo $hotels_data['hotel_id']; ?>"><?php echo $hotels_data['title']; ?></option>
                            <?php }?>
                            
                            </select>
						</fieldset>
                        
                          <fieldset>
							<label>Show on Homepage</label>
							<select name="latest">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
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
	
	</section>


 <script>
        $(document).ready(function () { $("#desc").cleditor(); });
    </script>
</body>

</html>