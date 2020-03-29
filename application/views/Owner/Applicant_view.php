
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <?php
                                $dataResume = $this->M_resume->getResumeByLoginID($data_resume_download->id_pelamar);
                             ?>
                            <div class="card-header bg-info">
                                <strong class="card-title text-light"><?php echo $dataResume->name_resume ;  ?></strong>
                            </div>
        
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Nama : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $data_resume_download->name ;  ?></p></div>                                  
                                </div>                              
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Tahun Kelahiran : </strong></strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $dataResume->birth_year ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Jenis Kelamin : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $dataResume->gender ;  ?></p></div>                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Status Pernikahan : </strong></h5></div>
                                  <div class="col-md-6"><p><?php echo $dataResume->married ;  ?></p></div>                                  
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
                                  <div class="col-md-6"><p><?php echo $dataResume->name_provinces ;  ?>, <?php echo $dataResume->name_regencies ;  ?> ,<?php echo $dataResume->name_districts ;  ?> , <?php echo $dataResume->name_villages ;  ?>, <?php echo $dataResume->location ;  ?></p></div>                                  
                                </div>         
                                <div class="row">
                                  <div class="col-md-6"><h5><strong>Kategori Skill : </strong></h5></div>
                                  <div class="col-md-6"><p>                                  
                                  <?php  
                                  $data_resume2 = $this->M_vacancy->get_category_resume($data_resume_download->id_pelamar);
                                  foreach($data_resume2 as $d){
                                        echo ''.$d->name_category .' ,  ' ;
                                  }
                                  
                                  ?>
                                </p></div>                                                                    
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
                    <div class="col-md-2">
                    <?php 
                               /* $id_login = $this->uri->segment('4') ;
                                $sql ="SELECT * FROM apllied_vacancy  WHERE id_login=$id_login AND status_app = 'belum ada kabar' ";
                                $query = $this->db->query($sql);    
                                $notif = $query->result() ;
                            $total = 0 ;
                                foreach ($notif as $q ) { $total+=1 ; }
                                  if($total > 1) {
                                    echo '
                                    <a  type="button" class="btn btn-success" style="color : white ;" href="'.base_url().'Owner/Vacancy/accept_app/'.$this->uri->segment('5').'/'.$data_resume_download->email.'"> Terima Pekerja </a>
                                    ' ;

                                  }*/
                    ?>
                    <a  type="button" class="btn btn-success" style="color : white ;" href="<?php echo base_url() ?>Owner/Vacancy/accept_app/<?php echo $data_resume_download->id_apllied_vacancy ?>"> Terima Pekerja </a>
                   <!--  <a  type="button" class="btn btn-danger" style="color : white ;margin-top: 10px" href="<?php echo base_url() ?>Owner/Vacancy/accept_app/<?php echo $data_resume_download->id_apllied_vacancy ?>"> Tolak Pekerja </a> -->
                    <div class="card" >
                    </div>    
                </div>                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <strong class="card-title text-light">Promosi Diri</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $data_resume_download->reason  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <strong class="card-title text-light">Ringkasan Profile</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $dataResume->profile ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <strong class="card-title text-light">Riwayat Pendidikan</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $dataResume->history_education ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <strong class="card-title text-light">Keahlian</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $dataResume->skill ;  ?></p>                                        
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
                                <p class="card-text"><?php echo $dataResume->work_exp ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <strong class="card-title text-light">Pendidikan Terakhir</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $dataResume->last_education ;  ?></p>                                        
                            </div>
                        </div>
                    </div>
                </div>   

               </div>
           </div>


