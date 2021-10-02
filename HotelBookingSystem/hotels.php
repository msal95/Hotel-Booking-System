<?php require_once('header.php'); 
if(!empty($_GET['placeID'])):
$hotels=mysql_query("select * from hotels where place_id=".$_GET['placeID']);
$place=mysql_fetch_array(mysql_query("select * from places where place_id=".$_GET['placeID']));
else:
header("location:index.php");
endif;

 ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $place['heading']; ?> Hotels
                    
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
        <?php 
			while($get_dt=mysql_fetch_array($hotels)){
			 ?>  
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    
                        <img src="<?php echo "images/".$get_dt["image"]; ?>" class="img-responsive img-thumbnail" alt="<?php echo $get_dt["image"]; ?>">
                  
                    <div class="panel-body">
                        <h3><?php echo $get_dt["title"]; ?></h3>
                  
                        <a href="<?php echo "packages.php?hotelID=".$get_dt["hotel_id"]."&placeID=".$_GET['placeID']; ?>" class="btn btn-primary">View Packages</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            
            
        </div>

        
        <!-- /.row -->

      </div>
    <?php require_once('footer.php'); ?>