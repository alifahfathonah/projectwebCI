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
                        <h3 class="text-themecolor">Resume</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Resume</li>
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
                                <div class="mt-4 text-center"> <img src="<?php echo base_url(); ?>assets/admin/images/<?php echo $resume->picture ?>"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2"><?php echo $resume->name ?></h4>
                                    <h6 class="card-subtitle"><?php echo $resume->name_resume ?></h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link">
                                                <span class="font-medium"><?php echo $resume->gender ?></span>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link">
                                                <span class="font-medium"><?php echo $resume->birth_year ?></span>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> 
                                <h6><?php echo $resume->profile ?></h6>
                                <small class="text-muted">Status Pernikahan </small>
                                <h6><?php echo $resume->married ?></h6> 
                                <small class="text-muted pt-4 d-block">Lama Bekerja</small>
                                <h6><?php echo $resume->time_exp ?></h6>
                                <small class="text-muted pt-4 d-block">Pendidikan Terakhir</small>
                                <h6><?php echo $resume->last_education ?></h6>
                                <small class="text-muted pt-4 d-block">Alamat</small>
                                <h6><?php echo $resume->location." ,".$resume->name_districts." ,".$resume->name_regencies." ,".$resume->name_provinces ?></h6> 
                                <small class="text-muted pt-4 d-block">Riwayat Pendidikan</small>
                                <h6><?php echo $resume->history_education ?></h6>
                                <small class="text-muted pt-4 d-block">Keahlian</small>
                                <h6><?php echo $resume->skill ?></h6>
                                <small class="text-muted pt-4 d-block">Pengalaman Bekerja</small>
                                <h6><?php echo $resume->work_exp ?></h6>
                                <small class="text-muted pt-4 d-block">Kategori Minat</small>
                                <h6><?php
                                $category = $this->M_master->getResumeCategoryByResumeID($resume->id_resume);
                                foreach ($category as $k) {
                                    echo $this->M_master->getCategoryByID($k->id_category)->name_category.", ";
                                } ?></h6>
                                <small class="text-muted pt-4 d-block">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->



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
 