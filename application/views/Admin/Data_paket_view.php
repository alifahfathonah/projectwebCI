            
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="col-lg-4 col-md-12">
                 <a  type="button" class="btn btn-success" style="color : white ;" data-toggle="modal" data-target="#modal_add"> Tambah Paket </a>
                 </div>                         

                <div class="card">
                            <div class="card-header">
                        <strong class="card-title">Data Paket</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dataTable no-footer" id="bootstrap-data-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>                                    
                                    <th scope="col">Nama Paket</th>
                                    <th scope="col">Batas Maksimal Post</th>
                                    <th scope="col">Batas Maksimal Lama Iklan</th>
                                    <th scope="col">Batas Maksimal Jumlah Undangan</th>
                                    <th scope="col">Jumlah Maksimal Kadaluarsa Paket</th>                                    
                                    <th scope="col">Harga</th>                                    
                                    <th scope="col">Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data_paket as $d) {
                                        echo '                                   
                                    <tr>
                                    <td>'.$no.'</td>                                    
                                    <th>'.$d->name_paket.'</th>   
                                    <td>'.$d->num_post.'</td>                                 
                                    <td>'.$d->length_post.' hari</td>                                 
                                    <td>'.$d->job_inv.'</td>  
                                    <td>'.$d->expired.' hari</td>                                                                                                    
                                    <td>Rp. '.$d->price.'</td>                                                                                                   
                                    <td>
                                            <div class="col-lg-4 col-md-2">
                                                      <a  type="button" class="btn btn-danger" style="color : white ;" href="'.base_url().'Admin/Data_paket/delete_paket/'.$d->id_upgrade.'"> <i class="menu-icon fa fa-times"></i> </a>
                                                      <a  type="button" class="btn btn-primary" style="color : white ;" onclick="change_paket('.$d->id_upgrade.')" data-toggle="modal" data-target="#modal_ubah"> <i class="menu-icon fa fa-pencil"></i> </a>

                                            </div>
                                        
                                    </td>
                                    </tr>

                                    ';                                    
                                    $no++ ;
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


<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('Admin/Data_paket/input_paket'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Tambah Paket</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label>Nama Paket</label>
                          <div class="form-line">
                            <input type="text" name="name_paket" class="form-control" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Batas Maksimal Post</label>
                          <div class="form-line">
                            <input type="number" name="num_post" class="form-control"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Batas Lama Iklan</label>
                          <div class="form-line">
                            <input type="number" name="length_post" class="form-control" placeholder="hari" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Batas Maksimal Jumlah Undangan</label>
                          <div class="form-line">
                            <input type="number" name="job_inv" class="form-control" required>
                          </div>
                      </div> 
                      <div class="form-group">
                          <label>Kadaluarsa Paket</label>
                          <div class="form-line">
                            <input type="number" name="expired" class="form-control" placeholder="hari" required>
                          </div>
                      </div>                                           
                      <div class="form-group">
                          <label>Harga</label>
                          <div class="form-line">
                            <input type="number" name="price" class="form-control" placeholder="Rupiah"required>
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
  <div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('Admin/Data_paket/change_paket'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Ubah Paket</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label>Nama Paket</label>
                          <div class="form-line">
                            <input type="hidden" name="id_upgrade" id="id_upgrade" class="form-control" required><input type="text" name="name_paket" id="name_paket" class="form-control" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Batas Maksimal Post</label>
                          <div class="form-line">
                            <input type="number" name="num_post" id="num_post" class="form-control"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Batas Lama Iklan</label>
                          <div class="form-line">
                            <input type="number" name="length_post" id="length_post" class="form-control" placeholder="hari" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Batas Maksimal Jumlah Undangan</label>
                          <div class="form-line">
                            <input type="number" name="job_inv" id="job_inv" class="form-control" required>
                          </div>
                      </div> 
                      <div class="form-group">
                          <label>Kadaluarsa Paket</label>
                          <div class="form-line">
                            <input type="number" name="expired" id="expired" class="form-control" placeholder="hari" required>
                          </div>
                      </div>                                           
                      <div class="form-group">
                          <label>Harga</label>
                          <div class="form-line">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Rupiah"required>
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