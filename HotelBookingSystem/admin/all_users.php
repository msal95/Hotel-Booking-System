<?php include_once("header.php"); ?>
<?php include_once("sidebar.php");
ob_start();
?><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		
		

		

		
		<article class="module width_full">
			<header><h3>All Users</h3></header>
				<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   				<th>User ID</th> 
    				<th>Full Name</th> 
    				<th>Email</th> 
    				<th>Gender</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
            
            <?php $select_q=mysql_query("select * from users order by user_id DESC"); ?>
            <?php while($users=mysql_fetch_array($select_q)){ ?>
<tr>
				<tr> 
   					 
    				 
    				<td><?php echo $users['user_id']; ?></td>
                     
                    <td><?php echo $users['name']; ?></td> 
    				<td><?php echo $users['email']; ?></td>
                    <td><?php echo $users['gender']; ?></td>
                    <td><a href="<?php echo "all_users.php?del=".$users['user_id']; ?>"><img src="images/delete.png" alt="delete"></a></td> 
				</tr>
                <?php }
				if(isset($_GET['del'])){
				$delete_done=mysql_query("delete from users where user_id=".$_GET['del']);
				if($delete_done)
				{
					
					header("location:all_users.php");
				}
				}
				 ?>
                
                
                 
                 
				 
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
		</article><!-- end of post new article -->
	
	</section>


</body>

</html><?php ?>