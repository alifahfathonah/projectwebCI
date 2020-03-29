<!DOCTYPE html>
<html lang="en">
  <head>
     <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/landing/images/APSI.png">
    <title>PORTAL KERJA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css">    
     <link href="<?php echo base_url(); ?>assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <style>
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    .tab button {
      background-color: inherit;
      padding: 14px 16px;
      transition: 0.3s;
    }
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    .tabcontent {
      display: none;
    }
.tengah {
  text-align: center;
}
.paginat {
  display: inline-block;
}

.paginat a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.paginat a.active {
  background-color: #007bff;
  color: white;
}

.paginat a:hover:not(.active) {background-color: #ddd;}    

/*ribbon*/
  .ribbon-wrapper {
    width: 85px;
    height: 88px;
    overflow: hidden;
    position: absolute;
    top: -3px;
    right: -3px
}
.ribbon {
    font-size: 12px;
    color: #FFF;
    text-transform: uppercase;
    font-family: 'Montserrat Bold', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    letter-spacing: .05em;
    line-height: 15px;
    text-align: center;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    position: relative;
    padding: 7px 0;
    right: -11px;
    top: 10px;
    width: 100px;
    height: 28px;
    -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .3);
    box-shadow: 0 0 3px rgba(0, 0, 0, .3);
    background-color: #dedede;
    background-image: -webkit-linear-gradient(top, #ffffff 45%, #dedede 100%);
    background-image: -o-linear-gradient(top, #ffffff 45%, #dedede 100%);
    background-image: linear-gradient(to bottom, #ffffff 45%, #dedede 100%);
    background-repeat: repeat-x;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffdedede', GradientType=0)
}

.ribbon:before,
.ribbon:after {
    content: "";
    border-top: 3px solid #9e9e9e;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    position: absolute;
    bottom: -3px
}

.ribbon:before {
    left: 0
}

.ribbon:after {
    right: 0
}

.ribbon.blue {
    background-color: #1a8bbc;
    background-image: -webkit-linear-gradient(top, #177aa6 45%, #1a8bbc 100%);
    background-image: -o-linear-gradient(top, #177aa6 45%, #1a8bbc 100%);
    background-image: linear-gradient(to bottom, #177aa6 45%, #1a8bbc 100%);
    background-repeat: repeat-x;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#177aa6', endColorstr='#ff1a8bbc', GradientType=0)
}

.ribbon.blue:before,
.ribbon.blue:after {
    border-top: 3px solid #115979
}

.darkenx {
  background:
        /* top, transparent black, faked with gradient */ 
        linear-gradient(
          rgba(0, 0, 0, 0.1), 
          rgba(0, 0, 0, 0.1)
        ),
        /* bottom, image */
        url(<?php echo base_url(); ?>assets/landing/images/bandara3.jpg) no-repeat center center fixed !important; 
}
    </style>
  <?php
    $notif = $this->session->flashdata('notif');
    $type = $this->session->flashdata('type');

  ?>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('Landing') ?>"> <img src="https://integraaps.apsintegra.co.id/wp-content/uploads/2020/03/APSI-copy.png" width="170"><p></p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#beranda" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="#carilowongan" class="nav-link">Cari Lowongan</a></li> 
            <li class="nav-item"><a href="#lowonganpremium" class="nav-link">Rekomendasi</a></li>              
            <li class="nav-item"><a href="#pasanglowongan" class="nav-link">Pasang Lowongan Kerja</a></li>
            <li class="nav-item"><a href="" data-toggle="modal" data-target="#login" data-whatever="@getbootstrap" class="btn btn-info" >Login/Daftar</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->


    <!-- MODAL -->
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header tab">
              <button class="modal-title btn tablinks" style="margin-right: 5% ; border-radius: 0px ; " onclick="Login(event, 'Masuk')">Masuk</button>
              <button class="modal-title btn tablinks" style="margin-right: 5% ; border-radius: 0px ; " onclick="Login(event, 'Daftar')">Daftar</button>  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div id="Masuk" class="tabcontent" style="display: block;">
            <div class="modal-body">
              <form action="<?php echo base_url('Auth/do_login'); ?>" method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Email</label>
                  <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <p>Lupa password? <a href="<?php echo base_url('Auth/emailPass'); ?>">Klik disini</a></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input class="btn btn-primary" type="submit" name="submit" value="Login">
              </form>                            
            </div>
        </div>    
        <div id="Daftar" class="tabcontent">
            <div class="modal-body">
              <form action="<?php echo base_url('Auth/create_user'); ?>" method="post">
                <div class="form-group ">
                  <label for="recipient-name" class="col-form-label">Pilih Peran</label>                  
                  <select class="form-control" name="level" required>
                    <option disabled selected value> pilih peran </option>
                    <option value="1">Pekerja</option>                    
                    <option value="2">Pemilik Perusahaan</option>
                  </select>
                </div>                 
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Email</label>
                  <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Verifikasi Password</label>
                  <input type="password" class="form-control" name="password_ver" required>
                </div>                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input class="btn btn-primary" type="submit" name="submit" value="Daftar">
              </form>              
            </div>
        </div>                 
          </div>
        </div>
      </div>

    <!-- MODAL -->

    <!-- BERANDA -->

    <section class="home-slider ftco-degree-bg" id="beranda">
      <div class="slider-item">
        <div class="overlay darkenx"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 ftco-animate text-center" style="margin-top: 20%">
              <h1 class="mb-4">PORTAL
                <strong class="typewrite" data-period="4000" data-type='[ "KARIR"]'>
                  <span class="wrap"></span>
                </strong>
              </h1>
              <p></p>
              <p><a href="#carilowongan" class="btn btn-primary btn-outline-white px-4 py-3 "><span class="ion-ios-play mr-2"></span> Ayo Mulai</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BERANDA -->


    <section class="ftco-section ftco-degree-bg ftco-animate" id="carilowongan" >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 text-center heading-section ftco-animate">
            <h2>Cari lowongan pekerjaan</h2>

                <div class="input-group mb-4">

                  <div class="input-group-append">
                  </div>
                </div>
                                <form action="<?php echo base_url() ; ?>Landing/search" method="post" >
                
              <div class="row">
                                         <div class="col-lg-4 col-md-9">
                                            <select name="category" id="category"  class=" form-control js-example-basic-single" >
                                            <option value="">Pilih Category</option>
                                            <?php
                                                $no = 0;
                                                foreach ($data_category as $d) {
                                                    echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                                                }
                                            ?>
                                            </select>
                                        </div>
                                         <div class="col-lg-4 col-md-9">
                                            <select name="kabupaten" id="kabupaten"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih Lokasi</option>
                                                <?php
                                                    $no = 0;
                                                    foreach ($data_kab as $d) {
                                                        echo '<option value="'.$d->id.'">'.$d->name_regencies.'</option>' ; 
                                                    }
                                                ?>      
                                            </select>
                                        </div>
                                         <div class="col-lg-4 col-md-9">
                                            <select name="education" id="education"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih Pendidikan</option>
                                                <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                                <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                                <option value="S1">S1 </option>
                                                <option value="S2">S2 </option>
                                                <option value="S3">S3 </option>
                                            </select>
                                        </div>

                                    </div>                                    
                                    <div class="row form-group">
                                         <div class="col-lg-4 col-md-9">
                                            <select name="tipe_worker" id="tipe_worker"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih tipe pekerjaan</option>
                                                 <option value="Freelance">Freelance</option>
                                                 <option value="Tetap">Tetap</option>
                                                 <option value="Kontrak">Kontrak</option>
                                                 <option value="Paruh Waktu">Paruh Waktu</option>
                                                 <option value="Magang">Magang</option>
                                            </select>
                                        </div>
                                         <div class="col-lg-4 col-md-9">
                                            <select name="salary" id="salary"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih gaji</option>
                                                 <option value=" > 10jt"> > 10jt</option>
                                                 <option value="5 - 10 jt">5 - 10 jt</option>
                                                 <option value="2 - 5 jt">2 - 5 jt</option>
                                                 <option value="1 - 2 jt">1 - 2 jt</option>
                                                 <option value="Negosiasi">Negosiasi</option>
                                            </select>
                                        </div>
                         
              </div>   
                  
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <input type="text" name="title" placeholder="Cari Pekerjaanmu" class="form-control">
                                                <div class="input-group-btn" ><input class="btn btn-primary" type="submit" value="Cari" style="border-radius: 0px ; height: 52px ;"></div>
                                            </div>
                                        </div>
                                    </div> 
                                    </form>                       
         </div>
         <div class="row col-md-12 searchvacancy" style="margin-top: 5%">
          
        </div>                                           
        <div style='margin-top: 10px;' id='pagination'></div>
        
      </div> 
        </div>
        </div>
      </div>
    </section>


 <!-- lowongan premium -->
    <section class="ftco-section" id="lowonganpremium">
      <div class="container">
          <div class="row mb-2 justify-content-center text-center"  data-aos="fade-up">
            <div class="col-7 text-center  mb-2">
              <h2 class="section-title">Rekomendasi Lowongan</h2>
              <p class="lead"></p>
            </div>
          </div>

          <div class="row">

            <?php
            foreach (array_slice($headline_premium, 0,3) as $k) { ?>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card h-100" style="width: 20rem;">
                <div class="ribbon-wrapper">
                  <div class="ribbon blue">Premium</div>
                </div>
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/admin/images/<?php echo $k->picture ?>" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $k->title ?></h3>
                  <span class="sub-title d-block mb-1" style="font-size: 20px; font-color: blue "><?php echo $k->nama_perusahaan ?></span>
                  <p class="card-text">
                    <p style="font-color: grey"><i class="fas fa-map-marker-alt"></i> <?php echo $k->name_regencies ?> - <?php echo $k->name_provinces ?></p>
                    <p style="margin-top: -15px"><i class="fas fa-graduation-cap"></i> <?php echo $k->education ?></p>
                    <p style="margin-top: -15px"><i class="fas fa-comment-dollar"></i> <?php echo $k->salary ?></a></p>
                    <p align="justify" style="margin-top: -17px"><?php echo $k->deskripsi_iklan ?></p>
                  </p>
                  <a href="<?php echo base_url(); ?>Landing/get_vacancy_by_id/<?php echo $k->id_vacancy ?>" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>     
          <?php } ?>
        </div>
          <!-- <a href="#">Lihat semua lowongan <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
    </section>

<!-- PASANG LOWONGAN -->
    <section class="ftco-section" id="pasanglowongan">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-4 text-center heading-section ftco-animate">
            <img src="<?php echo base_url(); ?>assets/landing/images/undraw_bookmarks_r6up.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 text-center heading-section ftco-animate">
            <h1>Pasang Iklan Lowongan</h1>
            <p style="text-align: justify;">Cari para pekerjaan pilihaan di antara ribuan pekerja yang telah terdaftar, buatlah perusahaan impianmu. Pekerja yang handal akan menghasilkan perushaan yang baik</p>
            <p>
               <a  href="#" data-toggle="modal" data-target="#login" data-whatever="@getbootstrap" class="btn btn-primary mt-1 py-3 px-4">Login</a> atau <a  href="#" data-toggle="modal" data-target="#login" data-whatever="@getbootstrap" class="btn btn-warning mt-1 py-3 px-4">Daftar</a>
            </p>
           
          </div>
        </div>
    </section>

    <!-- PASANG LOWONGAN -->




    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-6">
              <h2 class="ftco-heading-2">Portal Karir</h2>
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


  <script src="<?php echo base_url(); ?>assets/landing/js/jquery.min.js"></script>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
        if("<?php echo $type ; ?>" == "success"){
             swal("SUCCESS", "<?php echo $notif ; ?>", "success");
        }else if("<?php echo $type ; ?>" == "error"){
             swal("GAGAL", "<?php echo $notif ; ?>", "error");
        }      
    });

  </script>
  </body>
</html>
