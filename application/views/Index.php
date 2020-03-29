<!DOCTYPE html>
<html class="no-js" lang=""> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/landing/images/APSI.png">
    <title>Portal Kerja</title>
    <meta name="description" content="Loker">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/admin/css/cs-skin-elastic.css">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/admin/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/admin/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/fontawesome/css/all.css" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

  <?php
    $notif = $this->session->flashdata('notif');
    $type = $this->session->flashdata('type');

  ?>
  <style type="text/css">
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


</style>      
</head>
<body >
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">                 

                    <?php
                        if($this->session->userdata('level') == 1){
                            $id_login = $this->session->userdata('id_login') ;
                            $sql ="SELECT * FROM login WHERE id_login=$id_login AND status_resume='1' ";
                            $query = $this->db->query($sql);                                                

                            if($query->num_rows() > 0){
                                echo '
                                <li'; if($this->uri->segment(2) == 'Dashboard_worker'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Dashboard_worker"><i class="menu-icon fas fa-tachometer-alt"></i>Beranda </a>
                                </li>
                                <li'; if($this->uri->segment(2) == 'Worker_profil'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Worker_profil"><i class="menu-icon fa fa-user"></i>Profil Pekerja </a>
                                </li>                                   
                                <li'; if($this->uri->segment(2) == 'Resume'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Resume/resume_result"><i class="menu-icon fa fa-book"></i>Resume Online </a>
                                </li>     
                                <li'; if($this->uri->segment(2) == 'Bookmark'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Bookmark"><i class="menu-icon fa fa-star"></i>Bookmark </a>
                                </li> 
                                <li class="menu-item-has-children dropdown'; if($this->uri->segment(2) == 'Search_vacancy'){echo ' active' ; }echo'">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> Lowongan Pekerjaan</a>
                                    <ul class="sub-menu children dropdown-menu '; if($this->uri->segment(2) == 'Search_vacancy'){echo 'active' ; }echo'">
                                        <li>
                                                <a href="'.base_url().'Worker/Search_vacancy">cari Lowongan </a>
                                        </li> 
                                        <li>
                                            <a href="'.base_url().'Worker/Search_vacancy/get_vacancy_applied">Data Lowonganmu  </a>

                                        </li>                                     
                                        </ul>
                                </li>                                    
                                <li'; if($this->uri->segment(2) == 'Job_inv'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Job_inv"><i class="menu-icon fa fa-car"></i>Tawaran Pekerjaan </a>
                                </li>                                                                                                  
                                ' ;
                            }else{
                                echo '
                                <li'; if($this->uri->segment(2) == 'Dashboard_worker'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Dashboard_worker"><i class="menu-icon fas fa-tachometer-alt"></i>Beranda </a>
                                </li>
                                <li'; if($this->uri->segment(2) == 'Worker_profil'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Worker_profil"><i class="menu-icon fa fa-user"></i>Profil Pekerja </a>
                                </li>                                   
                                <li'; if($this->uri->segment(2) == 'Resume'){echo ' class="active"' ; }echo'>
                                <a href="'.base_url().'Worker/Resume"><i class="menu-icon fa fa-book"></i>Resume Online </a>                                
                                </li>                  
                                <li'; if($this->uri->segment(2) == 'Bookmark'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Bookmark"><i class="menu-icon fa fa-star"></i>Bookmark </a>
                                </li> 

                                <li class="menu-item-has-children dropdown'; if($this->uri->segment(2) == 'Search_vacancy'){echo ' active' ; }echo'">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> Lowongan Pekerjaan</a>
                                    <ul class="sub-menu children dropdown-menu '; if($this->uri->segment(2) == 'Search_vacancy'){echo 'active' ; }echo'">
                                        <li>
                                            <a href="'.base_url().'Worker/Search_vacancy">cari Lowongan </a>
                                        </li> 
                                        <li>
                                            <a href="'.base_url().'Worker/Search_vacancy/get_vacancy_applied">Data Lowongan yang sudah terdaftar  </a>
                                        </li>                                     
                                        </ul>
                                </li>                                                                   
                                <li'; if($this->uri->segment(2) == 'Job_inv'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Worker/Job_inv"><i class="menu-icon fa fa-car"></i>Tawaran Pekerjaan </a>
                                </li>                                                                                                                         
                                ' ;                                

                            }                            
                        }elseif ($this->session->userdata('level') == 2) {
                            echo '
                            <li'; if($this->uri->segment(2) == 'Dashboard_owner'){echo ' class="active"' ; }echo'>
                            <a href="'.base_url().'Owner/Dashboard_owner"><i class="menu-icon fas fa-tachometer-alt"></i>Beranda </a>
                                </li> 
                                <li class="menu-item-has-children dropdown'; if($this->uri->segment(2) == 'Paket'){echo ' active' ; }echo'">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-shopping-cart"></i>Paket</a>
                                    <ul class="sub-menu children dropdown-menu '; if($this->uri->segment(2) == 'Paket'){echo 'active' ; }echo'">
                                        <li>
                                            <a href="'.base_url().'Owner/Paket">Beli Paket </a>
                                        </li>
                                        <li>
                                            <a href="'.base_url().'Owner/Paket/get_user_paket">Paket Anda </a>
                                        </li>                                     
                                        </ul>
                                </li>                                          
                                              
                                <li'; if($this->uri->segment(2) == 'Owner_profil'){echo ' class="active"' ; }echo'>
                                <a href="'.base_url().'Owner/Owner_profil"><i class="menu-icon fa fa-home"></i>Profil Perusahaan </a>
                                </li> 
                                <li class="menu-item-has-children dropdown'; if($this->uri->segment(2) == 'Vacancy'){echo ' active' ; }echo'">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bell"></i>Pasang Iklan</a>
                                    <ul class="sub-menu children dropdown-menu '; if($this->uri->segment(2) == 'Vacancy'){echo 'active' ; }echo'">
                                        <li>
                                            <a href="'.base_url().'Owner/Vacancy">Buat Iklan </a>
                                        </li> 
                                        <li>
                                            <a href="'.base_url().'Owner/Vacancy/vacancy_result">Data Iklan </a>
                                        </li>                                     
                                        </ul>
                                </li>  

                                <li class="menu-item-has-children dropdown'; if($this->uri->segment(2) == 'Search_resume'){echo ' active' ; }echo'">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-card"></i>Cari Kandidat</a>
                                    <ul class="sub-menu children dropdown-menu '; if($this->uri->segment(2) == 'Search_resume'){echo 'active' ; }echo'">
                                        <li>
                                            <a href="'.base_url().'Owner/Search_resume">Cari Kandidat </a>
                                        </li> 
                                        <li>
                                            <a href="'.base_url().'Owner/Search_resume/data_job_inv">Data Pekerja Yang Diundang </a>
                                        </li>                                     
                                        </ul>
                                </li>                                                                                                              
                            ' ;
                        }elseif ($this->session->userdata('level') == 3) {
                            echo '
                                <li'; if($this->uri->segment(2) == 'Data_user'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Admin/Data_user"><i class="menu-icon fa fa-user"></i>Data Pengguna </a>
                                </li>
                                <li'; if($this->uri->segment(2) == 'Data_Category'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Admin/Data_Category"><i class="menu-icon fa fa-circle"></i>Data Kategori </a>
                                </li> 
                                <li'; if($this->uri->segment(2) == 'Data_sector'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Admin/Data_sector"><i class="menu-icon fa fa-circle"></i>Data Bidang Usaha </a>
                                </li>
                                <li'; if($this->uri->segment(2) == 'Data_paket'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Admin/Data_paket"><i class="menu-icon fa fa-ticket"></i> Data Paket </a>
                                </li> 

                                <li'; if($this->uri->segment(2) == 'Accept_payment'){echo ' class="active"' ; }echo'>
                                    <a href="'.base_url().'Admin/Accept_payment"><i class="menu-icon fa fa-money"></i>Terima Pembayaran </a>
                                </li> 

                            ' ;
                        }
                    ?>                    
                                                             
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <?php if ($this->session->userdata('level') == '2') { ?>
                       <a class="navbar-brand" href="<?php echo site_url('Owner/Dashboard_owner') ?>"><strong>Portal Kerja</strong></a> 
                    <?php } elseif ($this->session->userdata('level') == '1') { ?>
                        <a class="navbar-brand" href="<?php echo site_url('Worker/Dashboard_worker') ?>"><strong>Portal Kerja</strong></a>
                    <?php } else { ?>
                        <a class="navbar-brand" href="<?php echo site_url('Admin/Data_user') ?>"><strong>Portal Kerja</strong></a>
                    <?php } ?>
                    
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                
                            <?php  
                                if($this->session->userdata('level') == 2){
                                $id_login = $this->session->userdata('id_login') ;
                                    $sql ="SELECT * FROM apllied_vacancy INNER JOIN vacancy ON apllied_vacancy.id_vacancy=vacancy.id_vacancy INNER JOIN login ON vacancy.id_login=vacancy.id_login WHERE read_owner=0 AND vacancy.id_login=$id_login AND login.id_login=apllied_vacancy.id_login";
                                    $query = $this->db->query($sql);    
                                    $notif = $query->result() ;
                                $total = 0 ;
                                    foreach ($notif as $q ) { $total+=1 ; }
                                echo '<span class="count bg-primary">'.$total.'</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="message">'  ; 
                                    foreach ($notif as $q ) {
                                        echo '
                                        <a class="dropdown-item media" href="'.base_url().'Owner/Vacancy/read/'.$q->id_apllied_vacancy.'">
                                            <span class="photo media-left"><img alt="avatar" src="'.base_url().'assets/admin/images/'.$q->picture.'"></span>
                                            <div class="message media-body">
                                                <span class="name float-left">'.$q->name.'</span>
                                                <span class="time float-right">'.$q->date_created_app.'</span>
                                                <p>Mendaftar di lowongan pekerjaan <b>'.$q->title.'</b></p>
                                            </div>
                                        </a>
                                        ' ;
                                    }
                                
                                }elseif ($this->session->userdata('level') == 1){
                                $id_login = $this->session->userdata('id_login') ;
                                $sql ="SELECT * FROM apllied_vacancy INNER JOIN vacancy ON apllied_vacancy.id_vacancy=vacancy.id_vacancy INNER JOIN login ON apllied_vacancy.id_login=login.id_login WHERE read_worker = 1  AND login.id_login=$id_login";
                                $query = $this->db->query($sql);    
                                $notif = $query->result() ;

                                $sql2 ="SELECT * FROM job_inv INNER JOIN vacancy ON job_inv.id_vacancy=vacancy.id_vacancy INNER JOIN login ON job_inv.id_worker=login.id_login WHERE read_worker = 0  AND job_inv.id_worker=$id_login";
                                $query2 = $this->db->query($sql2);    
                                $notif2 = $query2->result() ;                                  
                                $total2 = 0 ;
                                $total = 0 ;
                                     foreach ($notif2 as $q ) { $total2+=1 ; }                               
                                    foreach ($notif as $q ) { $total+=1 ; }
                                $total3 =$total2 + $total ; 

                                echo '<span class="count bg-primary">'.$total3.'</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="message">'  ; 
                                    foreach ($notif as $q ) {
                                        echo '
                                        <a class="dropdown-item media" href="'.base_url().'Worker/Search_vacancy/get_vacancy_applied">
                                            <div class="message media-body">
                                                <span class="time float-right">'.$q->date_created_app.'</span>
                                                <p>Selamat Lamaran Anda diterima di <b>'.$q->title.'</b></p>
                                            </div>
                                        </a>
                                        ' ;
                                    }

                                    foreach ($notif2 as $q ) {
                                        echo '
                                        <a class="dropdown-item media" href="'.base_url().'Worker/Job_inv/">
                                            <span class="photo media-left"><img alt="avatar" src="'.base_url().'assets/admin/images/'.$q->picture.'"></span>                                            
                                            <div class="message media-body">
                                                <span class="time float-right">'.$q->date_created_inv.'</span>
                                                <p>Anda Mendapat Tawaran Pekerjaan Menjadi <b>'.$q->title.'</b></p>
                                            </div>
                                        </a>
                                        ' ;
                                    }                                                              
                                }  else{
                                $id_login = $this->session->userdata('id_login') ;
                                $sql ="SELECT * FROM paket INNER JOIN upgrade ON paket.id_upgrade=upgrade.id_upgrade INNER JOIN login ON paket.id_login=login.id_login WHERE status = 'menunggu balasan'";
                                $query = $this->db->query($sql);    
                                $notif = $query->result() ;
                                 
                                $total = 0 ;
                                    foreach ($notif as $q ) { $total+=1 ; }

                                echo '<span class="count bg-primary">'.$total.'</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="message">'  ; 
                                    foreach ($notif as $q ) {
                                        echo '
                                        <a class="dropdown-item media" href="'.base_url().'Admin/Accept_payment">
                                            <span class="photo media-left"><img alt="avatar" src="'.base_url().'assets/admin/images/'.$q->picture.'"></span>                                            

                                            <div class="message media-body">
                                                <span class="time float-right">'.$q->date_created_paket.'</span>
                                                <p>Ada pembayaran oleh <b>'.$q->name.'</b></p>
                                            </div>
                                        </a>
                                        ' ;
                                    }

                                }
                            ?>                                 


                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if ($this->M_master->getLoginByID($this->session->userdata('id_login'))->picture != "") { ?>
                                <img src="<?php echo base_url(); ?>assets/admin/images/<?php echo $this->M_master->getLoginByID($this->session->userdata('id_login'))->picture ?>" alt="user" class="user-avatar rounded-circle" />
                                <!-- <img class="user-avatar rounded-circle" src="<?php echo base_url(); ?>assets/admin/images/<?php echo $this->session->userdata('picture') ; ?>" alt="foto"> -->
                            <?php } ?>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <?php 
                                if($this->session->userdata('level') == 1){
                                    echo'
                                    <a class="nav-link" href="'.base_url().'Worker/Worker_profil"><i class="fa fa-user"></i>My Profile</a>
                                    <a class="nav-link" href="'.base_url().'Auth/logout"><i class="fa fa-power-off"></i>Logout</a>
                                    ' ;
                                }elseif($this->session->userdata('level') == 2){
                                    echo'
                                    <a class="nav-link" href="'.base_url().'Owner/Owner_profil"><i class="fa fa-user"></i>My Profile</a>
                                    <a class="nav-link" href="'.base_url().'Auth/logout"><i class="fa fa-power-off"></i>Logout</a>
                                    ' ;
                                }else{
                                    echo'
                                    <a class="nav-link" href="'.base_url().'Auth/logout"><i class="fa fa-power-off"></i>Logout</a>
                                    ' ;                                    
                                }
                            ?>

                        </div>
                    </div>
            </div>
            </div>

        </header>
        
        <!-- Header-->
      <?php
          $this->load->view($main_view, TRUE);
      ?>

<!-- CONTENT -->



    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright || 2020
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/admin/js/main.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

  <script>
    function get_app(id)
    {
        jQuery('#data_app').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Owner/Vacancy/get_apllied_vacancy/'+id, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#data_app').append('<tr><th scope="row">1</th><td>'+value.name+'</td><td><a  target="_blank" href="<?php echo base_url() ?>Owner/Vacancy/get_resume_app/'+value.id_login+'/'+value.id_apllied_vacancy+'" class="btn btn-primary"  style="color : white ;">Lhat Resume</a></td><td><a  href="<?php echo base_url() ?>Owner/Vacancy/accept_app/'+value.id_apllied_vacancy+'" class="btn btn-success"  style="color : white ;" >Terima </a></td></tr>');
            })
        });
    } 
    
    function get_app_acc(id)
    {
        jQuery('#data_app_acc').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Owner/Vacancy/get_apllied_vacancy_acc/'+id, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#data_app_acc').append('<tr><td>'+value.name+'</td><td><a  target="_blank" href="<?php echo base_url() ?>Owner/Vacancy/get_resume_app/'+value.id_login+'" class="btn btn-primary"  style="color : white ;">Lhat Resume</a></td></tr>');
            })
        });
    }             
    function get_kab(prov)
    {
        jQuery('#kabupaten').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Worker/Resume/get_kabupaten/'+prov, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#kabupaten').append('<option value="'+value.id+'">'+value.name_regencies+'</option>');
            })
        });
    }    
    function get_kec(kab)
    {
        jQuery('#kecamatan').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Worker/Resume/get_kecamatan/'+kab, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#kecamatan').append('<option value="'+value.id+'">'+value.name_districts+'</option>');
            })
        });
    } 
    function get_desa(kec)
    {
        jQuery('#desa').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Worker/Resume/get_desa/'+kec, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#desa').append('<option value="'+value.id+'">'+value.name_villages+'</option>');
            })
        });
    }      
    function delete_resume()
    {
        swal({
          title: "Hapus Resume",
          text: "Yakin ingin menghapus resume ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url() ?>Worker/Resume/delete_resume";

          }
        });       

    }

    function delete_user(id)
    {
        swal({
          title: "Hapus Pengguna",
          text: "Yakin ingin menghapus Pengguna ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url() ?>Admin/Data_user/delete_user/" + id;

          }
        });       

    }      

    function input_paket(id)
    {
        swal({
          title: "Beli Paket",
          text: "Sebelum membeli paket cek dulu paket sebelumnya, jika sebelumnya ada paket yang belum kadaluarsa maka paket sebelumnya akan hangus dan diganti paket ini",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url() ?>Owner/Paket/input_paket/" + id;

          }
        });       

    }     
    function delete_vacancy(id)
    {
        swal({
          title: "Hapus Lowongan Pekerjaan",
          text: "Yakin ingin menghapus Lowongan Pekerjaan ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url() ?>Owner/Vacancy/delete_vacancy/" + id;

          }
        });       

    } 
    function acc_payment(id)
    {
        swal({
          title: "Terima Pembayaran",
          text: "Yakin ingin menerima pembayaran ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url() ?>Admin/Accept_payment/accept_payment/" + id;

          }
        });       

    }
    function rej_payment(id)
    {
        swal({
          title: "Tolak Pembayaran",
          text: "Yakin ingin menolak pembayaran ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url() ?>Admin/Accept_payment/reject_payment/" + id;

          }
        });       

    }          
    function close_vacancy(id)
    {
        swal({
          title: "Tutup Lowongan Pekerjaan",
          text: "Yakin ingin Menutup Lowongan Pekerjaan ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = "<?php echo base_url() ?>Owner/Vacancy/close_vacancy/" + id;

          }
        });       

    }    

    function invite_worker(id)
    {
        jQuery('#id_login').empty();
        jQuery('#id_login').val(id);
          
    }    
     
    function upload_payment(id)
    {
        jQuery('#id_paket').empty();
        jQuery('#id_paket').val(id);           
    }  
    function daftar_lowongan(id)
    {
        jQuery('#id_vacancy').empty();
        jQuery('#id_vacancy').val(id);           
    }        
    function change_vacancy(id)
    {
        jQuery('#id_vacancy').empty();
        jQuery('#title').empty(); 
        jQuery('#description').empty();  
        jQuery('#closing_date').empty();
        jQuery('#req_exp').empty();
        jQuery('#skill').empty();
        jQuery('#req_qualification').empty();
        jQuery('#insentif').empty();
        jQuery('#work_time').empty();
        jQuery('#lokasi').empty();

        jQuery.getJSON('<?php echo base_url(); ?>Owner/Vacancy/get_vacancy_by_id/' + id, function(data){
            jQuery('#id_vacancy').val(data.id_vacancy);
            jQuery('#title').val(data.title);
            jQuery('#description').text(data.description);
            jQuery('#closing_date').val(data.closing_date);
            jQuery('#req_exp').text(data.req_exp);
            jQuery('#skill').text(data.skill);
            jQuery('#req_qualification').text(data.req_qualification);
            jQuery('#insentif').text(data.insentif);
            jQuery('#work_time').val(data.work_time);       
            jQuery('#lokasi').val(data.name_provinces + " , " + data.name_regencies + " , " + data.name_districts + " , " + data.name_villages);
            jQuery('#education option').filter(function () { return jQuery(this).val() == data.education }).attr('selected', true);
            jQuery('#category option').filter(function () { return jQuery(this).val() == data.category }).attr('selected', true);
            jQuery('#position option').filter(function () { return jQuery(this).val() == data.position }).attr('selected', true);
            jQuery('#salary option').filter(function () { return jQuery(this).val() == data.salary }).attr('selected', true);
            jQuery('#tipe_worker option').filter(function () { return jQuery(this).val() == data.tipe_worker }).attr('selected', true);            
        });
    } 
    function change_category(id)
    {
        jQuery('#id_category').empty();
        jQuery('#name_category').empty(); 

        jQuery.getJSON('<?php echo base_url(); ?>Admin/Data_Category/get_category_by_id/' + id, function(data){
            jQuery('#id_category').val(data.id_category);
            jQuery('#name_category').val(data.name_category);
           
        });
    }  
    function change_sector(id)
    {
        jQuery('#id_sector').empty();
        jQuery('#name_sector').empty(); 

        jQuery.getJSON('<?php echo base_url(); ?>Admin/Data_sector/get_sector_by_id/' + id, function(data){
            jQuery('#id_sector').val(data.id_sector);
            jQuery('#name_sector').val(data.name_sector);
           
        });
    } 
    function change_paket(id)
    {
        jQuery('#id_upgrade').empty();
        jQuery('#name_paket').empty(); 
        jQuery('#num_post').empty();
        jQuery('#length_post').empty(); 
        jQuery('#job_inv').empty();
        jQuery('#expired').empty(); 
        jQuery('#price').empty();
        jQuery.getJSON('<?php echo base_url(); ?>Admin/Data_paket/get_paket_by_id/' + id, function(data){
            jQuery('#id_upgrade').val(data.id_upgrade);
            jQuery('#name_paket').val(data.name_paket);
            jQuery('#num_post').val(data.num_post);
            jQuery('#length_post').val(data.length_post);
            jQuery('#job_inv').val(data.job_inv);
            jQuery('#expired').val(data.expired);
            jQuery('#price').val(data.price);
        });
    }                             
    jQuery(document).ready(function() {
        jQuery('.js-example-basic-single').select2();  
        jQuery('.js-example-basic-multiple').select2();
        jQuery('#bootstrap-data-table').DataTable();

    

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

     
</script>
</body>
</html>
