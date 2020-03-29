            
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Iklan Lowongan</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="bootstrap-data-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>                                    
                                    <th scope="col">Nama Lowongan</th>
                                    <th scope="col">Tanggal Penutupan Lowongan</th>
                                    <th scope="col">Status Lowongan</th> 
                                    <th scope="col">Pelamar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data_vacancy as $d) {
                                        ?>                                   
                                    <tr>
                                    <td><?php echo $no ?></td>                                    
                                    <th><?php echo $d->title ?>
                                    <?php if ($d->premium == 'yes') { ?>
                                        <br>
                                        <span style="color: white; background-color: #009EFF ">Premium</span>
                                    <?php } ?>
                                    </th>
                                    <td><?php echo $d->closing_date ?></td>
                                    <td><?php echo $d->status ?></td>
                                    <td>
                                        <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                                            <?php if ($d->status == "dibuka") {?>
                                              <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modal_pelamar" onclick="get_app('<?php echo $d->id_vacancy ?>')">Apply</button>
                                            <?php } ?>
                                                <button type="button"class="btn btn-success" data-toggle="modal" data-target="#modal_pelamar_acc" style="color : white ;" onclick="get_app_acc('<?php echo $d->id_vacancy ?>')">Diterima</button>
                                        </div>
                                    </td>
                                    
                                    <?php  /*if($d->status == "dibuka"){*/
                                    /*echo'
                                                  <a  type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_pelamar" style="color : white ;" onclick="get_app('.$d->id_vacancy.')">Pelamar </a>

                                    ' ;                                         
                                    }


                                    echo'                                                  
                                                  <a  type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_pelamar_acc" style="color : white ;" onclick="get_app_acc('.$d->id_vacancy.')">Pelamar diterima</a>
                                    </td>
                                    <td> ';*/
                                    if($d->status == "dibuka"){
                                        echo '
                                        <td>
                                        <div class="row">
                                        
                                        <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                                              <button type="button" class="btn btn-danger" onclick="delete_vacancy('.$d->id_vacancy.')"><i class="fa fa-trash"></i></button>
                                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_ubah" onclick="change_vacancy('.$d->id_vacancy.')"><i class="far fa-edit"></i></button>
                                              <button type="button" class="btn btn-warning" style="color : white ;" onclick="close_vacancy('.$d->id_vacancy.')"><i class="fa fa-times" ></i></button>
                                        </div>
                                                                                                                   
                                        </div>
                                        ';
                                    }
                                    echo '
                                    </td>
                                    </tr>
                                    ' ; 
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





<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('Owner/Vacancy/edit_vacancy'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Ubah Vacancy</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                      <input type="hidden" name="id_vacancy" class="form-control" id="id_vacancy">
                      <div class="form-group">
                          <label>Judul lowongan</label>
                          <div class="form-line">
                            <input type="text" name="title" class="form-control" id="title" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Deskripsi Pekerjaan</label>
                          <div class="form-line">
                            <textarea name="description" id="description" rows="5"  class="form-control" required></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Tanggal Penutupan</label>
                          <div class="form-line">
                            <input type="date" name="closing_date" class="form-control" id="closing_date" required>
                          </div>
                      </div>
                     <div class="form-group">
                         <label class="control-label mb-1">Syarat Pendidikan</label>
                         <select name="education" id="education" class="form-control" required>
                             <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                             <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                             <option value="S1">S1 </option>
                             <option value="S2">S2 </option>
                             <option value="S3">S3 </option>
                                                                                       
                         </select>
                     </div>   
                     <div class="form-group">
                         <label class="control-label mb-1">Kategori</label>
                         <select name="category" id="category" class=" form-control" style="width: 100% " required>

                         <?php
                             $no = 0;
                             foreach ($data_category as $d) {
                                 echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                             }
                         ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <label class="control-label mb-1">Syarat Pengalaman</label>
                         <textarea name="req_exp" id="req_exp" rows="3"  class="form-control" ></textarea>
                     </div>                                             
                     <div class="form-group">
                         <label class="control-label mb-1">Keahlian</label>
                         <textarea name="skill" id="skill" rows="3"  class="form-control" ></textarea>
                     </div>   
                     <div class="form-group">
                         <label class="control-label mb-1">Kualifikasi </label>
                         <textarea name="req_qualification" id="req_qualification" rows="5"  class="form-control" ></textarea>
                     </div>    
                     <div class="form-group">
                         <label class="control-label mb-1">Tunjangan </label>
                         <textarea name="insentif" id="insentif" rows="3"  class="form-control" ></textarea>
                     </div>
                     <div class="form-group">
                         <label class="control-label mb-1">Level Posisi Pekerjaan</label>
                         <select name="position" id="position" class="form-control" required>
                             <option value="Manager / CEO">GM / CEO</option>
                             <option value="Fresh Graduate">Fresh Graduate</option>
                             <option value="Manager / Ass Manager">Manager / Ass Manager </option>
                             <option value="Staff">Staff</option>
                             <option value="Supervisor / Koordinator">Supervisor / Koordinator</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label class="control-label mb-1">Gaji</label>
                         <select name="salary" id="salary" class="form-control" required>
                             <option value=" > 10jt"> > 10jt</option>
                             <option value="5 - 10 jt">5 - 10 jt</option>
                             <option value="2 - 5 jt">2 - 5 jt</option>
                             <option value="1 - 2 jt">1 - 2 jt</option>
                             <option value="Negosiasi">Negosiasi</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label class="control-label mb-1">Waktu Bekerja</label>
                         <input name="work_time" id="work_time" type="text" class="form-control" required>
                     </div>
                     <div class="form-group">
                         <label class="control-label mb-1">Tipe Pekerjaan</label>
                         <select name="tipe_worker" id="tipe_worker" class="form-control" required>
                            <option value="Freelance">Freelance</option>
                             <option value="Tetap">Tetap</option>
                             <option value="Kontrak">Kontrak</option>
                             <option value="Paruh Waktu">Paruh Waktu</option>
                             <option value="Magang">Magang</option>
                         </select>
                     </div> 
                      <div class="form-group">
                          <label class="control-label mb-1">Lokasi </label>
                          <textarea name="lokasi" id="lokasi" rows="3"  class="form-control" disabled></textarea>
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


<div class="modal fade" id="modal_pelamar" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Data Pelamar</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"></strong>
                            </div>
                            <div class="card-body">
                                <table class="table" id="bootstrap-data-table">
                                    <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Nama Pelamar</th>
                                          <th scope="col">Detail</th>
                                          <th scope="col">Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody id="data_app">
<!--                                     <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td><a  type="button" class="btn btn-primary"  style="color : white ;">Lhat Resume</a></td>                                        
                                        <td><a  type="button" class="btn btn-success"  style="color : white ;" >Terima </a></td>
                                    </tr> -->
                                </tbody>
                            </table>
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

<div class="modal fade" id="modal_pelamar_acc" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Data Pelamar Diterima</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"></strong>
                            </div>
                            <div class="card-body">
                                <table class="table" id="bootstrap-data-table">
                                    <thead>
                                        <tr>
                                          <!-- <th scope="col">No</th> -->
                                          <th scope="col">Nama Pelamar</th>
                                          <th scope="col">Detail</th>
                                          <!-- <th scope="col">Aksi</th> -->
                                      </tr>
                                  </thead>
                                  <tbody id="data_app_acc">
<!--                                     <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td><a  type="button" class="btn btn-primary"  style="color : white ;">Lhat Resume</a></td>                                        
                                        <td><a  type="button" class="btn btn-success"  style="color : white ;" >Terima </a></td>
                                    </tr> -->
                                </tbody>
                            </table>
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
