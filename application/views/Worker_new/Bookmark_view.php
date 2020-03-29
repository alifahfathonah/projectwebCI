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
                        <h3 class="text-themecolor">Bookmark</h3>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bookmark</h4>
                                <h6 class="card-subtitle">Lowongan Tersimpan</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Lowongan</th>
                                                <th>Kategori</th>
                                                <th>Perusahaan</th>
                                                <th>Closing Date</th>
                                                <th>Status</th>
                                                <th class="text-nowrap"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_bookmark as $db) { ?>
                                            <tr>
                                                <td><h5><?php echo $db->title ?></h5></td>
                                                <td><?php echo $db->name_category ?></td>
                                                <td><?php echo $db->name ?></td>
                                                <td><?php 
                                                $date=date_create($db->closing_date);
                                                echo date_format($date,"d M Y"); ?>
                                                </td>
                                                <td><?php
                                                if ($db->status == 'ditutup') { ?>
                                                    <span class="badge badge-danger px-2 py-1">Ditutup</span>
                                                <?php } else { ?>
                                                    <span class="badge badge-info px-2 py-1">Dibuka</span>
                                                <?php } ?>
                                                </td>
                                                <td class="text-nowrap">

                                                    <div class="btn-group btn-group-toggle">
                                                          <a target="_blank" href="<?php echo base_url(); ?>Worker_new/Search_vacancy/get_vacancy_by_id/<?php echo $db->id_vacancy ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Lihat Lowongan"><i class="fas fa-info"></i></a>
                                                        <!-- <a href="<?php echo base_url(); ?>Worker_new/Bookmark/delete_bookmark/<?php echo $db->id_bookmark ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus"> <i class="fas fa-trash-alt"></i> </a> -->
                                                        <a href="#" onclick="delete_bookmark('<?php echo $db->id_bookmark ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus"> <i class="fas fa-trash-alt"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
 
 <script type="text/javascript">
     function delete_bookmark(id)
    {
        swal({
          title: 'Apakah anda yakin ingin menghapus bookmark ini?',
          text: "",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result) {
            window.location.href = "<?php echo base_url() ?>Worker_new/Bookmark/delete_bookmark/" + id;
          }
        });       
    }   


 </script>
