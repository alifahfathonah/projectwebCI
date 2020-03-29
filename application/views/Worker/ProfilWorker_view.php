            <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Profil Pekerja</h1>
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
                                        <form action="<?php echo base_url('Worker/Worker_profil/change_profile_worker'); ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="control-label mb-1">Nama Lengkap</label>
                                                <input name="name" type="text" class="form-control" value="<?php echo $data_profil->name ; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">No Hp</label>
                                                <input  name="phone" type="number" class="form-control" value="<?php echo $data_profil->phone ; ?>" required>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Website / Bog (optional)</label>
                                                <input  name="website" type="text" class="form-control" value="<?php echo $data_profil->website ; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Foto Profile</label>
                                                <input type="file" name="foto" class="form-control-file" >
                                                <img class="align-self-center mr-3" style="margin-top : 3% ;width:85px; height:85px;" alt="" src="<?php echo base_url(); ?>assets/admin/images/<?php echo $data_profil->picture ;  ?>" >    
                                            </div> 
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
                                        <form action="<?php echo base_url('Worker/Worker_profil/change_password_worker'); ?>" method="post" enctype="multipart/form-data">                                
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Password Lama</label>
                                                <input id="Password" name="old_password" type="password" class="form-control">
                                            </div>                         
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Password Baru</label>
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
