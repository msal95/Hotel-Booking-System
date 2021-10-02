<?php require_once('header.php'); ?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php 
			$c = 0;
        $class = '';
			$slider_dt=mysql_query("select * from hotels where slider=1");
			while($slider=mysql_fetch_array($slider_dt)){
				$c++;
			 ?>  
            <div class="item<?php if ( $c == 1 ): echo " active"; endif; ?>" >
                <img src="<?php echo "images/".$slider["image"]; ?>" class="slider_img" alt="<?php echo $slider["image"]; ?>">
                <div class="carousel-caption">
                    <h2><?php echo $slider["title"]; ?></h2>
                     
                </div>
            </div>
                 <?php } ?>
                   </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        
   

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Latest Packages</h2>
            </div>
            <?php $select_dt=mysql_query("select * from packages where feature=1");
			while($get_dt=mysql_fetch_array($select_dt)){
				$hotel_dt=mysql_fetch_array(mysql_query("select * from hotels where hotel_id=".$get_dt["hotel_id"]));
			 ?>  
            <div class="col-md-4 col-sm-6">
               
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo "images/".$get_dt["image"]; ?>" alt="<?php echo $get_dt["image"]; ?>">
               
                <h5><strong>Hotel: </strong><?php echo $hotel_dt['title']; ?></h5>
                <h5><?php echo $get_dt["title"]; ?></h5>
                <h4 align="right"><?php echo "Rs: ".number_format($get_dt["price"])."/ Per Night"; ?></h4>
            
            <div class="clearfix"></div>
            </div>
            
             <?php } ?>
            
            
        </div>
        <!-- /.row -->

      </div>

<?php require_once('footer_main.php'); ?>
        <!-- Footer -->
      
      <?php require_once('footer.php'); ?>