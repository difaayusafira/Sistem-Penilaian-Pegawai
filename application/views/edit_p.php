<div class="content-wrapper">
	
	<section class="content">
		<?php foreach ($pegawai as $peg ) {?>
			<form action="<?php echo base_url('admin/update_peg'); ?>" method="post">

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
	                <select id="jk"  name="jk" class="form-control">
	                	<option value="" selected>-- Pilih Jenis Kelamin --</option>
	                	<option value="Laki Laki">Laki Laki</option>
	                	<option value="Perempuan">Perempuan</option>
	                </select> 
	              </div>

	              <div class="form-group">
	                <label>agama</label>
	                <select id="agama"  name="agama" class="form-control">
	                	<option value="" selected>-- Pilih agama --</option>
	                	<option value="Islam">Islam</option>
	                	<option value="Kristen">Kristen</option>
	                	<option value="Budha">Budha</option>
	                	<option value="Hindu">Hindu</option>
	                	<option value="Katolik">Katolik</option>
	                </select>
	              </div>

	              <div class="form-group">
	                <label>Tanggal Lahir</label>
	                <input type="date" id="tgl_lahir"  name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $peg->tgl_lahir ?>">
	              </div>
	              <button type="reset" class="btn btn-denger" data-dismiss="modal">Reset</button>
	              <button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		<?php }?>
	</section>

</div>