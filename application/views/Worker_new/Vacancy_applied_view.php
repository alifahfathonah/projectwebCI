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
                        <h3 class="text-themecolor">Lamaran Pekerjaan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Lamaran Pekerjaan</li>
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
                                <h4 class="card-title">Lowongan Terdaftar</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table class="table color-table muted-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Lowongan</th>
                                                <th>Kategori</th>
                                                <th>Perusahaan</th>
                                                <th>Apply Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($get_vacancy_applied as $db) { ?>
                                            <tr>
                                                <td><a target="_blank" href="<?php echo base_url(); ?>Worker_new/Search_vacancy/get_vacancy_by_id/<?php echo $db->id_vacancy ?>"><h5><?php echo $db->title ?></h5></a></td>
                                                <td><?php echo $this->M_master->getCategoryByID($db->category)->name_category  ?></td>
                                                <td><?php echo $this->M_login->getLoginByID($db->id_owner)->name  ?></td>
                                                <td><?php 
                                                $date=date_create($db->date_created_app);
                                                echo date_format($date,"d M Y"); ?>
                                                </td>
                                                <td><?php
                                                if ($db->status == 'diterima') { ?>
                                                    <span class="badge badge-info px-2 py-1">Diterima</span>
                                                <?php } else {?>
                                                    <span class="badge badge-warning px-2 py-1">Belum ada kabar</span>
                                                <?php } ?>
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
 