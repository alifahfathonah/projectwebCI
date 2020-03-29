  
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Pengguna</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dataTable no-footer" id="bootstrap-data-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>                                    
                                    <th scope="col">Email</th>
                                    <th scope="col">Tanggal Pembuatan Akun</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data_user as $d) {
                                        echo '                                   
                                    <tr>
                                    <td>'.$no.'</td>                                    
                                    <th>'.$d->email.'</th>
                                    <td>'.$d->date_created.'</td>
                                    ';
                                    if($d->level == 1)
                                    {
                                        echo'
                                        <td>Pekerja</td>                                    
                                        ' ; 

                                    }else{
                                    echo'
                                        <td>Pengusaha</td>                                                                       
                                        ' ; 

                                    }
                                        echo '                                   
                                    <td>
                                            <div class="col-lg-4 col-md-12">
                                                      <a  type="button" class="btn btn-danger" style="color : white ;" onclick="delete_user('.$d->id_login.')"> Hapus Akun </a>
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


