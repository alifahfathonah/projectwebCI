        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- dashboard -->
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor">Pencarian Lowongan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Cari Lowongan</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                        <div class="d-flex mt-2 justify-content-end">
                            <div class="d-flex mr-3 ml-2">
                                
                            </div>
                            <div class="d-flex mr-3 ml-2">
                                
                            </div>
                            <div class="">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- content -->
                <!-- Row -->
               <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Temukan Pekerjaan Impianmu</h4>
                                <h6 class="card-subtitle">
                                    <code></code></h6>
                        <form action="<?php echo base_url() ; ?>Worker_new/Search_vacancy/get_vacancy_by_search" method="post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Pilih Kategori</h5>
                                        <select name="category" class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <option value=""></option>
                                            <?php foreach ($data_category as $d) { ?>
                                                <option value="<?php echo $d->id_category ?>"><?php echo $d->name_category ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Lokasi</h5>
                                        <select name="kabupaten" class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <option></option>
                                            <?php foreach ($data_kab as $d) { ?>
                                                <option value="<?php echo $d->id ?>"><?php echo $d->name_regencies ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Pendidikan</h5>
                                        <select name="education" class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <option value=""></option>
                                            <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                            <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                            <option value="S1">Sarjana/S1 </option>
                                            <option value="S2">Master/S2 </option>
                                            <option value="S3">Doctor/S3 </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Pilih Tipe Pekerjaan</h5>
                                        <select name="tipe_worker" class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <option value=""></option>
                                            <option value="Freelance">Freelance</option>
                                            <option value="Tetap">Tetap</option>
                                            <option value="Kontrak">Kontrak</option>
                                            <option value="Paruh Waktu">Paruh Waktu</option>
                                            <option value="Magang">Magang</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Gaji</h5>
                                        <select name="salary" class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <option value=""></option>
                                             <option value=" > 10jt"> > 10jt</option>
                                             <option value="5 - 10 jt">5 - 10 jt</option>
                                             <option value="2 - 5 jt">2 - 5 jt</option>
                                             <option value="1 - 2 jt">1 - 2 jt</option>
                                             <option value="Negosiasi">Negosiasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-sm-12 col-xs-12">
                                    <div class="input-form">
                                        <label class="control-label mt-3" for="example-input1-group2"></label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for job">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-info" type="submit">Go!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- form-group -->
                                    </div>
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

                <!-- Row -->
                <div class="row">
                    <?php 
                    $id_login = $this->session->userdata('id_login') ;
                    foreach ($data_vacancy as $d) {
                        $sql ="SELECT * FROM bookmark WHERE id_login=$id_login AND id_vacancy=$d->id_vacancy ";
                        $query = $this->db->query($sql);
                        $sql2 ="SELECT * FROM apllied_vacancy WHERE id_login=$id_login AND id_vacancy=$d->id_vacancy ";
                        $query2 = $this->db->query($sql2);
                    ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $d->title ?></h3>
                                 <img height="150px" class="card-img-top" src="<?php echo base_url(); ?>assets/admin/images/<?php echo $d->picture ?>" alt="Card image cap">
                                 <span class="sub-title d-block mb-1" style="font-size: 15px"><b><?php echo $d->name ?></b></span>
                                <p class="card-text">
                                    <p style="font-color: grey"><i class="fas fa-map-marker-alt"></i> <?php echo $this->M_master->getProvincesByID($d->id_provinsi)->name_provinces ?> - <?php echo $d->name_regencies ?></p>
                                    <p style="margin-top: -12px"><i class="fas fa-graduation-cap"></i> <?php echo $d->education ?></p>
                                    <p style="margin-top: -12px"><i class="fas fa-dollar-sign"></i> <?php echo $d->salary ?></p>
                                    <p style="margin-top: -12px" align="justify">
                                        <?php echo $d->vacancydescription ?>
                                    </p>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a target="_blank" href="<?php echo base_url(); ?>Worker_new/Search_vacancy/get_vacancy_by_id/<?php echo $d->id_vacancy ?>" class="btn btn-success">Selengkapnya</a>
                                 <?php  if($query->num_rows() == 0){ ?>
                                    <a href="<?php echo base_url(); ?>Worker_new/Bookmark/input_bookmark/<?php echo $d->id_vacancy ?>" class="btn btn-danger" disabled><i class="fas fa-star"></i> Bookmark</a>
                                <?php } else { ?>
                                    <a href="#"><button class="btn btn-danger" disabled><i class="fas fa-star"></i> Bookmark</button></a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <!-- End Row -->

                <div class="tengah">
                    <?php  echo $pagination ;  ?>     
                </div>
    <!-- ============================================================== -->
                <!-- End PAge Content -->


                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div> 
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
  <!-- ============================================================== -->
   