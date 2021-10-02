<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php"); ?><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>Portfolio Section</h3></header>
				<div class="module_content">
                <form action="#" method="post">
                <h3>Parallax</h3> 
						<fieldset>
							<label>Parallax Background</label>
							<input type="file" name="parallax_img">
						</fieldset>
						<fieldset>
                        
                        
							<label>Parallax Text</label>
							<textarea name="parallax_text" rows="5"></textarea>
                            </fieldset>
                        <fieldset>
                        <button type="submit">Update</button>
                        
                        </fieldset>
                          <h3>Portfolio Projects</h3> 
                          <fieldset>
							<label>Project Image</label>
							<input type="file" name="project_img">
						</fieldset>
                        <fieldset>
                        
                        
							<label>Project Title</label>
							<input type="text" name="title">
                            
                            <label>Skills</label>
							<input type="text" name="skills">
                            <label>Button Text</label>
							<input type="text" name="btn_text" value="View">
						</fieldset>
                        <fieldset>
                        <label>Button Link</label>
                        <input type="text" name="btn_link">
                        </fieldset>
                        <fieldset>
                        <button type="submit">Submit</button>
                        
                        </fieldset>
						</form>
						<div class="clear"></div>
				</div>
			
		</article><!-- end of post new article -->
	
	</section>


</body>

</html>