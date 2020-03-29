<!DOCTYPE html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal Kerja</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/admin/css/cs-skin-elastic.css">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/admin/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
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
<body>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card ">
                            <div class="card-header bg-danger">
                                <strong class="card-title text-light"><?php echo $get_vacancy_by_id->title ;  ?></strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Nama Perusahaan : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->name ;  ?></p></div>                                  
                                </div>  
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Lowongan Posisi : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->position ;  ?></p></div>                                  
                                </div>                                                            
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Deskripsi Lowongan : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->description ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Lowongan Dibuka : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->closing_date ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Lowongan Ditutup : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->open_date ;  ?></p></div>                                  
                                </div> 
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Syarat Pendidikan : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->education ;  ?></p></div>                                  
                                </div>                                                                              
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>No. Hp : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->phone ;  ?></p></div>                                  
                                </div>      
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Alamat : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->name_provinces ;  ?>, <?php echo $get_vacancy_by_id->name_regencies ;  ?> ,<?php echo $get_vacancy_by_id->name_districts ;  ?> , <?php echo $get_vacancy_by_id->name_villages ;  ?>, <?php echo $get_vacancy_by_id->location ;  ?></p></div>                                  
                                </div>                                                                                                                                                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" >
                        <div class="card" style="height: 400px">

                            <div class="card-body">
                            <img class="card-img-top" src="<?php echo base_url() ; ?>assets/admin/images/<?php echo $get_vacancy_by_id->picture ; ?>" alt="Card image cap" style="height: 350px">

                            </div>
                        </div>
                    </div>
                   <!--  <div class="col-md-2" >
                         <a type="button" class="btn btn-success" data-toggle="modal" data-target="#login" style="color : white ;" href="#"> Daftar Lowongan </a>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Status Lowongan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->status ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <strong class="card-title text-light">Tipe Pekerja</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->tipe_worker ;  ?></p>                                        
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <strong class="card-title text-light">Kategori Lowongan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->name_category ;  ?></p>                                        
                            </div>
                        </div>
                    </div>                    

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-success">
                                <strong class="card-title text-light">Tanggung Jawab Pekerjaan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->responsibility ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Pengalaman Kerja yg Dibutuhkan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->req_exp ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <strong class="card-title text-light">Keahlian</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->skill ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>  

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <strong class="card-title text-light">Tambahan Insentif</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->insentif ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <strong class="card-title text-light">Waktu Bekerja</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->work_time ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>   

               </div>
           </div>


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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/admin/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


</body>
</html>