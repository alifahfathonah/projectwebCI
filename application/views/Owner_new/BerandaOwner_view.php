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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><a href="#">WELCOME</a></h3>
                                        <h5 class="text-muted mb-0"><?php echo $this->session->userdata('name') ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- Row -->
               <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-info">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="ml-2 align-self-center">
                                        <h4 class="mb-0 font-weight-light">Verifikasi Email</h4>
                                        <h6 class="text-muted mb-0"><span class="badge badge-success px-2 py-1">Terverifikasi <i class="fas fa-check"></i></span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-warning">
                                        <i class="fas fa-user"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><a href="#">Profil</a></h3>
                                        <h5 class="text-muted mb-0"><span class="badge badge-danger px-2 py-1">Belum Lengkap</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-primary">
                                        <i class="mdi mdi-cart-outline"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><a href="#">Pasang Iklan</a></h3>
                                        <h5 class="text-muted mb-0"><span class="badge badge-success px-2 py-1">Sudah Pasang <i class="fas fa-check"></i></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->

                   <!-- Row -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                    <div class="table-responsive mt-3">
                                        <table class="table stylish-table mb-0 color-table">
                                            <thead>
                                                <tr>
                                                    <th>Lowongan Terpasang</th>
                                                    <th>Tanggal Terbit</th>
                                                    <th>Tanggal Penutupan</th>
                                                    <th>Pelamar</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><h7><a href="#">PROGRAMMER LARAVEL LPKN training center</a></h7></td>
                                                    <td>3 March 2020</td>
                                                    <td>3 Februari 2020</td>
                                                    <td><a href="#"><h3>15</h3></a></td>
                                                    <td><span class="badge badge-warning px-2 py-1">Telah Terbit</span></td>
                                                </tr>
                                                <tr>
                                                    <td><h7><a href="#">Desain Grafis LPKN training center</a></h7></td>
                                                    <td>3 March 2020</td>
                                                    <td>3 Februari 2020</td>
                                                    <td><a href="#"><h3>20</h3></a></td>
                                                    <td><span class="badge badge-danger px-2 py-1">Ditutup</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-outline-warning">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Membership</h4></div>
                            <div class="card-body">
                                <h2 class="card-title">Profesional</h2>
                                <p class="card-text text-center">
                                    <p><b>Maksimal Posting</b> <span class="badge badge-light-info">12</span></p>
                                    <p><b>Maksimal Durasi Waktu</b> <span class="badge badge-light-success">12</span></p>
                                    <p><b>Maksimal Tawaran Pekerjaan</b> <span class="badge badge-light-warning">23</span></p>
                                    <p><b>Tanggal Kadaluarsa</b> <span class="badge badge-light-warning">2023-03-18</span></p>
                                </p>
                                <a href="<?php echo site_url('Owner_new/Paket') ?>" type="button" class="btn btn-dark"><i class="fas fa-cloud-upload-alt"></i> Perbarui Paket</a>
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

            