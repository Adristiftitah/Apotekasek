<section id="main-content">
    <section class="wrapper">
				<?php foreach ($Pelanggan as $plgn) { ?>


				<form action="<?php echo base_url().'Pelanggan/update'; ?>" method="post">
					<div class="form-group">
						<label>Kode Pelanggan</label>
						<input type="hidden" name="kode_pelanggan" class="form-control" value="<?php echo $plgn->kode_pelanggan ?>">
						<input type="text" name="kode_pelanggan" class="form-control" value="<?php echo $plgn->kode_pelanggan ?>">
					</div>

					<div class="form-group">
						<label>Nama Pelanggan</label>
						<input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $plgn->nama_pelanggan ?>">
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?php echo $plgn->alamat ?>">
					</div>

					<button type="reset" class="btn btn-danger">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>

				</form>
			<?php } ?>
	</section>
</section>
