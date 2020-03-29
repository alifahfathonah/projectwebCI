        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Buat Resume</h1>
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
                            <strong class="card-title">Buat Resume Online</strong>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('Worker/Resume/input_resume'); ?>" method="post">  
                            <div class="form-group">
                                <label class="control-label mb-1">Judul Resume <span style="color:red">*</span></label>
                                <input name="name_resume" id="name" type="text" class="form-control" required>                           
                            </div>                                                        
                            <div class="form-group">
                                <label class="control-label mb-1">Ringkasan Profile <span style="color:red">*</span></label>
                                <textarea name="profile" id="profile" rows="5"  class="form-control" required></textarea>
                            </div>                            
                            <div class="form-group">
                                <label class="control-label mb-1">Kelamin <span style="color:red">*</span></label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="Laki-laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label class="control-label mb-1">Tahun Kelahiran <span style="color:red">*</span></label>
                                <select name="birth_year" id="birth_year" class="form-control js-example-basic-single" required>
                                    <option value="">-- Pilih Tahun Kelahiran --</option>
                                    <?php  
                                        for($i = 1970 ; $i < 2030 ; $i++){
                                            echo '<option value="'.$i.'">'.$i.'</option>' ;                                            
                                        }
                                    ?>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label class="control-label mb-1">Status pernikahan <span style="color:red">*</span></label>
                                <select name="married" id="married" class="form-control" required>
                                    <option value="belum menikah">Belum Menikah</option>                     
                                    <option value="menikah">Menikah</option>
                                    <option value="cerai">Cerai</option>
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
                                    <select name="kabupaten" id="kabupaten" class="form-control js-example-basic-single" onchange="get_kec(this.value)">
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
                                    <select name="desa" id="desa" class="form-control js-example-basic-single" required>
                                         <option value="">-- Pilih Desa --</option>
                                    </select>
                                </div>                                                                                                    
                            </div> 
                            <div class="form-group">
                                <label class="control-label mb-1">Alamat <span style="color:red">*</span></label>
                                    <textarea name="location" id="location" rows="3"  class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                            <label class="control-label mb-1">Pendidikan Terakhir <span style="color:red">*</span></label>

                                <select name="last_education" id="last_education" class="form-control" required>
                                    <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                    <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                    <option value="S1">S1 </option>
                                    <option value="S2">S2 </option>
                                    <option value="S3">S3 </option>
                                                                       
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Riwayat Pendidikan <span style="color:red">*</span></label>
                                    <textarea name="history_education" id="history_education" rows="3"  class="form-control" required></textarea>
                            </div> 
                            <div class="form-group">
                                <label class="control-label mb-1">Keahlian <span style="color:red">*</span></label>
                                        <textarea name="skill" id="skill" rows="3"  class="form-control" required></textarea>
                            </div>                                                                                  
                            <div class="form-group">
                                <label class="control-label mb-1" >Lama Bekerja <span style="color:red">*</span></label>
                                <select name="time_exp" id="time_exp" class="form-control" required>
                                    <option value="Fresh Grauate">Fresh Graduate</option>
                                    <option value=" < 1 Tahun"> < 1 Tahun</option>
                                    <option value=" 1 - 2 Tahun"> 1 - 2 Tahun</option>
                                    <option value=" 2 - 5 Tahun"> 2 - 5 Tahun</option>
                                    <option value=" 5 - 10 Tahun"> 5 - 10 Tahun</option>
                                    <option value=" > 10 Tahun"> > 10 Tahun</option>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label class="control-label mb-1" required>Pengalama Bekerja </label>
                                    <textarea name="work_exp" id="work_exp" rows="3"  class="form-control" ></textarea>
                            </div>                                                                            
                            <div class="form-group">
                                <label class="control-label mb-1" required>Kategori Pekerjaan <span style="color:red">*</span></label>
                                <select class="form-control js-example-basic-multiple" name="work_category[]" multiple="multiple" placeholder="Pili Kategori" required>

                                    <?php
                                        $no = 0;
                                        foreach ($data_category as $d) {
                                            echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                                        }
                                    ?>
                            </select>
                            </div>
                            <div class="col-md-4">
                               <input class="btn btn-lg btn-info btn-block" type="submit" name="submit" value="Simpan">
                              </form>              
                            </div>                         
                    </div>
                </div>

                    </div><!--/.col-->
        </div><!-- .animated -->
    </div><!-- .content -->        
