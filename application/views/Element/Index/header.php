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
                                    <a href="'.base_url().'Worker/Dashboard_worker"><i class="menu-icon fa fa-dashboard"></i>Beranda </a>
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
                                    <a href="'.base_url().'Worker/Dashboard_worker"><i class="menu-icon fa fa-dashboard"></i>Beranda </a>
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
                            <a href="'.base_url().'Owner/Dashboard_owner"><i class="menu-icon fa fa-dashboard"></i>Beranda </a>
                                </li> 
                                <li class="menu-item-has-children dropdown'; if($this->uri->segment(2) == 'Paket'){echo ' active' ; }echo'">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-ticket"></i>Paket</a>
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
                                    <a href="'.base_url().'Admin/Data_Category"><i class="menu-icon fa fa-circle"></i>Data Category </a>
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
                    <a class="navbar-brand" href="./"><strong>Portal Kerja</strong></a>
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
                                $sql ="SELECT * FROM apllied_vacancy INNER JOIN vacancy ON apllied_vacancy.id_vacancy=vacancy.id_vacancy INNER JOIN login ON apllied_vacancy.id_login=login.id_login WHERE read_worker = 1  AND login.id_login=apllied_vacancy.id_login";
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