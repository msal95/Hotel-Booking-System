<?php include_once("header.php"); ?>
	
	<?php include_once("sidebar.php"); 
	
	$user_data=mysql_fetch_array(mysql_query("SELECT * FROM users where user_id=".$_SESSION['user_id']));
	
	?><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3><?php echo $user_data['name']; ?> Profile</h3></header>
				<div class="module_content">
                <table cellpadding="4" align="center" width="100%">
                
                <tr>
                <td><strong>Name:</strong></td>
                <td><?php echo ucwords($user_data['name']); ?></td>
                </tr>
                 <tr>
                <td><strong>Email:</strong></td>
                <td><?php echo $user_data['email']; ?></td>
                </tr>
                   <tr>
                <td><strong>Gender:</strong></td>
                <td><?php echo ucwords($user_data['gender']); ?></td>
                </tr>
                
                   <tr>
                <td><strong>User Created Date:</strong></td>
                <td><?php 
  echo $date = date("j - F, Y", strtotime($user_data['date']));
?></td>
                </tr>
                
                
                </table>
               
						<div class="clear"></div>
				</div>
			
		</article><!-- end of post new article -->
	
	</section>


</body>

</html>