            <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pasang Iklan Lowongan Kerja</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Buat Lowongan Kerja</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('Owner/Vacancy/input_vacancy'); ?>" method="post" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <label class="control-label mb-1">Judul Lowongan <span style="color:red">*</span></label>
                                                <input name="title" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Deskripsi Pekerjaan <span style="color:red">*</span></label>
                                                <textarea name="description" id="description" rows="5"  class="form-control" required></textarea>
                                            </div>                                                   
                                            <div class="form-group">
                                                <label class="control-label mb-1">Tanggal penutupan lowongan kerja <span style="color:red">*</span></label>
                                                <input name="closing_date" type="date" class="form-control" required>
                                            </div>     
                                            <div class="form-group">
                                                <label class="control-label mb-1">Syarat Pendidikan <span style="color:red">*</span></label>
                                                <select name="education" id="education" class="form-control" required>
                                                    <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                                    <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                                    <option value="S1">S1 </option>
                                                    <option value="S2">S2 </option>
                                                    <option value="S3">S3 </option>
                                                                                       
                                                </select>
                                            </div>
                                        <div class="form-group" >
                                            <label class="control-label mb-1" >Kategori <span style="color:red">*</span></label>
                                            <select name="category" id="category"  class=" form-control js-example-basic-single" required>
                                            <option value="">-- Pilih Category --</option>
                                            <?php
                                                $no = 0;
                                                foreach ($data_category as $d) {
                                                    echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                                                }
                                            ?>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                                <label class="control-label mb-1">Tanggung Jawab Pekerjaan <span style="color:red">*</span></label>
                                                <textarea name="responsibility" id="responsibility" rows="5"  class="form-control" required></textarea>
                                            </div>                                          
                                            <div class="form-group">
                                                <label class="control-label mb-1">Syarat Pengalaman <span style="color:red">*</span></label>
                                                <textarea name="req_exp" id="req_exp" rows="5"  class="form-control" required></textarea>
                                            </div>                                             
                                            <div class="form-group">
                                                <label class="control-label mb-1">Keahlian <span style="color:red">*</span></label>
                                                <textarea name="skill" id="skill" rows="5"  class="form-control" required></textarea>
                                            </div>   
                                            <div class="form-group">
                                                <label class="control-label mb-1">Kualifikasi <span style="color:red">*</span></label>
                                                <textarea name="req_qualification" id="req_qualification" rows="5"  class="form-control" required></textarea>
                                            </div>    
                                            <div class="form-group">
                                                <label class="control-label mb-1">Tunjangan <span style="color:red">*</span></label>
                                                <textarea name="insentif" id="insentif" rows="5"  class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Level Posisi Pekerjaan <span style="color:red">*</span></label>
                                                <select name="position" id="position" class="form-control" required>
                                                    <option value="Manager / CEO">GM / CEO</option>
                                                    <option value="Fresh Graduate">Fresh Graduate</option>
                                                    <option value="Manager / Ass Manager">Manager / Ass Manager </option>
                                                    <option value="Staff">Staff</option>
                                                    <option value="Supervisor / Koordinator">Supervisor / Koordinator</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Gaji <span style="color:red">*</span></label>
                                                <select name="salary" id="salary" class="form-control" required>
                                                    <option value=" > 10jt"> > 10jt</option>
                                                    <option value="5 - 10 jt">5 - 10 jt</option>
                                                    <option value="2 - 5 jt">2 - 5 jt</option>
                                                    <option value="1 - 2 jt">1 - 2 jt</option>
                                                    <option value="Negosiasi">Negosiasi</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Waktu Bekerja <span style="color:red">*</span></label>
                                                <input name="work_time" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Tipe Pekerjaan <span style="color:red">*</span></label>
                                                <select name="tipe_worker" id="tipe_worker" class="form-control" required>
                                                    <option value="Freelance">Freelance</option>
                                                    <option value="Tetap">Tetap</option>
                                                    <option value="Kontrak">Kontrak</option>
                                                    <option value="Paruh Waktu">Paruh Waktu</option>
                                                    <option value="Magang">Magang</option>
                                                </select>
                                            </div>
                                    <div class="row">
                                        <div class="form-group col-lg-3 col-md-6">
                                            <label class="control-label mb-1">Provinsi <span style="color:red">*</span></label>
                                            <select name="provinsi" id="provinsi" class=" form-control js-example-basic-single" onchange="get_kab(this.value)" required>
                                            <option value="">-- Pilih Provinsi --</option>

                                            <?php
                                                $no = 0;
                                                foreach ($data_prov as $d) {
                                                    echo '<option value="'.$d->id.'">'.$d->name_provinces.'</option>' ; 
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-6">
                                            <label class="control-label mb-1">Kabupaten / Kota <span style="color:red">*</span></label>
                                            <select name="kabupaten" id="kabupaten" class="form-control js-example-basic-single" onchange="get_kec(this.value)" required> 
                                                 <option value="">-- Pilih Kabupaten --</option>
                                            </select>
                                        </div> 
                                        <div class="form-group col-lg-3 col-md-6">
                                            <label class="control-label mb-1">Kecamatan</label>
                                            <select name="kecamatan" id="kecamatan" class="form-control js-example-basic-single" onchange="get_desa(this.value)" >
                                                 <option value="">-- Pilih Kecamatan --</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-6">
                                            <label class="control-label mb-1">Kelurahan / Desa</label>
                                            <select name="desa" id="desa" class="form-control js-example-basic-single" >
                                                 <option value="">-- Pilih Desa --</option>
                                            </select>
                                        </div>
                                        <?php if ($this->M_master->getPaketByIDLogin($this->session->userdata('id_login'))->kuota_premium != 0 && $this->M_master->getPaketByIDLogin($this->session->userdata('id_login'))->kuota_premium != Null) { ?>
                                        <div class="form-group col-lg-3 col-md-6">
                                            <label class="control-label mb-1">Jadikan Iklan Premium </label>
                                            <input name="premium" value="1" type="checkbox">
                                        </div> <br>
                                    <?php } ?>                           
                                    </div>  
                                    <div class="col-md-4">
                                               <input class="btn btn-lg btn-info btn-block" type="submit" name="submit" value="Simpan">
                                            </div>      
                                </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                            </div>
                        </div> <!-- .card -->
                    </div><!--/.col-->
        </div><!-- .animated -->
    </div><!-- .content -->        
    <script>

</script>