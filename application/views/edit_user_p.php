
    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Your Profil</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="<?php echo base_url() ?>/assets/user/images/hero_1.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
             
            <?php foreach ($pegawai as $peg ) {?>
                <form action="<?php echo base_url('user_peg/update'); ?>" method="post">

                          <div class="form-group">
                            <label>Nik</label>
                            <input type="hidden" name="id_pegawai" value="<?php echo $peg->id_pegawai ?>" class="form-control">
                            <input type="text" id="nik"  name="nik" class="form-control" placeholder="Nik" value="<?php echo $peg->nik ?>">
                          </div>
                    <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama" value="<?php echo $peg->name ?>">
                          </div>

                          <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" id="email"  name="email" class="form-control" placeholder="E-mail" value="<?php echo $peg->email ?>">
                          </div>

                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" id="jk"  name="jk" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $peg->jk ?>">
                          </div>

                          <div class="form-group">
                            <label>agama</label>
                            <input type="text" id="agama"  name="agama" class="form-control" placeholder="Agama" value="<?php echo $peg->agama ?>">
                          </div>

                          <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" id="tgl_lahir"  name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $peg->tgl_lahir ?>">
                          </div>
                          <button type="reset" class="btn btn-denger" data-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            <?php }?>
            
            
          </div>
        </div>
      </div>
    </section>
