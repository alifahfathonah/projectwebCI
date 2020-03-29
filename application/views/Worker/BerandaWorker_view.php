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
                                    <?php
                                        if($this->session->userdata('status_resume') != NULL)
                                        {
                                            if($this->session->userdata('status_resume') == "1"){
                                                echo '                                    
                                                    <div class="stat-icon dib flat-color-3">
                                                        <i class="menu-icon fa fa-book  "></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Membuat Resume</div>
                                                            <div class="stat-heading">sudah membuat resume</div>                                            
                                                        </div>
                                                    </div>
                                                ' ;
                                            }else{
                                                echo '                                    
                                                    <div class="stat-icon dib flat-color-4">
                                                        <i class="menu-icon fa fa-book  "></i>
                                                    </div>
                                                    <div class="stat-content">
                                                        <div class="text-left dib">
                                                            <div class="stat-text">Membuat Resume</div>
                                                            <div class="stat-heading">belum membuat resume</div>                                            
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
                    <?php 
                        if($this->session->userdata('name') != NULL){
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
                                                            <div class="stat-text">Login Sebagai Pekerja</div>
                                                            <div class="stat-heading">'.$this->session->userdata('name')    .'</div>                                            
                                                        </div>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                            ' ;
                        }    

                        ?>                    

                </div>
        </div><!-- .animated -->
    </div><!-- .content -->        

