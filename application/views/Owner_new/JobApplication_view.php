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
                        <h3 class="text-themecolor">Job Applications</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Job Applications</li>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Pelamar</h4>
                                <h6 class="card-subtitle">Lowongan Kerja Anda</h6>
                                <div class="table-responsive">
                                    <table class="table color-table muted-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Apply</th>
                                                <th>Pelamar</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($applied_vacancy as $d) {
                                            ?>
                                            <tr>
                                               <td><h5><?php 
                                               $date=date_create($d->date_created_app);
                                                echo date_format($date,"d M Y");
                                                ?></h5></td>
                                               <td><h6><a href="#"><?php echo $this->M_login->getLoginByID($d->id_pelamar)->name ?></a></h6><small class="text-muted"><?php echo $d->title ?></small></td>
                                               <td><?php if ($d->status_app == 'diterima') { ?>
                                                        <span class="badge badge-info px-2 py-1">Diterima</span>
                                                   <?php } ?>
                                               </td>
                                               <td>
                                                <?php if ($d->status_app != 'diterima') { ?>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                          <button type="button" class="btn btn-success">Accept</button>
                                                          <button type="button" class="btn btn-danger">Decline</button>
                                                        </div>
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
 