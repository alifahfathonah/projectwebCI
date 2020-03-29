 <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><?php 
                            if ($this->session->userdata('level') == '2') {
                                echo "AKUN PERUSAHAAN";
                            } elseif ($this->session->userdata('level') == '1') {
                                echo "AKUN PENCARI KERJA";
                            } else {
                                echo "ADMIN";
                            }

                         ?></li>

                         <?php if($this->session->userdata('level') == '2') { ?>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Owner_new/Dashboard_owner') ?>" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Owner_new/Vacancy/vacancy_result') ?>" aria-expanded="false"><i
                                    class="mdi mdi-file"></i><span class="hide-menu">Kelola Iklan</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Owner_new/Owner_profil') ?>" aria-expanded="false"><i
                                    class="mdi mdi-brush"></i><span class="hide-menu">Edit Profil </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Owner_new/Paket') ?>" aria-expanded="false"><i class="mdi mdi-cart-outline"></i><span class="hide-menu">Beli Paket </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Owner_new/Dashboard_owner/jobApplication') ?>" aria-expanded="false"><i
                                    class="mdi mdi-book-multiple"></i><span class="hide-menu">Job Applications </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Owner_new/Dashboard_owner/jobInvitation') ?>" aria-expanded="false"><i
                                    class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Job Invitation </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Owner_new/Search_resume') ?>" aria-expanded="false"><i class="ti-search"></i><span class="hide-menu">Cari Kandidat </span></a>
                            </li>
                        <?php } elseif($this->session->userdata('level') == '1') {?> 
                             <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Worker_new/Dashboard_worker') ?>" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Worker_new/Worker_profil') ?>" aria-expanded="false"><i
                                    class="mdi mdi-brush"></i><span class="hide-menu">Edit Profil </span></a>
                            </li>
                            <?php if ($this->session->userdata('status_resume') != '1') { ?>
                                <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Worker_new/Resume') ?>" aria-expanded="false"><i
                                        class="mdi mdi-file-chart"></i><span class="hide-menu">Buat Resume </span></a>
                                </li>
                            <?php } ?>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Worker_new/Bookmark') ?>" aria-expanded="false"><i
                                    class="mdi mdi-book-open-variant"></i><span class="hide-menu">Bookmark </span></a>
                            </li>
                             <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Worker_new/Search_vacancy/get_vacancy_applied') ?>" aria-expanded="false"><i
                                    class="mdi mdi-book-multiple"></i><span class="hide-menu">Lamaran Pekerjaan </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Undangan Pekerjaan </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo site_url('Worker_new/Search_vacancy') ?>" aria-expanded="false"><i class="ti-search"></i><span class="hide-menu">Cari Lowongan </span></a>
                            </li>
                        <?php } ?>   
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="<?php echo site_url('Auth/logout') ?>" class="link" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->