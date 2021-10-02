<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php"); 
	$contact=mysql_fetch_array(mysql_query("select * from contact where contact_id=1"));
	
	if(isset($_POST['update']))
{
$map=addslashes($_POST['map']);
$contact_info=addslashes($_POST['contact_info']);
 $update_query=mysql_query("update contact SET map='$map',contact='$contact_info' where contact_id=1");
if($update_query)
{
	header("location:contact.php");
}
}

	?>	
     
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>Contact Page</h3></header>
				<div class="module_content">
                <form  method="post" enctype="multipart/form-data">
						
					
                        <fieldset>
                        <label>Google Map (Embed Code)</label><br>
                       <textarea id="input" name="map" ><?php echo $contact['map']; ?></textarea>
                        </fieldset>
                        <fieldset>
                        <label>Contact Info</label><br>
                       <textarea id="contact_footer" name="contact_info" ><?php echo $contact['contact']; ?></textarea>
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