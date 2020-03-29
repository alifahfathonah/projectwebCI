<!-- PASANG LOWONGAN -->
    <section class="ftco-section" id="pasanglowongan" style="margin-top: 100px">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-4 text-center heading-section ftco-animate">
            <img src="<?php echo base_url(); ?>assets/landing/images/undraw_multitasking_hqg3.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 text-center heading-section ftco-animate">
            <h1>Reset Password</h1>
              
              <form action="<?php echo base_url('Auth/updatePass'); ?>" method="post">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Password Baru<span style="color: red">*</span></label>
                  <div class="col-sm-8">
                    <input type="password" name="pass_baru" class="form-control-sm form-control" id="pass1" placeholder="Password">
                    <input type="hidden" name="token" class="form-control-sm form-control" value="<?php echo $this->uri->segment(3); ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Konfirmasi Password Baru<span style="color: red">*</span></label>
                  <div class="col-sm-8">
                    <input type="password" name="konfirmasi_pass" class="form-control form-control-sm" id="pass2" placeholder="Konfirmasi Password">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
           </form>
          </div>
        </div>
    </section>

    <!-- PASANG LOWONGAN -->
