            
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Iklan Lowongan</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered dataTable no-footer" id="bootstrap-data-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>                                    
                                    <th scope="col">Nama Lowongan</th>
                                    <th scope="col">Tanggal Mendaftar</th>                                    
                                    <th scope="col">Tanggal Penutupan Lowongan</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($get_vacancy_applied as $d) {
                                        echo '                                   
                                    <tr>
                                    <td>'.$no.'</td>                                    
                                    <th>'.$d->title.'</th>
                                    <td>'.$d->date_created_app.'</td>
                                    <td>'.$d->closing_date.'</td>
                                    <td>'.$d->status_app.'</td>
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


