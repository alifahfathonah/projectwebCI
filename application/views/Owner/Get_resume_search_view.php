   <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Cari Pekerja</h1>
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
                                <strong>Cari Pekerja Impianmu</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo base_url() ; ?>Owner/Search_resume/get_resume_by_search" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                         <div class="col-lg-4 col-md-9">
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
                                         <div class="col-lg-4 col-md-9">
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
                                         <div class="col-lg-4 col-md-9">
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
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <input type="text" name="title" placeholder="Cari Pekerjamu" class="form-control">
                                                <div class="input-group-btn"><input class="btn btn-primary" type="submit" value="cari"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                      
                            </div>
                            <div class="row container">
                        <?php 
                            $id_login = $this->session->userdata('id_login') ;
                            foreach ($data_resume as $d) {                                               
                                echo '
                                    <div class="col-md-4">
                                        <section class="card" style="width : 280px">
                                            <img src="'.base_url().'assets/admin/images/'.$d->picture.'" style="height : 200px ;">
                                            <div class="twt-write col-sm-12" style="margin-top: 5% ;">
                                                <a href="#" style="font-size: 20px ; color : #3282b8"><b><i>'.$d->name_resume.'</i></b></a>
                                            </div>
                                            <footer class="twt-footer">
                                                <p><b>Nama :</b> '.$d->name.'<br>
                                                <b>Pendidikan Terakhir :</b> '.$d->last_education.'<br>
                                                <b>Lokasi :</b> '.$d->name_provinces.' , '.$d->name_regencies .'<br>
                                    
                                                <a  target="_blank" class="btn btn-primary" style="color : white ;" href="'.base_url().'Owner/Vacancy/get_resume_app/'.$d->id_login.'"><i class="fa fa-eye" ></i> Lihat Detail Resume </a>          
                                                <a  type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_ubah" style="color : white ;" onclick="invite_worker('.$d->id_login.')"><i class="fa fa-plus" ></i> Undang</a>                             

                                                            </footer>
                                                        </section>
                                                    </div>                             

                                                ' ;


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
            <form action="<?php echo base_url('Owner/Search_resume/invite_worker'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Undang Pekerja</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                     <div class="form-group">
                         <label class="control-label mb-1">Pilih Lowongan Pekerjaan Yang Akan Ditawarkan</label>
                         <select name="id_vacancy" id="id_vacancy" class="form-control" required>
                            <?php  
                                foreach ($data_vacancy as $d ) {
                                    echo '<option value="'.$d->id_vacancy.'">'.$d->title.'</option>';
                                }
                            ?>
                             
                                                                                       
                         </select>
                     </div>
                     <div class="form-group">
                         <label class="control-label mb-1">Pesan</label>
                         <?php //echo $id_login ?>
                          <input type="hidden" id="id_login" name="id_login">
                         <textarea name="message" id="message" rows="3"  class="form-control" ></textarea>
                     </div>                                                                                  
                    </div>
                  </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
  </div>
