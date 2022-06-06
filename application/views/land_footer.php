  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Su-Sasaya</span>Farms</h2>
                </div>

                <p>susaya farm supporter and manage your farm and protect your farm like with secured survilance.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Please connect me @</h4>
                <p>
                  Please connect with us.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +6302000797</p>
                  <p><span>Email:</span> connect@susasya.in</p>
                  <p><span>Working Hours:</span> 9am-9pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
 

  <!-- Modal -->
  <!-- PROPERTY GRID Modal Popup-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header modal-headerStyl">
        <h5 class="modal-title modal-titlFntStyl" id="exampleModalLabel">Property Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6">
                <label>State</Lable>
                <select id="stataID">
                  <option>Select State</option>
                  <?php  foreach($states as $item) {  ?>
                  <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <label>District</label>
                <select id="districtID">
                  <option>Select District</option>
                  <?php  foreach($city as $item) {  ?>
                  <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                  <?php } ?>
                  </select>
                </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <label>Mandal</label>
                <select id="mandalID">
                  <option>Select Mandal</option>
                  <?php  foreach($mandal as $item) {  ?>
                  <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
          </div> 
                  <p></p>
        <div class="row">
          <div class="col-lg-12 col-md-4 col-sm-6">
           
            <div id="propertiesTable">
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!-- End of Property Grid Modal Popup -->

<!-- Modal Popup For ask phone number if he is new-->
<div class="modal fade" id="userCheckModal" tabindex="-1" role="dialog" aria-labelledby="userCheckModalLabel" aria-hidden="true">
   <div class="modal-dialog ">
       <div class="modal-content">
          <div class="modal-header modal-headerStyl">
              <h5 class="modal-title modal-titlFntStyl">User Auth</h5>               
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <div class="modal-body">
            <form id="checkUserForm" action="#" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile No</label>
                <input type="tel" name="phoneno"  pattern="^\d{3}\d{3}\d{4}$" required class="form-control" id="mobileno" aria-describedby="phoneHelp" placeholder="Enter 10 digit phone number">
                <small id="emailHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
              </div>

              <div class="form-group otpsection" style="display:none;">                                
                <input type="text" name="otp_no"  pattern="^\d{4}$" class="form-control" id="otp" aria-describedby="phoneHelp" placeholder="Enter OTP">
                <small id="emailHelp" class="form-text text-success text-muted">OTP sent to your mobile number, Please enter OTP and submit to continue.</small>
              </div>

              <!--<div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="text" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required class="form-control" id="auth_email" aria-describedby="phoneHelp" placeholder="Enter email address">                
                <small id="emailHelp" class="form-text text-muted">We'll never share your email address with anyone else.</small>
              </div>-->
              <input type="hidden" id="property_id">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
           <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <!---<button type="button" class="btn btn-primary">Save changes</button>-->
          </div>
       </div>
  </div>
</div>
<!--- End of model -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main_functions.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
   <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <script>         
    $('#propertiesTable_wrapper').hide();
    $(document).ready(function() {

        $(document).on('click', '.usercheck', function(){
          $('#mobileno').val('');
          $('#otp').val('');
          $('.otpsection').hide();
          $('#exampleModal').modal('hide');
          $('#userCheckModal').modal('show');

          const pid = $(this).attr('data-properyid');          
          let x = document.cookie;          
          if(x !== ''){
            window.location = "/propertyDetail/"+pid;
          }
          $('#property_id').val(pid);

        });

        $(document).on('submit', '#checkUserForm', function(e){
            e.preventDefault();
            const pid = $('#property_id').val();
            const mobileno = $('#mobileno').val();
            $form = $('#checkUserForm');
            var serializedData = $form.serialize();
            console.log(serializedData);
            $.ajax({
            url: 'userAuthWithPhone',
            type: 'POST',
            data: serializedData,
            datatype: 'json'
            })
            .done(function (data) { 
              console.log('---Data ---->', data);
              $('.otpsection').show();
              $('#otp').prop('required',true);
              if(data === 'alive'){
                window.location = "/propertyDetail/"+pid;
              }else if(data === 'died'){
                window.location = "/";
              }

            })
            .fail(function (jqXHR, textStatus, errorThrown) { $('.otpsection').hide(); serrorFunction(); });
        });
    });
</script>  
</body>
</html>