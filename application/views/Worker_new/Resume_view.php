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
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Resume Anda</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('Worker_new/Resume/input_resume'); ?>" class="form-horizontal form-bordered" method="post">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Judul Resume<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="name_resume" placeholder="Contoh: Web Progammer" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Ringkasan Profile<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="profile" type="text" class="form-control" required></textarea>
                                                <small class="form-control-feedback"> Promosikan diri anda dengan singkat jelas dan padat. Untuk menjaga privasi anda jangan menampilkan info sensitif seperti no hp/telp, alamat email pada bidang ini. </small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Gender<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="gender" required>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Tahun Kelahiran<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="select2 form-control custom-select" name="birth_year" required>
                                                        <?php  
                                                            for($i = 1970 ; $i < 2030 ; $i++){
                                                                echo '<option value="'.$i.'">'.$i.'</option>' ;                                            
                                                            }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Status Pernikahan<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="married" required>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Cerai">Cerai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- provinsi kab dll -->
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-3">
                                                <label class="control-label">Provinsi<span class="text-danger">*</span></label>
                                                <select class="select2 form-control custom-select" id="provinsi" name="provinsi" onchange="get_kab(this.value)" required>
                                                    <option value=""></option>
                                                    <?php
                                                        $no = 0;
                                                        foreach ($data_prov as $d) {
                                                            echo '<option value="'.$d->id.'">'.$d->name_provinces.'</option>' ; 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-3">
                                                <label class="control-label">Kabupaten/Kota<span class="text-danger">*</span></label>
                                                <select class="select2 form-control custom-select" id="kabupaten" name="kabupaten" onchange="get_kec(this.value)" required>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-3">
                                                <label class="control-label">Kecamatan</label>
                                                <select class="select2 form-control custom-select" id="kecamatan" name="kecamatan" onchange="get_desa(this.value)">
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-lg-3">
                                                <label class="control-label">Kelurahan / Desa</label>
                                                <select id="desa" name="desa" class="select2 form-control custom-select">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Alamat <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="location" type="text" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Pendidikan Terakhir <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="last_education" required>
                                                    <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                                    <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                                    <option value="S1">Sarjana/ S1 </option>
                                                    <option value="S2">Master/ S2 </option>
                                                    <option value="S3">Doctor / S3 </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Riwayat Pendidikan <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6"  type="text" name="history_education" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Keahlian <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="skill"  type="text" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Lama Bekerja <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select name="time_exp" class="select2 form-control custom-select" required>
                                                    <option value=""></option>
                                                    <option value=" < 1 Tahun"> Kurang dari 1 Tahun</option>
                                                    <option value=" 1 - 2 Tahun"> 1 - 2 Tahun</option>
                                                    <option value=" 2 - 5 Tahun"> 2 - 5 Tahun</option>
                                                    <option value=" 5 - 10 Tahun"> 5 - 10 Tahun</option>
                                                    <option value=" > 10 Tahun"> Lebih dari 10 Tahun</option>
                                                    <option value="Fresh Graduate">Fresh Graduate</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Pengalaman Bekerja </label>
                                            <div class="col-md-9">
                                                <textarea name="work_exp" rows="6"  type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row last">
                                            <label class="control-label col-md-3">Kategori Pekerjaan <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select multiple="multiple" name="work_category[]" class="form-control js-example-basic-multiple custom-select" required>
                                                   <?php
                                                        foreach ($data_category as $d) {
                                                            echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                                                        }
                                                    ?>
                                                </select>
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
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
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
 