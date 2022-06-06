<main id="main">

<!-- ======= About Section ======= -->
<div id="about" class="about-area area-padding">
  <div class="container">
    
    
  </div>
</div><!-- End About Section -->  

<!-- ======= Pricing Section ======= -->
<div id="pricing" class="pricing-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2><span class="su-agriInvst">Agri Land For Sale</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- single-well start-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-left">
          <div class="single-well">
            <a href="#">
              <?php $images = explode (",", $properyData->farm_images);  ?>
              <img src="<?php echo base_url(); ?>farm_images/<?php echo $images[0]; ?>" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-12 col-sm-12"><a href="#">
              <img src="<?php echo base_url(); ?>assets/img/about/susasya-negotiation.jpg" alt="">
            Send a Quote fot this property</a></div>
      </div>
      <!-- single-well end-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-middle">
          <div class="single-well single-well-Susasya">
            <div class="col-md-12 col-sm-12">
            <ul>
              <li>Extent : </li>
              <li><?php echo $properyData->extent; ?> Acres</li>              
            </ul>
            </div>
            <div class="col-md-12 col-sm-12">
            <ul>
              <li>Owner Type : </li>
              <li><?php echo $properyData->extent; ?></li>              
            </ul>
            </div><div class="col-md-12 col-sm-12">
            <ul>
              <li>Contact Number :</li>
              <li><?php echo $properyData->contact_no; ?></li>              
            </ul>
            </div>
            <div class="col-md-12 col-sm-12">
            <ul>
              <li>Expected Price Per Cent : </li>
             <li><?php echo $properyData->price_per_cent; ?></li>
              
            </ul>
            </div>
            <div class="col-md-12 col-sm-12">
            <ul>
              <li>Number of Transactions : </li>
              <li><?php echo $properyData->no_of_transactions; ?></li>
              
            </ul>
            </div>
            <div class="col-md-12 col-sm-12">
            <ul>
              <li>Latitude and Longitude : </li>
              <li><?php echo $properyData->map_info; ?></li>
              
            </ul>
            </div>
          </div>

        </div>
      </div>
      <!-- End col-->
    </div>
  </div>
</div><!-- End Pricing Section -->



</main><!-- End #main -->
<div class="container">&nbsp;</div>
<div class="container">&nbsp;</div>
