<section id="main-content">
    <section class="wrapper">
				<?php foreach ($Beli as $bl) { ?>

				<form action="<?php echo base_url().'Beli/update'; ?>" method="post">
					<div class="form-group">
						<label>Kode Beli</label>
						<input type="hidden" name="kode_beli" class="form-control" value="<?php echo $bl->kode_beli ?>">
						<input type="text" name="kode_beli" class="form-control" value="<?php echo $bl->kode_beli ?>">
					</div>

					<div class="form-group">
						<label>Kode Pelanggan</label>
						<input type="text" name="kode_pelanggan" class="form-control" value="<?php echo $bl->kode_pelanggan ?>">
					</div>

					<div class="form-group">
						<label>Kode Obat</label>
						<input type="text" name="kode_obat" class="form-control" value="<?php echo $bl->kode_obat ?>">
					</div>

					<div class="form-group">
						<label>Jenis Obat</label>
						<input type="text" name="jenis_obat" class="form-control" value="<?php echo $bl->jenis_obat ?>">
					</div>

					<div class="form-group">
						<label>Banyak Beli</label>
						<input type="text" name="banyak_beli" class="form-control" value="<?php echo $bl->banyak_beli ?>">
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?php echo $bl->harga ?>">
					</div>

					<div class="form-group">
						<label>Tanggal Beli</label>
						<input type="date" name="tanggal_beli" class="form-control" value="<?php echo $bl->tanggal_beli ?>">
					</div>

					<button type="reset" class="btn btn-danger">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			<?php } ?>
	</section>
</section>
