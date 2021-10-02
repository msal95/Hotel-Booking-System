<?php require_once('header.php');
if(!empty($_GET['detailsID'])):
$details=mysql_fetch_array(mysql_query("select * from packages where package_id=".$_GET['detailsID']));
$hotels=mysql_fetch_array(mysql_query("select * from hotels where hotel_id=".$details['hotel_id']));
else:
header("location:index.php");

endif;
?>

    <!-- Page Content -->
    <div class="container details_main">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $hotels['title']; ?>
                    
                </h1>
                
            </div>
        </div>
     
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo "images/".$details["image"]; ?>" alt="">
                        </div>
                        
                        
                    </div>

                    <!-- Controls -->
                   <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>-->
                </div>
            </div>

            <div class="col-md-4">
              <?php echo $details['details']; ?>
              <h4><?php echo $details['title']; ?></h4>
                <h4>Price: <?php echo "Rs ".number_format($details["price"]); ?> <small>/ Per Night</small></h4>
                <div class="row"><a href="<?php echo "booking.php?packageID=".$_GET['detailsID']."&hotelID=".$_GET['hotelID']."&placeID=".$_GET['placeID'];?>" class="btn btn-primary pull-right package_btn">Book Now</a></div>
            </div>

        </div>
        <!-- /.row -->

       
</div>

       <?php require_once('footer.php'); ?>