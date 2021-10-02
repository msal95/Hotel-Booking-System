<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php"); ?><!-- end of sidebar -->
    <?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
	
		$insert_data=mysql_query("INSERT INTO users(name,email,password,gender) VALUES('$name','$email','$password','$gender')");
	
	if($insert_data)
	{
		$data_txt="User Created";
	}
	else
	{
		$data_txt="User Not Created";
	}

	}
	
	
	
	 ?>
	
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>Add User</h3></header>
				<div class="module_content">
                <form  method="post">
              
						<fieldset>
							<label>Full Name</label>
							<input type="text" name="name">
						</fieldset>
						<fieldset>
                        
                        
							<label>Email</label>
							<input type="email" name="email">
                            </fieldset>
                          <fieldset>
							<label>Password</label>
							<input type="password" name="password">
						</fieldset>
                        <fieldset>
                        
                        
							<label>Gender</label>
							Male<input type="radio" name="gender" value="male" checked>Female<input type="radio" name="gender" value="female">
                            </fieldset>
                         
                        <fieldset>
                        <button type="submit" name="submit">Submit</button>
                        
                        </fieldset>
						</form>
                        <p align="center"><?php if(isset($data_txt)): echo $data_txt;   endif; ?></p>
						<div class="clear"></div>
				</div>
			
		</article><!-- end of post new article -->
	
	</section>


</body>

</html>