            
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="col-lg-4 col-md-12">
                 <a  type="button" class="btn btn-success" style="color : white ;" data-toggle="modal" data-target="#modal_add"> Tambah Bidang Usaha </a>
                 </div>                         

                <div class="card">
                            <div class="card-header">
                        <strong class="card-title">Data Bidang Usaha</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dataTable no-footer" id="bootstrap-data-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>                                    
                                    <th scope="col">Nama</th>
                                    <th scope="col">Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data_sector as $id) 
                                        echo '                                   
                                    <tr>
                                    <td>'.$no.'</td>                                    
                                    <th>'.$d->name_sector.'</th>                                 
                                    <td>
                                            <div class="col-lg-4 col-md-2">
                                                      <a  type="button" class="btn btn-danger" style="color : white ;" href="'.base_url().'Admin/Data_sector/delete_sector/'.$d->id_sector.'"> <i class="menu-icon fa fa-times"></i> </a>
                                                      <a  type="button" class="btn btn-primary" style="color : white ;" onclick="change_sector('.$d->id_sector.')" data-toggle="modal" data-target="#modal_ubah"> <i class="menu-icon fa fa-pencil"></i> </a>
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
            <form action="<?php echo base_url('Admin/Data_sector/input_sector'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Tambah Bidang Usaha</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label>Nama Bidang Usaha</label>
                          <div class="form-line">
                            <input type="text" name="name_sector" class="form-control" required>
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
            <form action="<?php echo base_url('Admin/Data_sector/change_sector'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Ubah Bidang Usaha</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label>Nama Bidang Usaha</label>
                          <div class="form-line">
                            <input type="hidden" name="id_sector" id="id_sector" class="form-control" required>
                            <input type="text" name="name_sector" id="name_sector"  class="form-control" required>
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