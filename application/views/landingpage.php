  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Su-Sasya Farms </h2>
                <p class="animate__animated animate__fadeInUp">our expertise in agridevelopment and agriforest development will support you to find a good agri farm land</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Su-Sasya Farmhouses</h2>
                <p class="animate__animated animate__fadeInUp">We help you build eco-friendly farm house in your farmland with low budget</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Susasya Farm Maintenace</h2>
                <p class="animate__animated animate__fadeInUp">Our team will maintain and setup agri bores and farm fencing and plantation and others..</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About Su-Sasya Farms</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/1.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4>What is Su - Sasya ?</h4>
                  <h6>Su-Sasya is a word derived from Sanskrit language where “Su” means <span>“Good”</span> and “Sasya” means <span>“Crop”</span>.
</h6>
                </a>
                <p>
                  We have a decade long experience and expertise in farmland development and provide wide variety of services as below
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Finding best suitable farm property 
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Best legal team for document verifications and clear title deeds
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Best market prices
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Land Survey
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Farm Maintenance
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Ongoing and Deliverd Farms</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <?php  $img1 = explode(',', $latest_propertyInfo[0]->farm_images); ?>
                  <img src="<?php echo base_url().'/farm_images/'.$img1[0]; ?>" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4><?php echo $latest_propertyInfo[0]->name; ?></h4>
                <?php if($latest_propertyInfo[0]->farm_type ==1) { 
                  $ftype = 'Empty land';
                }else{
                  $ftype = 'With Crop';
                } ?>
                <p><?php echo $ftype; ?></p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <?php  $img2 = explode(',', $latest_propertyInfo[1]->farm_images); ?>
                  <img src="<?php echo base_url().'/farm_images/'.$img2[0]; ?>" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4><?php echo $latest_propertyInfo[1]->name; ?></h4>
                <?php if($latest_propertyInfo[1]->farm_type == 1) { 
                  $ftype = 'Empty land';
                }else{
                  $ftype = 'With Crop';
                } ?>
                <p><?php echo $ftype; ?></p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                <?php  $img3 = explode(',', $latest_propertyInfo[2]->farm_images); ?>
                  <img src="<?php echo base_url().'/farm_images/'.$img3[0]; ?>" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
              <h4><?php echo $latest_propertyInfo[2]->name; ?></h4>
                <?php if($latest_propertyInfo[2]->farm_type ===1) { 
                  $ftype = 'Empty land';
                }else{
                  $ftype = 'With Crop';
                } ?>
                <p><?php echo $ftype; ?></p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                <?php  $img4 = explode(',', $latest_propertyInfo[3]->farm_images); ?>
                  <img src="<?php echo base_url().'/farm_images/'.$img4[0]; ?>" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
              <h4><?php echo $latest_propertyInfo[3]->name; ?></h4>
                <?php if($latest_propertyInfo[3]->farm_type == 1) { 
                  $ftype = 'Empty land';
                }else{
                  $ftype = 'With Crop';
                } ?>
                <p><?php echo $ftype; ?></p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="assets/img/about/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>Farm Visit</h2>
            <h5>Nature stay, , Trainings fieldday meetings.</h5>
            <a href="#contact" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Farm Maintenance</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Farmhouse Develoment</li>
              <li data-filter=".filter-card">Solar / Electric Bore Installations</li>
              <li data-filter=".filter-web">Readymade Walls Solar/Mesh Fencing</li>
            </ul>
          </div>
        </div>

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.jpg">
                      <h4>Wooden Cottage</h4>
                      <span>Chodavaram</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/2.jpg">
                      <h4>Readymade Walls</h4>
                      <span>Vizianagaram,Agri Farm Land</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/3.jpg">
                      <h4>Solar Bore</h4>
                      <span>Devarapalli Farm land</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/4.jpg">
                      <h4>Solar fencing</h4>
                      <span>Anakapalli Farm land</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/5.jpg">
                      <h4>Commercial Structure Farm-House</h4>
                      <span>S.Kota</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>-
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/6.jpg">
                      <h4>Mesh Fencing</h4>
                      <span>Ravikamatham Farm Land, Visakhapatnam</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

        </div>
      </div>
    </div><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2><span class="su-agriInvst">Why Agri Investments ?</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/farmland-invstmnt.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <ul>
                  <li>
                    <i class="bi bi-check"></i>  Agri lands have better price appreciation compared to urban real-estate and rural venture layouts and 100% Gold and Equeties
                    </li>
                  <li>
                    <i class="bi bi-check"></i> Great feel good factor of owing own lands
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Best holiday/weekend destinations with ZERO spending
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Farm to Fork with 100% Organic Tastes on your plate. Unpolished Rice, Cold Pressed Oil, Organic Fruits and Vegetables.
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Best investment for higher returns and for a healthy life 
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Great gift to future generations 
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Susasya will provide 24/7 security and survilance operations and maintenance
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>N Srikanth</h3>
                <h4>Senior Sales Manager, Cadbury Hyderabad</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I have get a land from susasy farms on 2018, I was really happy with their service even my land appreciation 150% till now, Thank you su-sasya farms
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Srinivas Chitturi</h3>
                <h4>IT India Manager, Patra India, Vizag</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Yes, I get to own some land. But above that, I feel proud to be doing something for Mother Earth. Trees are going to be planted on my land, and that means I will be contributing towards a greener cover and cleaner air for everyone. Thank You Su-Sasya Team.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Talada Mahesh</h3>
                <h4>Senior Software Manager, Sapient Technologies, Banglore</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I have get a land from susasy farms on 2018, I was really happy with their service even my land appreciation 150% till now, Thank you su-sasya farms.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Emmandi Anusha</h3>
                <h4>Senior Testing Lead, Tech Mahindra, Hyderabad.</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  If you are looking for an investment in land with annual income too, approach Su-Sasya Team.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Konapala Srinu</h3>
                <h4>Staff Engineer, Patra India, Vizag</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The best part about Su-Sasya is their team. The advisory board of the company comprises of experts and leaders in their respective fields. They are completely transparent with the customers regarding business transactions.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div><!-- End Testimonials Section -->

    

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +91 6302000797<br>
                    <span>Monday-Sunday (9am-9pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: info@susasya.in<br>
                    <span>Web: www.susasya.in</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: Chodavaram<br>
                    <span>531023, Vizag, Andhra Pradesh</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15183.373958058792!2d82.8651386!3d17.9394524!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcee97f7a30b781e!2sSusasya%20Farms!5e0!3m2!1sen!2sin!4v1645282109280!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             <!--  <object src="https://goo.gl/maps/SQENtK1vHJ6JGoM56" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></object> -->
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
              <form  action="" id="contact-form-post" class="contact-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit" id="submitContact">Send Message</button>                    
                  </div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->