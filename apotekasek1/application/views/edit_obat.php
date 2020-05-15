<section id="main-content">
    <section class="wrapper">
				<?php foreach ($Obat as $obt) { ?>


				<form action="<?php echo base_url().'Obat/update'; ?>" method="post">
					<div class="form-group">
						<label>Kode Obat</label>
						<input type="hidden" name="kode_obat" class="form-control" value="<?php echo $obt->kode_obat ?>">
						<input type="text" name="kode_obat" class="form-control" value="<?php echo $obt->kode_obat ?>">
					</div>

					<div class="form-group">
						<label>Merk Obat</label>
						<input type="text" name="merk_obat" class="form-control" value="<?php echo $obt->merk_obat ?>">
					</div>

					<div class="form-group">
						<label>Jenis Obat</label>
						<input type="text" name="jenis_obat" class="form-control" value="<?php echo $obt->jenis_obat ?>">
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?php echo $obt->harga ?>">
					</div>

					<div class="form-group">
						<label>Tanggal Kadaluarsa</label>
						<input type="date" name="tanggal_kadaluarsa" class="form-control" value="<?php echo $obt->tanggal_kadaluarsa ?>">
					</div>

					<div class="form-group">
						<label>Stok</label>
						<input type="text" name="stok" class="form-control" value="<?php echo $obt->stok ?>">
					</div>

					<button type="reset" class="btn btn-danger">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>

				</form>
			<?php } ?>
	</section>
</section>
