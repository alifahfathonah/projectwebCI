   <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Daftar Paket</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                <?php 
                    foreach ($data_upgrade as $d) {
                        echo '
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <strong class="card-title text-light">'.$d->name_paket.'</strong>
                                </div>
                                <div class="card-body">
                                    <p><b>Maksimal Posting Lowongan Pekerjaan :</b>'.$d->num_post.'<br>
                                    <b>Maksimal Durasi Waktu :</b> '.$d->length_post.'<br>
                                    <b>Maksimal Tawaran Pekerjaan :</b> '.$d->job_inv.'<br>
                                    <b>Jumlah Iklan Premium :</b> '.$d->premium.'<br>
                                    <b>Tanggal Kadaluarsa Paket :</b> '.$d->expired.' Hari<br>
                                    <b>Harga :</b> Rp. '.$d->price.'</p> 
                                        <a  type="button" class="btn btn-success" style="color : white ;" onclick="input_paket('.$d->id_upgrade.')"><i class="fa fa-plus" ></i> Beli </a> 
                                        <a  type="button" class="btn btn-info" style="color : white ;" data-toggle="modal" data-target="#modal_ubah"><i class="fa fa-money" ></i> Cara Pembayaran </a> 

                                </div>
                            </div>
                        </div>
                        ' ;
                    }       
                ?>                    
                </div>
               
        </div>
    </div>    

    <div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" ari-labelleadby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url('Admin/Data_sector/change_sector'); ?>" enctype="multipart/form-data" method="post" >
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_addLabel">Cara Pembayaran</h4>
                </div>
                  <div class="modal-body">
                    <div class="col-md-12">
                        <p>1. Klik tombol beli di paket yang anda inginkan</p>
                        <p>2. Transfer nominal nominal pembayaran sesuai paket anda ke rekening <strong>129048023409</strong></p>
                        <p>3. Upload bukti pembayaran di menu paket anda</p>
                        <p>4. Tunggu konfirmasi lanjutan dari pihak admin</p>
                        <p>5. Jika sudah dikonfirmasi anda bisa menikmati layanan dari web ini sesuai paket anda</p>
                    </div>
                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
  </div>