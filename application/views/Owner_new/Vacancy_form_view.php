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
                        <h3 class="text-themecolor">Buat Berita</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Buat Berita</li>
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
                                            <label class="control-label col-md-3">Judul Lowongan<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="title" placeholder="Contoh: Web Progammer" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Deskripsi Pekerjaan<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="description" type="text" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Tanggal Penutupan Lowongan<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="date" name="closing_date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Syarat Pendidikan <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="education" required>
                                                    <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                                    <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                                    <option value="S1">Sarjana/ S1 </option>
                                                    <option value="S2">Master/ S2 </option>
                                                    <option value="S3">Doctor / S3 </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row last">
                                            <label class="control-label col-md-3">Kategori Pekerjaan <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select name="category" class="form-control js-example-basic-multiple custom-select" required>
                                                   <?php
                                                        foreach ($data_category as $d) {
                                                            echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Syarat Pengalaman<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="req_exp" type="text" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Keahlian<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="req_exp" type="text" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Kualifikasi<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="req_qualification" type="text" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Tunjangan<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea rows="6" name="insentif" type="text" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Level Posisi Pekerjaan<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="position" required>
                                                    <option value="Manager / CEO">GM / CEO</option>
                                                    <option value="Fresh Graduate">Fresh Graduate</option>
                                                    <option value="Manager / Ass Manager">Manager / Ass Manager </option>
                                                    <option value="Staff">Staff</option>
                                                    <option value="Supervisor / Koordinator">Supervisor / Koordinator</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Gaji<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="salary" required>
                                                   <option value=" > 10jt"> > 10jt</option>
                                                    <option value="5 - 10 jt">5 - 10 jt</option>
                                                    <option value="2 - 5 jt">2 - 5 jt</option>
                                                    <option value="1 - 2 jt">1 - 2 jt</option>
                                                    <option value="Negosiasi">Negosiasi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Waktu Bekerja<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="date" name="work_time" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Tipe Pekerjaan<span class="text-danger">*</span></label>
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
                                        <div class="form-group row last">
                                            <label class="control-label col-md-3">Pengalaman Bekerja </label>
                                            <div class="col-md-9">
                                                <textarea name="work_exp" rows="6"  type="text" class="form-control"></textarea>
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
 