   <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Cari Pekerjaan</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">             
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Cari Pekerjaan Impianmu</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo base_url() ; ?>Worker/Search_vacancy/get_vacancy_by_search" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                         <div class="col-lg-4 col-md-6">
                                            <select name="category" id="category"  class=" form-control js-example-basic-single" >
                                            <option value="">Pilih Kategori</option>
                                            <?php
                                                $no = 0;
                                                foreach ($data_category as $d) {
                                                    echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                                                }
                                            ?>
                                            </select>
                                        </div>

                                         <div class="col-lg-4 col-md-6">
                                            <select name="kabupaten" id="kabupaten"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih Lokasi</option>
                                                <?php
                                                    $no = 0;
                                                    foreach ($data_kab as $d) {
                                                        echo '<option value="'.$d->id.'">'.$d->name_regencies.'</option>' ; 
                                                    }
                                                ?>      
                                            </select>
                                        </div>

                                         <div class="col-lg-4 col-md-6">
                                            <select name="education" id="education"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih Pendidikan</option>
                                                <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                                <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                                <option value="S1">S1 </option>
                                                <option value="S2">S2 </option>
                                                <option value="S3">S3 </option>
                                            </select>
                                        </div>

                                    </div>                                    
                                    <div class="row form-group">
                                         <div class="col-lg-4 col-md-6">
                                            <select name="tipe_worker" id="tipe_worker"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih tipe pekerjaan</option>
                                                 <option value="Freelance">Freelance</option>
                                                 <option value="Tetap">Tetap</option>
                                                 <option value="Kontrak">Kontrak</option>
                                                 <option value="Paruh Waktu">Paruh Waktu</option>
                                                 <option value="Magang">Magang</option>
                                            </select>
                                        </div>

                                         <div class="col-lg-4 col-md-6">
                                            <select name="salary" id="salary"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih gaji</option>
                                                 <option value=" > 10jt"> > 10jt</option>
                                                 <option value="5 - 10 jt">5 - 10 jt</option>
                                                 <option value="2 - 5 jt">2 - 5 jt</option>
                                                 <option value="1 - 2 jt">1 - 2 jt</option>
                                                 <option value="Negosiasi">Negosiasi</option>
                                            </select>
                                        </div>

                                    </div>                                    

                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <input type="text" name="title" placeholder="Cari Pekerjaanmu" class="form-control">
                                                <div class="input-group-btn"><input class="btn btn-primary" type="submit" value="cari"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                      
                            </div>
                            <div class="row container">
                        <?php 
                            $id_login = $this->session->userdata('id_login');
                            foreach ($data_vacancy as $d) {
                                $sql ="SELECT * FROM bookmark WHERE id_login=$id_login AND id_vacancy=$d->id_vacancy ";
                                $query = $this->db->query($sql);
                                $sql2 ="SELECT * FROM apllied_vacancy WHERE id_login=$id_login AND id_vacancy=$d->id_vacancy ";
                                $query2 = $this->db->query($sql2);
                                                                               
                                                                                                              
                                echo '
                                    <div class="col-md-4">
                                        <section class="card">
                                            <img src="'.base_url().'assets/admin/images/'.$d->picture.'" style="height : 200px ;">
                                            <div class="twt-write col-sm-12" style="margin-top: 5% ;">
                                                <a target="_blank" href="'.base_url().'Worker/Search_vacancy/get_vacancy_by_id/'.$d->id_vacancy.'" style="font-size: 20px ; color : #3282b8"><b><i>'.$d->title.'</i></b></a>
                                            </div>
                                            <footer class="twt-footer">
                                                <p><b><i class="fas fa-map-marker-alt"></i></b> '.$d->name_regencies.'<br>
                                                <b><i class="fas fa-building"></i></b> '.$d->name.'<br>
                                                <b><i class="fas fa-briefcase"></i> </b>'.$d->name_category.'<br>
                                                <b><i class="fas fa-comment-dollar"></i></b> '.$d->salary.'<br>
                                                <b>Clossing Date :</b> '.$d->closing_date.'<br>
                                                <b>Status Lowongan :</b> '.$d->status.'</p> 
                                                ';
                                                if($query2->num_rows() == 0){
                                                echo'
                                                <a  type="button" class="btn btn-success" style="color : white ;" onclick="daftar_lowongan('.$d->id_vacancy.')" data-toggle="modal" data-target="#modal_ubah" ><i class="fa fa-plus" ></i> Daftar </a> 
                                                ';
                                                }   
                                                if($query->num_rows() == 0){
                                                echo'
                                                <a  type="button" class="btn btn-primary" style="color : white ;" href="'.base_url().'Worker/Bookmark/input_bookmark/'.$d->id_vacancy.'"><i class="fa fa-star" ></i> Bookmark </a>                                
                                                            </footer>
                                                        </section>
                                                    </div>
                                                ' ;

                                            }else{
                                                echo'                               
                                                            </footer>
                                                        </section>
                                                    </div>
                                                ' ;


                                            }
                            }  

                        ?>    
                            
                            </div>
                            <div class="tengah">
                            <?php  echo $pagination ;  ?>     

                            </div>

                        </div>

                    </div>         
                </div>
               
        </div>
    </div>    

    <div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('Worker/Search_vacancy/input_vacancy_applied'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Daftar Lowongan Pekerjaan</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                     <div class="form-group">
                         <label class="control-label mb-1">Promosikan diri Anda</label>
                          <input type="hidden" id="id_vacancy" name="id_vacancy">
                         <textarea name="reason" id="reason" rows="3"  class="form-control" ></textarea>
                     </div>                                                                                  
                    </div>
                  </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="daftar">
                </div>
            </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
  </div>
