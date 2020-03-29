   <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Bookmark</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row container">
                <?php 
                            $id_login = $this->session->userdata('id_login') ;
                    foreach ($data_bookmark as $d) {
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
                                                echo'
                                                   <a  type="button" class="btn btn-danger" style="color : white ;" href="'.base_url().'Worker/Bookmark/delete_bookmark/'.$d->id_bookmark.'" id="buttonbookmark"><i class="fa fa-times"></i> Bookmark </a>                             
                                                            </footer>
                                                        </section>
                                                    </div>
                                                ' ;


                                            }
                            
                           
                ?>                    
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
                         <label class="control-label mb-1">Alsan kenapa anda diinginkan perusahaan</label>
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
