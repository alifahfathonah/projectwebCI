            
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Undangan Pekerjaan</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dataTable no-footer" id="bootstrap-data-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>                                    
                                    <th scope="col">Nama Lowongan</th>
                                    <th scope="col">Tanggal Mendaftar</th>                            
                                    <th scope="col">Tanggal Penutupan Lowongan</th>
                                    <th scope="col">Massage</th>
                                    <th scope="col">Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data_jobinv as $d) {
                                        echo '                                   
                                    <tr>
                                    <td>'.$no.'</td>                                    
                                    <th>'.$d->title.'</th>
                                    <td>'.$d->date_created_inv.'</td>
                                    <td>'.$d->closing_date.'</td>
                                    <td>'.$d->message.'</td>
                                    ';
                                    if($d->status_inv == "belum ada kabar")
                                    {
                                        echo'
                                        <td>                                    
                                            <div class="col-lg-12 col-md-12">
                                                      <a  type="button" class="btn btn-success" style="color : white ;" href="'.base_url().'Worker/Job_inv/accept_inv/'.$d->id_jobinv.'/'.$d->id_worker.'/'.$d->id_vacancy.'"><i class="fa fa-check" ></i> </a>
                                                      <a  type="button" class="btn btn-danger" style="color : white ;" href="'.base_url().'Worker/Job_inv/reject_inv/'.$d->id_jobinv.'"><i class="fa fa-times" ></i> </a>
                                                      <a  type="button" class="btn btn-primary" style="color : white ;"target="_blank" href="'.base_url().'Worker/Search_vacancy/get_vacancy_by_id/'.$d->id_vacancy.'"><i class="fa fa-eye" ></i> </a>

                                            </div> 
                                        </td>                                    
                                        </tr>
                                        ' ; 

                                    }else{ ?>

                                        <td> 
                                            <?php if ($d->status_inv == 'diterima') { ?>
                                                <span style="color : white;background-color :green">Diterima</span>
                                            <?php } else {?>
                                                <span style="color : white;background-color :red">Ditolak</span>
                                            <?php } ?>
                                        </td>                                    
                                        </tr>
                                        

                                    <?php  }
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


