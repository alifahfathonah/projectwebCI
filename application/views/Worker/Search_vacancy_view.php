   <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Cari Pekerjaan</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">             
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Cari Pekerjaan Impianmu</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo base_url() ; ?>Worker/Search_vacancy/get_vacancy_by_search" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                         <div class="col-lg-4 col-sm-6">
                                            <select name="category" id="category"  class=" form-control js-example-basic-single" >
                                            <option value="">Pilih Kategori</option>
                                            <?php
                                                $no = 0;
                                                foreach ($data_category as $d) {
                                                    echo '<option value="'.$d->id_category.'">'.$d->name_category.'</option>' ; 
                                                }
                                            ?>
                                            </select>
                                        </div>

                                         <div class="col-lg-4 col-sm-6">
                                            <select name="kabupaten" id="kabupaten"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih Lokasi</option>
                                                <?php
                                                    $no = 0;
                                                    foreach ($data_kab as $d) {
                                                        echo '<option value="'.$d->id.'">'.$d->name_regencies.'</option>' ; 
                                                    }
                                                ?>      
                                            </select>
                                        </div>

                                         <div class="col-lg-4 col-sm-6">
                                            <select name="education" id="education"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih Pendidikan</option>
                                                <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                                <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                                <option value="S1">S1 </option>
                                                <option value="S2">S2 </option>
                                                <option value="S3">S3 </option>
                                            </select>
                                        </div>

                                    </div>                                    
                                    <div class="row form-group">
                                         <div class="col-lg-4 col-sm-6">
                                            <select name="tipe_worker" id="tipe_worker"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih tipe pekerjaan</option>
                                                 <option value="Freelance">Freelance</option>
                                                 <option value="Tetap">Tetap</option>
                                                 <option value="Kontrak">Kontrak</option>
                                                 <option value="Paruh Waktu">Paruh Waktu</option>
                                                 <option value="Magang">Magang</option>
                                            </select>
                                        </div>
                                        
                                         <div class="col-lg-4 col-sm-6">
                                            <select name="salary" id="salary"  class=" form-control js-example-basic-single" >
                                                <option value="">Pilih gaji</option>
                                                 <option value=" > 10jt"> > 10jt</option>
                                                 <option value="5 - 10 jt">5 - 10 jt</option>
                                                 <option value="2 - 5 jt">2 - 5 jt</option>
                                                 <option value="1 - 2 jt">1 - 2 jt</option>
                                                 <option value="Negosiasi">Negosiasi</option>
                                            </select>
                                        </div>

                                    </div>                                    

                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <input type="text" name="title" placeholder="Cari Pekerjaanmu" class="form-control">
                                                <div class="input-group-btn"><input class="btn btn-primary" type="submit" value="cari"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>         
                </div>
               
        </div>
    </div>    