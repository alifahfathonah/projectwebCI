            
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
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Nama Paket</th>                                    
                                    <th scope="col">Tanggal Pembayaran</th>
                                    <th scope="col">Bukti</th>
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
                                    <td>'.$d->name_paket.'</td>
                                    <td>'.$d->date_created_paket.'</td>
                                    <td><a href="'.base_url().'assets/admin/images/'.$d->bukti.'"><img src="'.base_url().'assets/admin/images/'.$d->bukti.'" style="height : 150px"></a></td>
                                    ';
                                    if($d->status == 'menunggu balasan')
                                    {
                                        echo'
                                        <td>
                                                <div class="col-lg-12 col-md-12">
                                                          <a  type="button" class="btn btn-success" style="color : white ;" onclick="acc_payment('.$d->id_paket.')"> Terima Pembayaran </a>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                          <a  type="button" class="btn btn-danger" style="color : white ;" onclick="rej_payment('.$d->id_paket.')"> Tolak Pembayaran </a>
                                                </div>                                                
                                        </td>                                        
                                    ' ; 

                                    }else{
                                    echo'
                                        <td>Pengusaha</td>                                                                       
                                        ' ; 

                                    }
                                        echo '                                   

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


