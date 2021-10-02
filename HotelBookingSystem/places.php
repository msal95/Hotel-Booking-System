<?php require_once('header.php');  ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Places
                    
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
        <?php $select_dt=mysql_query("select * from places");
			while($get_dt=mysql_fetch_array($select_dt)){
			 ?>  
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    
                        <img src="<?php echo "images/".$get_dt["image"]; ?>" class="img-responsive img-thumbnail" alt="<?php echo $get_dt["image"]; ?>">
                  
                    <div class="panel-body">
                        <h3><?php echo $get_dt["heading"]; ?></h3>
                  
                        <a href="<?php echo "hotels.php?placeID=".$get_dt["place_id"]; ?>" class="btn btn-primary">View Hotels</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            
            
        </div>

        
        <!-- /.row -->

      </div>
    <?php require_once('footer.php'); ?>