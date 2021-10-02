<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php"); 
	$global_data=mysql_fetch_array(mysql_query("select * from global_settings where id=1"));
	
	if(isset($_POST['update']))
{
$about_footer=addslashes($_POST['about_footer']);
$contact_footer=addslashes($_POST['contact_footer']);
$copyright_text=addslashes($_POST['copyright_text']);
$logoname1=addslashes($_FILES['logo']['name']);
$logotmp=$_FILES['logo']['tmp_name'];
$logotype=$_FILES['logo']['type'];
$logosize=$_FILES['logo']['size'];

if(empty($logoname1))
{
 $logoname=$global_data['logo'];
 $update_query=mysql_query("update global_settings SET logo='$logoname',about_footer='$about_footer',contact_footer='$contact_footer',copyright='$copyright_text' where id=1");
if($update_query)
{
	header("location:dashboard.php");
}
}
else
{
$logoname=$logoname1;

if($logotype=="image/jpg" || $logotype=="image/jpeg" || $logotype=="image/png"):
	$move_img=move_uploaded_file($logotmp,"../images/".$logoname);
	
	$update_query=mysql_query("update global_settings SET logo='$logoname',copyright='$copyright_text' where id=1");
if($update_query):
$submit_msg= "Image Uploaded";
header("location:dashboard.php");
endif;

else:

$submit_msg= "Logo Not Uploaded";
		
endif;
}
}


	
	?>	
     
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>Global Settings</h3></header>
				<div class="module_content">
                <form  method="post" enctype="multipart/form-data">
						<fieldset>
							<label>Upload Logo</label>
							<input type="file" name="logo"><img src="<?php echo "../images/".$global_data['logo']; ?>" alt="<?php echo $global_data['logo'];?>" height="60"><br>
                            
                           
						</fieldset>
					
                        <fieldset>
                        <label>About Footer</label><br>
                       <textarea id="input" name="about_footer" ><?php echo $global_data['about_footer']; ?></textarea>
                        </fieldset>
                        <fieldset>
                        <label>Contact Footer</label><br>
                       <textarea id="contact_footer" name="contact_footer" ><?php echo $global_data['contact_footer']; ?></textarea>
                        </fieldset>
                        <fieldset>
                        <label>Copyright Footer Text</label>
                        <input type="text" name="copyright_text" value="<?php echo $global_data['copyright']; ?>">
                        </fieldset>
                        <fieldset>
                        <button type="submit" name="update">Submit</button>
                        
                        </fieldset>
						</form>
                         <p align="center"><?php if(isset($submit_msg)): echo $submit_msg;   endif; ?></p>
						<div class="clear"></div>
				</div>
			
		</article><!-- end of post new article -->
	
	</section>
 <script>
        $(document).ready(function () { $("#input").cleditor();  $("#contact_footer").cleditor(); });
    </script>

</body>

</html>