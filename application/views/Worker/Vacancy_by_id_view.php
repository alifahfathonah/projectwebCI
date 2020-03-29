
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header bg-primary">
                                <strong class="card-title text-light"><?php echo $get_vacancy_by_id->title ;  ?></strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Nama Perusahaan : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->name ;  ?></p></div>                                  
                                </div>  
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Lowongan Posisi : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->position ;  ?></p></div>                                  
                                </div>                                                            
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Deskripsi Lowongan : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->description ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Lowongan Dibuka : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->closing_date ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Lowongan Ditutup : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->open_date ;  ?></p></div>                                  
                                </div> 
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Syarat Pendidikan : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->education ;  ?></p></div>                                  
                                </div>                                                                              
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>No. Hp : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->phone ;  ?></p></div>                                  
                                </div>      
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Alamat : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $get_vacancy_by_id->name_provinces ;  ?>, <?php echo $get_vacancy_by_id->name_regencies ;  ?> ,<?php echo $get_vacancy_by_id->name_districts ;  ?> , <?php echo $get_vacancy_by_id->name_villages ;  ?>, <?php echo $get_vacancy_by_id->location ;  ?></p></div>                                  
                                </div>                                                                                                                                                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="card" style="height: 455px">

                            <div class="card-body">
                            <img class="card-img-top" src="<?php echo base_url() ; ?>assets/admin/images/<?php echo $get_vacancy_by_id->picture ; ?>" alt="Card image cap" style="height: 350px">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <strong class="card-title text-light">Informasi Lowongan</strong>
                            </div>
                            <div class="card-body">
                                
                <!--row status-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Status Lowongan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->status ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Tipe Pekerja</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->tipe_worker ;  ?></p>                                        
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Kategori Lowongan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->name_category ;  ?></p>                                        
                            </div>
                        </div>
                    </div>                    

                </div> 
                <!--end roow status-->
                                <!--spek loker-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Pengalaman Kerja</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->req_exp ;  ?></p>                                        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Keahlian</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->skill ;  ?></p>                                        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Tambahan Insentif</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->insentif ;  ?></p>                                        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title text-light">Waktu Bekerja</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->work_time ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>   <!--end spek lokeer-->


                            </div>
                        </div>
                    </div>
                </div>


<!--                 <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-success">
                                <strong class="card-title text-light">Tanggung Jawab Pekerjaan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $get_vacancy_by_id->responsibility ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div> -->


               </div>
           </div>


