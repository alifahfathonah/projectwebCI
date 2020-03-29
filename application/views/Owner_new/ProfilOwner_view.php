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
                        <h3 class="text-themecolor">Edit Profil</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Profil</li>
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
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Informasi Perusahaan</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Nama Perusahaan</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data_profil->name ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Bergerak dibidang</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select">
                                                    <option><?php echo $this->M_profile->getSectorByID($data_profil->sector)->name_sector
                                                     ?></option>
                                                    <?php foreach ($data_sector as $ds) { ?>
                                                        <option value="<?php echo $ds->id_sector ?>"><?php echo $ds->name_sector ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Deskripsi Perusahaan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $data_profil->description ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Jumlah Karyawan</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select">
                                                    <option value="<?php echo $data_profil->num_employer ?>"><?php echo $data_profil->num_employer ?></option>
                                                    <option value="0 - 10">0 - 10</option>
                                                    <option value="10 - 50">10 - 50</option>
                                                    <option value="50 - 100">50 - 100</option>
                                                    <option value="100 - 1000">100 - 1000</option>
                                                    <option value="Lebih dari 1000">Lebih dari 1000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">No Telp Kantor</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data_profil->phone ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="web" class="col-sm-3 text-right control-label">Website</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-world"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="web"
                                                    value="<?php echo $data_profil->website ?>">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Foto Profil Perusahaan</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" placeholder="">
                                                <img class="align-self-center mr-3" style="margin-top : 3% ;width:85px; height:85px;" alt="" src="<?php echo base_url(); ?>assets/admin/images/<?php echo $data_profil->picture ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Alamat 1 Perusahaan</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data_profil->address1 ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Alamat 2 Perusahaan</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data_profil->address2 ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Kota</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data_profil->city ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Provinsi</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Kode Pos</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data_profil->postcode ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="twitter" class="col-sm-3 text-right control-label">Twitter</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="fab fa-twitter"></i>
                                                    </span>
                                                </div>
                                                <input type="text" value="<?php echo $data_profil->twitter ?>" class="form-control" id="twitter"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label for="facebook" class="col-sm-3 text-right control-label">Facebook</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-world"></i>
                                                    </span>
                                                </div>
                                                <input type="text" value="<?php echo $data_profil->facebook ?>" class="form-control" id="facebook"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success"> <i
                                                                class="fa fa-check"></i> Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Ubah Password</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Password Lama</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Password Baru</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row last">
                                            <label class="control-label text-right col-md-3">Verifikasi Password</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success"> <i
                                                                class="fa fa-check"></i> Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
 