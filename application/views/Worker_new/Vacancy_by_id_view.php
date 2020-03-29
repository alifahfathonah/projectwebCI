        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- dashboard -->
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor">Lowongan Kerja</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Bookmark</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                        <div class="d-flex mt-2 justify-content-end">
                            <div class="d-flex mr-3 ml-2">
                                
                            </div>
                            <div class="d-flex mr-3 ml-2">
                                
                            </div>
                            <div class="">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- content -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mt-2">Profil Perusahaan</h4>
                                <div class="mt-4 text-center"> <img src="<?php echo base_url(); ?>assets/admin/images/<?php echo $this->M_master->getLoginByID($get_vacancy_by_id->id_login)->picture ?>"
                                        class="" width="200" />
                                    <div class="row text-center justify-content-md-center">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> 
                                <h6 class="card-subtitle"><?php echo $this->M_master->getLoginByID($get_vacancy_by_id->id_login)->name ?></h6>
                                <small class="text-muted">Deskripsi Perusahaan </small>
                                <h6><?php echo $this->M_master->getLoginByID($get_vacancy_by_id->id_login)->description ?></h6> <small class="text-muted pt-4 d-block">Website</small>
                                <h6><?php echo $this->M_master->getLoginByID($get_vacancy_by_id->id_login)->website ?></h6> 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                 <h4 class="card-title"><?php echo $get_vacancy_by_id->title ?></h4>
                                 <div class="row">
                                     <div class="col-md-6" style="font-size: 12px"><i class="fas fa-map-marker-alt"></i> <?php echo $this->M_master->getProvincesByID($get_vacancy_by_id->provinsi)->name_provinces ?> - <?php echo $this->M_master->getRegenciesByID($get_vacancy_by_id->kabupaten)->name_regencies ?> 
                                    </div>
                                    <div class="col-md-3" style="font-size: 12px"><i class="fas fa-briefcase"></i> <?php echo $this->M_master->getCategoryByID($get_vacancy_by_id->category)->name_category ?>
                                    </div>
                                    <div class="col-md-3" style="font-size: 12px"><i class="fas fa-dollar-sign"></i> <?php echo $get_vacancy_by_id->salary ?>
                                    </div>
                                 </div>
                                <div class="row mt-3">
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Pendidikan</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $get_vacancy_by_id->education ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Tipe Pekerjaan</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $get_vacancy_by_id->tipe_worker ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Posisi</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $get_vacancy_by_id->position ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Waktu Bekerja</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $get_vacancy_by_id->work_time ?></p>
                                    </div>
                                </div>
                                <hr>
                                <p class="mt-4">
                                    <?php echo $get_vacancy_by_id->description ?>
                                </p>
                                <p>
                                    <h6>Tanggung Jawab Pekerjaan</h6>
                                    <?php echo $get_vacancy_by_id->responsibility ;  ?>
                                 </p>
                                <p>
                                    <h6>Pengalaman Kerja yang Dibutuhkan</h6>
                                    <?php echo $get_vacancy_by_id->req_exp ;  ?>
                                 </p>
                                 <p>
                                    <h6>Keahlian</h6>
                                    <?php echo $get_vacancy_by_id->skill ;  ?>
                                 </p>
                                 <p>
                                    <h6>Tambahan Insentif</h6>
                                    <?php echo $get_vacancy_by_id->insentif ;  ?>
                                 </p>
                                <!-- <h4 class="font-medium mt-4">Skill Set</h4> -->
                                <?php
                                $id_login = $this->session->userdata('id_login'); 
                                $sql ="SELECT * FROM bookmark WHERE id_login=$id_login AND id_vacancy=$get_vacancy_by_id->id_vacancy ";
                                $query = $this->db->query($sql);

                                $sql2 ="SELECT * FROM apllied_vacancy WHERE id_login=$id_login AND id_vacancy=$get_vacancy_by_id->id_vacancy ";
                                $query2 = $this->db->query($sql2);
                                ?>
                                <hr>
                                <?php if($query2->num_rows() == 0){ ?>
                                 <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><button class="btn btn-info"> Daftar</button>
                                <?php } else { ?>
                                    <a href="#"><button class="btn btn-info" disabled>Daftar</button></a>
                                <?php } ?>
                                <?php  if($query->num_rows() == 0){ ?>
                                    <a href="<?php echo base_url(); ?>Worker_new/Bookmark/input_bookmark/<?php echo $get_vacancy_by_id->id_vacancy ?>" class="btn btn-danger" disabled><i class="fas fa-star"></i> Bookmark</a>
                                <?php } else { ?>
                                    <a href="#"><button class="btn btn-danger" disabled><i class="fas fa-star"></i> Bookmark</button></a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->



                <!-- ============================================================== -->
                <!-- End PAge Content -->


                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div> 
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
  
            <!-- ============================================================== -->
 
 <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Lamar Lowongan : <?php echo $get_vacancy_by_id->title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('Worker_new/Search_vacancy/input_vacancy_applied'); ?>" method="post" >
      <div class="modal-body">
        <label class="control-label">Promosikan Diri Anda<span class="text-danger">*</span></label>
        <textarea rows="6" name="reason" type="text" class="form-control"></textarea>
        <input type="hidden" value="<?php echo $get_vacancy_by_id->id_vacancy ?>" name="id_vacancy">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
    </div>
  </div>
</div>