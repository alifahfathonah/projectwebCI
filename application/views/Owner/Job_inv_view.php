            
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
                                    <th scope="col">Nama Pekerja</th>                                    
                                    <th scope="col">Status</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data_job_inv as $d) {
                                        echo '                                   
                                    <tr>
                                    <td>'.$no.'</td>                                    
                                    <th>'.$d->title.'</th>
                                    <td>'.$d->name.'</td>

                                        <td>                                    
                                            '.$d->status_inv.'
                                        </td>                                    
                                        </tr>
                                        ' ; 

                                    }
                                    $no++ ;
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


