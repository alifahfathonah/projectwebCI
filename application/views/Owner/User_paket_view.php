            
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Paket Anda</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dataTable no-footer" id="bootstrap-data-table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Paket</th>
                                    <th scope="col">Maksimal Post</th>                                    
                                    <th scope="col">Durasi Maksimal</th>
                                    <th scope="col">Maksimal Tawaran</th>                                    
                                    <th scope="col">Tanggal Kadaluarsa</th>
                                    <th scope="col">Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        echo '                                   
                                    <tr>
                                    <th>'.$data_paket->name_paket.'</th>
                                    <td>'.$data_paket->num_post.'</td>
                                    <td>'.$data_paket->length_post.'</td>
                                    <td>'.$data_paket->job_inv.'</td>
                                    <td>'.$data_paket->date_expired_date.'</td>                                    
                                    ';
                                    if($data_paket->status == "belum terbayar")
                                    {
                                        echo'
                                        <td>                                    
                                            <div class="col-lg-12 col-md-12">
                                                      <a  type="button" class="btn btn-success" style="color : white ;" data-toggle="modal" data-target="#modal_pembayaran" onclick="upload_payment('.$data_paket->id_paket.')"><i class="fa fa-upload" ></i> Upload Bukti Pembayaran </a>
                                            </div>

                                        </td>                                    
                                        </tr>
                                        ' ; 

                                    }else{
                                    echo'
                                        <td>                                    
                                            '.$data_paket->status.'
                                        </td>                                    
                                        </tr>
                                        ' ; 

                                    }
                                ?>                                
 
                            </tbody>
                        </table>
                    </div>
                </div>

                            </div>
                        </div> <!-- .card -->
                    </div><!--/.col-->
        </div><!-- .animated -->
    </div><!-- .content -->        


<div class="modal fade" id="modal_pembayaran" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('Owner/Paket/upload_payment'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Upload Bukti Pembayaran</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                      <div class="form-group">
                          <div class="form-line">
                            <input type="hidden" name="id_paket" class="form-control" id="id_paket">
                            <input type="file" name="bukti" class="form-control" id="bukti" required>                            
                          </div>
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
