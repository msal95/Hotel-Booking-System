<?php require_once('header.php');
if(!empty($_GET['hotelID'])):
$packages=mysql_query("select * from packages where hotel_id=".$_GET['hotelID']);
$hotel=mysql_fetch_array(mysql_query("select * from hotels where hotel_id=".$_GET['hotelID']));
else:
header("location:index.php");

endif; 
 ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $hotel['title']; ?> Packages
                    
                </h1>
                
            </div>
        </div>

        <div class="row">
         <?php 
		
			while($get_dt=mysql_fetch_array($packages)){
	
			 ?> 
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    
                        <img src="<?php echo "images/".$get_dt["image"]; ?>" class="img-responsive img-thumbnail" alt="<?php echo $get_dt["image"]; ?>">
                  
                    <div class="panel-body">
                        <h5><strong>Hotel: </strong><?php echo $hotel['title']; ?></h5>
                <h5><?php echo $get_dt["title"]; ?></h5>
                <h4 ><?php echo "Rs: ".number_format($get_dt["price"])."/ Per Night"; ?></h4>
                        <a href="<?php echo "details.php?detailsID=".$get_dt['package_id']."&hotelID=".$_GET['hotelID']."&placeID=".$_GET['placeID'];?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            
            
        </div>

</div>
      <?php require_once('footer.php'); ?>