         <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/material-pro/material/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/material-pro/material/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/material-pro/material/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/material-pro/material/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/d3/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url(); ?>assets/material-pro/material/js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <!-- datatable and select2 -->
    <script src="<?php echo base_url(); ?>assets/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> -->


    <!-- form add ons -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
        type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/multiselect/js/jquery.multi-select.js"></script>


    <script type="text/javascript">
        $(document).ready( function () {
                $('#myTable').DataTable(
            {
            "ordering": false,
            }
              );
      } );


    jQuery(document).ready(function() {

      <?php
        $notif = $this->session->flashdata('notif');
        $type = $this->session->flashdata('type');

      ?>
            if("<?php echo $type ; ?>" == "success"){
                 swal("SUCCESS", "<?php echo $notif ; ?>", "success");
            }else if("<?php echo $type ; ?>" == "error"){
                 swal("GAGAL", "<?php echo $notif ; ?>", "error");
            } else if("<?php echo $type ; ?>" == "id_login"){
                  swal("Selamat Datang", "<?php echo $this->session->userdata('name') ; ?>");
               
            }
    });

    </script>
</body>

</html>