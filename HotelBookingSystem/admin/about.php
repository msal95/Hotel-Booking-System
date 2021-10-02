<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php");
	$about_data=mysql_fetch_array(mysql_query("select * from about where id=1"));	
	if(isset($_POST['update']))
{
$about_title=addslashes($_POST['title']);
$about_text=addslashes($_POST['about_text']);

$imagename1=addslashes($_FILES['image']['name']);
$imagetmp=$_FILES['image']['tmp_name'];
$imagetype=$_FILES['image']['type'];
$imagesize=$_FILES['image']['size'];

if(empty($imagename1))
{
 $imagename=$about_data['image'];
 $update_query=mysql_query("update about SET title='$about_title',image='$imagename',details='$about_text' where id=1");
if($update_query)
{
	header("location:about.php");
}
}
else
{
$imagename=$imagename1;

if($imagetype=="image/jpg" || $imagetype=="image/jpeg" || $imagetype=="image/png"):
	$move_img=move_uploaded_file($imagetmp,"../images/".$imagename);
	
	$update_query=mysql_query("update about SET title='$about_title',image='$imagename',details='$about_text' where id=1");
if($update_query):
$submit_msg= "Image Uploaded";
header("location:about.php");
endif;

else:

$submit_msg= "Image Not Uploaded";
		
endif;
}
}


	
	?>	
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>About Section</h3></header>
				<div class="module_content">
                <form  method="post" enctype="multipart/form-data">
   <fieldset>
   <label>Title</label>
                        <input type="text" name="title" value="<?php echo $about_data['title']; ?>">
                        
                        </fieldset>
						<fieldset>
							<label>Upload Logo</label>
							<input type="file" name="image"><img src="<?php echo "../images/".$about_data['image']; ?>" alt="<?php echo $about_data['image'];?>" height="60"><br>
                            
                           
						</fieldset>
						
						<fieldset>
                        
                        
							<label>About Text</label><br>
							<textarea name="about_text" id="about_text" ><?php echo $about_data['details']; ?></textarea>
                            
                          
						</fieldset>
                        
                       
                        <fieldset>
                        <button type="submit" name="update">Update</button>
                        
                        </fieldset>
						</form>
						<div class="clear"></div>
				</div>
			
		</article><!-- end of post new article -->
	
	</section>

 <script>
        $(document).ready(function () { $("#about_text").cleditor(); });
    </script>
</body>

</html>