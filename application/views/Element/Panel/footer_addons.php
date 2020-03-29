            <!-- ============================================================== -->
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
   <!--  <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/jquery/jquery.min.js"></script> -->
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
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
        type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/multiselect/js/jquery.multi-select.js"></script>


    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });

    //select2
    jQuery(document).ready(function() {
        jQuery('.js-example-basic-multiple').select2();
    });

    //get daerah
    function get_kab(prov)
    {
        jQuery('#kabupaten').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Worker_new/Resume/get_kabupaten/'+prov, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#kabupaten').append('<option value="'+value.id+'">'+value.name_regencies+'</option>');
            })
        });
    }    

    function get_kec(kab)
    {
        jQuery('#kecamatan').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Worker_new/Resume/get_kecamatan/'+kab, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#kecamatan').append('<option value="'+value.id+'">'+value.name_districts+'</option>');
            })
        });
    } 

    function get_desa(kec)
    {
        jQuery('#desa').empty();

        jQuery.getJSON('<?php echo base_url() ; ?>Worker_new/Resume/get_desa/'+kec, function(data){
            jQuery.each(data, function(index,value){
                jQuery('#desa').append('<option value="'+value.id+'">'+value.name_villages+'</option>');
            })
        });
    }      

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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>