        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Ubah Resume</h1>
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
                            <strong class="card-title">Ubah Resume Online</strong>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('Worker/Resume/edit_resume'); ?>" method="post">
                            <div class="form-group">
                                    <input name="id_resume" type="hidden" class="form-control" value="<?php echo $data_resume->id_resume ?>">
                            </div>                             
                            <div class="form-group">
                                <label class="control-label mb-1">Judul Resume</label>
                                    <input name="name_resume" type="text" class="form-control" value="<?php echo $data_resume->name_resume ?>">
                            </div>                               
                            <div class="form-group">
                                <label class="control-label mb-1">Ringkasan Profile</label>
                                <textarea name="profile" id="profile" rows="5"  class="form-control"><?php echo $data_resume->profile ?></textarea>
                            </div>                            
                            <div class="form-group">
                                <label class="control-label mb-1">Kelamin</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Laki-laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label class="control-label mb-1">Tahun Kelahiran</label>
                                <select name="birth_year" id="birth_year" class="form-control js-example-basic-single" style="width: 100%">
                                    <option value="">-- Pilih Tahun Kelahiran --</option>
                                    <?php  
                                        for($i = 1970 ; $i < 2030 ; $i++){
                                            echo '<option value="'.$i.'">'.$i.'</option>' ;                                            
                                        }
                                    ?>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label class="control-label mb-1">Status pernikahan</label>
                                <select name="married" id="married" class="form-control">
                                    <option value="belum menikah">belum menikah</option>                     
                                    <option value="menikah">menikah</option>
                                    <option value="cerai">cerai</option>
                                </select>
                            </div> 
                            <div class="row">
                                <div class="form-group col-lg-3 col-md-6">
                                    <label class="control-label mb-1">Provinsi</label>
                                    <input  type="text" class="form-control" value="<?php echo $data_resume->name_provinces ?>" readonly>
                                    <input name="provinsi" type="hidden" class="form-control" value="<?php echo $data_resume->province_id ?>" >
                                </div>
                                <div class="form-group col-lg-3 col-md-6">
                                    <label class="control-label mb-1">Kabupaten</label>
                                    <input  type="text" class="form-control" value="<?php echo $data_resume->name_regencies ?>" readonly>
                                    <input name="kabupaten" type="hidden" class="form-control" value="<?php echo $data_resume->regency_id ?>" >

                                    </select>
                                </div> 
                                <div class="form-group col-lg-3 col-md-6">
                                    <label class="control-label mb-1">Kecamatan</label>
                                    <input  type="text" class="form-control" value="<?php echo $data_resume->name_districts ?>" readonly>
                                    <input name="kecamatan" type="hidden" class="form-control" value="<?php echo $data_resume->district_id ?>" >

                                </div>
                                <div class="form-group col-lg-3 col-md-6">
                                    <label class="control-label mb-1">Kelurahan / Desa</label>
                                    <input  type="text" class="form-control" value="<?php echo $data_resume->name_villages ?>" readonly>
                                    <input name="desa" type="hidden" class="form-control" value="<?php echo $data_resume->id ?>" >

                                </div>                                                                                                    
                            </div> 
                            <div class="form-group">
                                <label class="control-label mb-1">Alamat</label>
                                    <textarea name="location" id="location" rows="3"  class="form-control"><?php echo $data_resume->location ?></textarea>
                            </div>
                            <div class="form-group">
                                <select name="last_education" id="last_education" class="form-control">
                                    <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                    <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                    <option value="S1">S1 </option>
                                    <option value="S2">S2 </option>
                                    <option value="S3">S3 </option>
                                                                       
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Riwayat Pendidikan</label>
                                    <textarea name="history_education" id="history_education" rows="3"  class="form-control"><?php echo $data_resume->history_education ?></textarea>
                            </div> 
                            <div class="form-group">
                                <label class="control-label mb-1">Keahlian</label>
                                        <textarea name="skill" id="skill" rows="3"  class="form-control"><?php echo $data_resume->skill ?></textarea>
                            </div>                                                                                  
                            <div class="form-group">
                                <label class="control-label mb-1">Lama Bekerja</label>
                                <select name="time_exp" id="time_exp" class="form-control">
                                    <option value="Fresh Grauate">Fresh Grauate</option>
                                    <option value=" < 1 Tahun"> < 1 Tahun</option>
                                    <option value=" 1 - 2 Tahun"> 1 - 2 Tahun</option>
                                    <option value=" 2 - 5 Tahun"> 2 - 5 Tahun</option>
                                    <option value=" 5 - 10 Tahun"> 5 - 10 Tahun</option>
                                    <option value=" > 10 Tahun"> > 10 Tahun</option>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label class="control-label mb-1">Pengalama Bekerja</label>
                                    <textarea name="work_exp" id="work_exp" rows="3"  class="form-control"><?php echo $data_resume->work_exp ?></textarea>
                            </div>    
                           <div class="form-group">
                                <label class="control-label mb-1">Kategori Pekerjaan</label>
                                <select id="work_category" class="form-control js-example-basic-multiple" name="work_category[]" multiple="multiple" placeholder="Pili Kategori" style="width: 100%">

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
    <script>
    jQuery(document).ready(function() {
         birth_year = <?php echo $data_resume->birth_year ; ?> ;
         gender = "<?php echo $data_resume->gender ; ?>"  ;
         married = '<?php echo $data_resume->married ; ?>'  ;
         last_education = "<?php echo $data_resume->last_education ; ?>"  ;
         time_exp = "<?php echo $data_resume->time_exp ; ?>"  ;

        jQuery('#birth_year option').filter(function () { return jQuery(this).val() == birth_year }).attr('selected', true);
        jQuery('#gender option').filter(function () { return jQuery(this).val() == gender }).attr('selected', true);  
        jQuery('#married option').filter(function () { return jQuery(this).val() == married }).attr('selected', true);     
        jQuery('#last_education option').filter(function () { return jQuery(this).val() == last_education }).attr('selected', true);                   
        jQuery('#time_exp option').filter(function () { return jQuery(this).val() == time_exp }).attr('selected', true);  
        <?php 
            foreach ($data_resume2 as $d) {
                ?>
            jQuery('#work_category option').filter(function () { return jQuery(this).val() == <?php echo $d->work_category ; ?> }).attr('selected', true);  
          <?php
            }
        ?>

    });
</script>