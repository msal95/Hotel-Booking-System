<?php require_once('header.php');  ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Our Vehicles Gallery
                    
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
        <?php $select_dt=mysql_query("select * from vehicle");
			while($get_dt=mysql_fetch_array($select_dt)){
			 ?>  
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    
                        <img src="<?php echo "images/".$get_dt["image"]; ?>" class="img-responsive img-thumbnail" alt="<?php echo $get_dt["image"]; ?>">
                  
                    <div class="panel-body">
                        <h3><?php echo $get_dt["name"]; ?></h3>
                  <p><strong>Category: </strong><?php echo $get_dt["category"]; ?></p>
                  <p><strong>Price: </strong><?php echo $get_dt["price"]; ?> Per/Day</p>
                      </div>
                </div>
            </div>
            
            <?php } ?>
            
            
        </div>

        
        <!-- /.row -->

      </div>
    <?php require_once('footer.php'); ?>