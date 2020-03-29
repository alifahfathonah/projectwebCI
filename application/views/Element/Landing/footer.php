 <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-6">
              <h2 class="ftco-heading-2">Portal Kerja</h2>
              <p>Penyediaan Tenaga Kerja Professional</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-6">
              <h2 class="ftco-heading-2">PT Angkasa Pura Solusi Integra</h2>
              <p>Area Perkantoran Terminal 1A Keberangkatan
              Bandara Internasional Soekarno Hatta , Tangerang Banten  19120</p>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">info@apsintegra.co.id</a></li>
                <li><a href="#" class="py-2 d-block">​www.apsintegra.co.id</a></li>
              </ul>
            </div>
          </div>
 
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<!--   <script src="<?php echo base_url(); ?>assets/landing/js/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/landing/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/google-map.js"></script>
  <script src="<?php echo base_url(); ?>assets/landing/js/main.js"></script>
 <!--  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  <script type="text/javascript">
    function login_first()
    {
             swal("Untuk Mendapatkan fitur - fitur web kami. anda harus login terlbih dahulu");
     

    }        
    function Login(evt, catName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(catName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  
   jQuery(document).ready(function() {

      <?php
        $notif = $this->session->flashdata('notif');
        $type = $this->session->flashdata('type');

      ?>
            if("<?php echo $type ; ?>" == "success"){
                 swal("SUCCESS", "<?php echo $notif ; ?>", "success");
            }else if("<?php echo $type ; ?>" == "error"){
                 swal("GAGAL", "<?php echo $notif ; ?>", "error");
            } else if("<?php echo $type ; ?>" == "id_login"){
                  swal("Selamat Datang", "<?php echo $this->session->userdata('name') ; ?>");
               
            }
    });

/*   $(document).ready(function(){
      $('#submit').click(function() {
      var pass = $('#pass1').val();
      var pass2 = $('#pass2').val();            
      if (pass1 != pass2) {        
        swal("GAGAL", "Passwod baru dan konfirmasi password tidak sama", "error");
      } else {
        
      }
    });
  });*/

  </script>
  </body>
</html>
