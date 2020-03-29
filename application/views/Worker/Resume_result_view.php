            
        <div class="content">
            <div class="animated fadeIn">
                    <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Resume</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Resume</th>
                                    <th scope="col">Tanggal Pembuatan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><?php echo $data_resume->name_resume ; ?></th>
                                    <td><?php echo $data_resume->date_created  ; ?></td>
                                    <td>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button type="button" class="btn btn-danger" onclick="delete_resume()"><i class="fa fa-trash"></i> </button>

                                                  <a  type="button" class="btn btn-primary" style="color : white ;" href="<?php echo base_url() ; ?>Worker/Resume/resume_result_edit"><i class="fa fa-pencil" ></i> </a>

                                                  <a  type="button" class="btn btn-success" style="color : white ;" href="<?php echo base_url() ; ?>Worker/Resume/resume_download"><i class="fa fa-download" ></i> </a>
                                        </div>                                                                                                                        
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                            </div>
                        </div> <!-- .card -->
                    </div><!--/.col-->
        </div><!-- .animated -->
    </div><!-- .content -->        





