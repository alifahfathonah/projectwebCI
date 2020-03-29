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
                        <h3 class="text-themecolor">Kelola Iklan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kelola Iklan</li>
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
                                <h4 class="card-title">Daftar Iklan</h4>
                                <h6 class="card-subtitle">Lowongan Kerja Anda</h6>
                                <div class="table-responsive">
                                    <table class="table color-table muted-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Close Date</th>
                                                <th>Pelamar</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach ($data_vacancy as $d) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><a href="#"><?php echo $d->title ?></a></td>
                                                <td>23 Maret 2020</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                      <button type="button" class="btn btn-info">Menunggu</button>
                                                      <button type="button" class="btn btn-success">Diterima</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php if ($d->status == 'dibuka') { ?>
                                                        <span class="badge badge-light-info">Dibuka</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-light-danger">Ditutup</span>
                                                    <?php } ?>
                                                </td>
                                                <td><div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                      <button type="button" class="btn btn-info"><i class="far fa-edit"></i></button>
                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                      <button type="button" class="btn btn-warning"><i class="fas fa-times"></i></button>
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
 