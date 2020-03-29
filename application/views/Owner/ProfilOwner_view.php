            <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Profil Perusahaan</h1>
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
                                <strong class="card-title">Ubah Profil</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('Owner/Owner_profil/change_profile_owner'); ?>" method="post" enctype="multipart/form-data"  required>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Nama Perusahaan</label>
                                                <input name="nama" type="text" class="form-control" value="<?php echo $data_profil->name ; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Perusahaan Bergerak di Bidang</label>
                                                <select name="sector" id="sector" class="form-control js-example-basic-single">
                                                    <option value="">-- Pilih Bidang Perusahaan --</option>
                                                    <?php  
                                                        foreach ($data_category as $d) {
                                                            echo '<option value="'.$d->id_sector.'">'.$d->name_sector.'</option>' ;                                            
                                                        }
                                                    ?>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label class="control-label mb-1">Deskripsi Perusahaan</label>
                                                    <textarea name="description" id="description" rows="3"  class="form-control"><?php echo $data_profil->description ; ?></textarea>
                                            </div> 
                                            <div class="form-group">
                                                <label class="control-label mb-1">Jumlah Karyawan</label>
                                                <select name="num_employer" id="num_employer" class="form-control js-example-basic-single">
                                                    <option value="">-- Pilih Jumlah Karyawan --</option>
                                                    <option value="0 - 10">0 - 10</option>
                                                    <option value="10 - 50">10 - 50</option>
                                                    <option value="50 - 100">50 - 100</option>
                                                    <option value="100 - 1000">100 - 1000</option>
                                                    <option value="Lebih dari 1000">Lebih dari 1000</option>                                                    
                                                </select>
                                            </div>                                                              <div class="form-group">
                                                <label  class="control-label mb-1">Website</label>
                                                <input  name="website" type="text" class="form-control" value="<?php echo $data_profil->website ; ?>" >
                                            </div>                  
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Foto Profile Perusahaan</label>
                                                <input type="file" name="foto" class="form-control-file" >
                                                <?php if ($data_profil->picture != '') {?>
                                                    <img class="align-self-center mr-3" style="margin-top : 3% ;width:85px; height:85px;" alt="" src="<?php echo base_url(); ?>assets/admin/images/<?php echo $data_profil->picture ;  ?>">    
                                                <?php } ?>
                                            </div> 
                                            <h3>Lokasi Perusahaan</h3>                                         
                                            <hr>
                                            <label class="control-label mb-1">Lokasi Perusahaan</label>
                                            <textarea name="address1" id="address1" rows="3"  class="form-control"><?php echo $data_profil->address1 ; ?></textarea>                                                                                        
                                            <h3>Sosial Media</h3>                                           
                                            <hr>                                                
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Instagram</label>
                                                <input name="instagram" type="text" class="form-control" value="<?php echo $data_profil->instagram ; ?>" >
                                            </div>  
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Twitter</label>
                                                <input  name="twitter" type="text" class="form-control" value="<?php echo $data_profil->twitter ; ?>"   >
                                            </div>                                                            <div class="form-group">
                                                <label  class="control-label mb-1">facebook</label>
                                                <input  name="facebook" type="text" class="form-control" value="<?php echo $data_profil->facebook ; ?>">
                                            </div>                                                      
                                            <div class="col-md-4">
                                               <input class="btn btn-lg btn-info btn-block" type="submit" name="submit" value="Simpan">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ubah Password</strong>
                            </div>
                            <div class="card-body">
                                        <form action="<?php echo base_url('Owner/Owner_profil/change_password_owner'); ?>" method="post" enctype="multipart/form-data">                                
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Password Lama</label>
                                                <input id="Password" name="old_password" type="password" class="form-control">
                                            </div>                         
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Password</label>
                                                <input id="Password" name="password" type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Verifikasi Password</label>
                                                <input id="ver_password" name="ver_password" type="password" class="form-control">
                                            </div>                                                   
                                            <div class="col-md-4">
                                               <input class="btn btn-lg btn-info btn-block" type="submit" name="submit" value="Simpan">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->
                    </div><!--/.col-->
        </div><!-- .animated -->
    </div><!-- .content -->        
    <script>
    jQuery(document).ready(function() {
         sector = <?php echo $data_profil->sector ; ?> ;
         num_employer = "<?php echo $data_profil->num_employer ; ?>"  ;



        jQuery('#sector option').filter(function () { return jQuery(this).val() == sector }).attr('selected', true);
        jQuery('#num_employer option').filter(function () { return jQuery(this).val() == num_employer }).attr('selected', true);  
             
    });
</script>