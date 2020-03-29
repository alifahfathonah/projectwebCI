        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Beranda</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <?php
                                        if($this->session->userdata('status_email_ver') != NULL)
                                        {
                                            if($this->session->userdata('status_email_ver') == "1"){
                                                echo '                                    
                                                <div class="stat-icon dib flat-color-3">
                                                    <i class="menu-icon fa fa-envelope"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text">Verifikasi Email</div>
                                                        <div class="stat-heading">sudah terverifikasi</div>                                            
                                                    </div>
                                                </div>
                                                ' ;
                                            }else{
                                                echo '                                    
                                                <div class="stat-icon dib flat-color-4">
                                                    <i class="menu-icon fa fa-envelope"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text">Verifikasi Email</div>
                                                        <div class="stat-heading">belum terverifikasi</div>                                            
                                                    </div>
                                                </div>
                                                ' ;

                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <?php
                                        if($this->session->userdata('status_profile') != NULL)
                                        {
                                            if($this->session->userdata('status_profile') == "1"){
                                                echo '                                    
                                                    <div class="stat-icon dib flat-color-3">
                                                        <i class="menu-icon fa fa-user"></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Melengkapi Profile</div>
                                                            <div class="stat-heading">profile sudah lengkap</div>                                            
                                                        </div>
                                                    </div>
                                                ' ;
                                            }else{
                                                echo '                                    
                                                    <div class="stat-icon dib flat-color-4">
                                                        <i class="menu-icon fa fa-user"></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Melengkapi Profile</div>
                                                            <div class="stat-heading">profile belum lengkap</div>                                            
                                                        </div>
                                                    </div>
                                                ' ;

                                            }
                                        }
                                    ?>     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="menu-icon fa fa-bell"></i>
                                    </div>

                                    <?php
                                        if($this->session->userdata('status_vacancy') != NULL)
                                        {
                                            if($this->session->userdata('status_vacancy') == "1"){
                                                echo '                                    
                                                    <div class="stat-icon dib flat-color-3">
                                                        <i class="menu-icon fa fa-bell"></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Pasang Iklan</div>
                                                             <div class="stat-heading">sudah Pasang Iklan</div>
                                                        </div>
                                                    </div>
                                                ' ;
                                            }else{
                                                echo '                                    
                                                    <div class="stat-icon dib flat-color-4">
                                                        <i class="menu-icon fa fa-bell"></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Pasang Iklan</div>
                                                             <div class="stat-heading">belum Pasang Iklan</div>
                                                        </div>
                                                    </div>
                                                ' ;

                                            }
                                        }
                                    ?>                                         
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                                    <div class="stat-icon dib flat-color-1">
                                                        <i class="menu-icon fa fa-user"></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Login Sebagai Perusahaan</div>
                                                            <div class="stat-heading"><?php 
                                                                if ($this->session->userdata('name') != NULL) {
                                                                    echo $this->session->userdata('name');
                                                                }
                                                             ?>
                                                                 
                                                             </div>                                            
                                                        </div>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <?php 
                        /*if($this->session->userdata('name') != NULL){
                            echo '
                        <div class="col-lg-5 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                                    <div class="stat-icon dib flat-color-1">
                                                        <i class="menu-icon fa fa-user"></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Login Sebagai Perusahaan</div>
                                                            <div class="stat-heading">'.$this->session->userdata('name')    .'</div>                                            
                                                        </div>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                            ' ;
                        }          */          
                        if($data_paket->name_paket != NULL){
                            echo '
                                <div class="col-lg-7 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-five">
                                                            <div class="stat-icon dib flat-color-1">
                                                                <i class="menu-icon fa fa-ticket"></i>
                                                            </div>
                                                            <div class="stat-content">
                                                                <div class="text-left dib">
                                                                    <div class="stat-text">Paket Anda</div>
                                                                    <div class="stat-heading">'.$data_paket->name_paket.'</div> 
                                                                    <p></p>                                           
                                                                </div>
                                                            </div>
                                            </div>
                                                <p><b>Maksimal Posting Lowongan Pekerjaan :</b>'.$data_paket->num_post.'<br>
                                                <b>Maksimal Durasi Waktu :</b>'.$data_paket->length_post.'<br>
                                                <b>Maksimal Tawaran Pekerjaan :</b>'.$data_paket->job_inv.'<br>
                                                <b>Tanggal Kadaluarsa Paket :</b>'.$data_paket->date_expired_date.'<br>
                                        </div>
                                    </div>
                            </div>

                            ' ;
                        }
                    ?>

        </div><!-- .animated -->
    </div><!-- .content -->        
