
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header bg-danger">
                                <strong class="card-title text-light"><?php echo $data_resume_download->name_resume ;  ?></strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Nama : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->name ;  ?></p></div>                                  
                                </div>                              
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Tahun Kelahiran : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->birth_year ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Jenis Kelamin : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->gender ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Status Pernikahan : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->married ;  ?></p></div>                                  
                                </div> 
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Email : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->email ;  ?></p></div>                                  
                                </div>                                                                              
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>No. Hp : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->phone ;  ?></p></div>                                  
                                </div>                                                                              
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Alamat : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->name_provinces ;  ?>, <?php echo $data_resume_download->name_regencies ;  ?> ,<?php echo $data_resume_download->name_districts ;  ?> , <?php echo $data_resume_download->name_villages ;  ?>, <?php echo $data_resume_download->location ;  ?></p></div>                                  
                                </div>                                                                                                                                                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div class="card" style="height: 400px">

                            <div class="card-body">
                            <img class="card-img-top" src="<?php echo base_url() ; ?>assets/admin/images/<?php echo $data_resume_download->picture ; ?>" alt="Card image cap" style="height: 350px">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-success">
                                <strong class="card-title text-light">Ringkasan Profile</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $data_resume_download->profile ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Riwayat Pendidikan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $data_resume_download->history_education ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <strong class="card-title text-light">Keahlian</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $data_resume_download->skill ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>  

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <strong class="card-title text-light">Pengalaman Bekerja</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $data_resume_download->work_exp ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <strong class="card-title text-light">Pendidikan Terakhir</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $data_resume_download->last_education ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>   

               </div>
           </div>


