<!-- PASANG LOWONGAN -->
    <section class="ftco-section" id="pasanglowongan" style="margin-top: 100px">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-4 text-center heading-section ftco-animate">
            <img src="<?php echo base_url(); ?>assets/landing/images/undraw_multitasking_hqg3.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 text-center heading-section ftco-animate">
            <h1>Reset Password</h1>
              <p>Masukkan alamat email. Anda akan menerima link untuk membuat kata password melalui email.</p>
              <form action="<?php echo base_url('Auth/sendEmailPass'); ?>" method="post">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="email" name="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email anda">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
    </section>

    <!-- PASANG LOWONGAN -->
