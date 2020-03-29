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
                        <h3 class="text-themecolor">Pencarian Kandidat</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Cari Kandidat</li>
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
                                <h4 class="card-title">Temukan Kandidat Terbaikmu</h4>
                                <h6 class="card-subtitle">
                                    <code></code></h6>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Pilih Kategori</h5>
                                        <select class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <?php foreach ($data_category as $d) { ?>
                                                <option value="<?php echo $d->id_category ?>"><?php echo $d->name_category ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Lokasi</h5>
                                        <select class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <?php foreach ($data_kab as $d) { ?>
                                                <option value="<?php echo $d->id ?>"><?php echo $d->name_regencies ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mt-4 mb-2">Pendidikan</h5>
                                        <select class="select2" data-style="form-control btn-secondary" style="width: 100%">
                                            <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                            <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                            <option value="S1">S1 </option>
                                            <option value="S2">S2 </option>
                                            <option value="S3">S3 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-sm-12 col-xs-12">
                                    <form class="input-form">
                                        <label class="control-label mt-3" for="example-input1-group2"></label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for candidate">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-info" type="button">Go!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- form-group -->
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
  <!-- ============================================================== -->
   