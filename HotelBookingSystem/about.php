<?php require_once('header.php');
$about=mysql_fetch_array(mysql_query("select * from about"));
 ?>
    <!-- Page Content -->
    <div class="container details_main">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $about['title']; ?>
                   
                </h1>
                
            </div>
        </div>
        <!-- /.row -->
<section class="about_section">
        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo "images/".$about["image"]; ?>" alt="<?php echo $about["image"]; ?>">
            </div>
            <div class="col-md-6">
              <?php echo $about['details']; ?>
        </div>
        
</section>
      </div>
     <?php require_once("footer.php"); ?>