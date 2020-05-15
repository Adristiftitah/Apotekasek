<section id="main-content">
    <section class="wrapper">
        <div class="row">
				<h1>
					Data Pembelian
					<small>Control Panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
					<li class="active">Data Pembelian</li>
				</ol>
		</div>
		<section class="content">
		<button class="btn btn-theme02" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Pembelian</button>
		<br><br>
		<!-- <div class="navbar-form navbar-right">
			<?php echo form_open('Beli/search') ?>

			<input type="text" name="keywoard" class="form-control" placeholder="Search">
			<button type="submit" class="btn btn-success">Cari</button>

			<?php echo form_close() ?>
		</div>-->

		<table id="datatables" class="display">
		<thead>
			<tr>
				<th>kode_beli</th>
				<th>nama_pelanggan</th>
				<th>merk_obat</th>
				<th>jenis_obat</th>
				<th>banyak_beli</th>
				<th>harga</th>
				<th>tanggal_beli</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			$kode_beli = 1;
			foreach ($Beli as $bl):?>
			<tr>
				<td>
					<?php echo $kode_beli++ ?>
				</td>
				<td>
					<?php echo $bl->nama_pelanggan ?>
				</td>
				<td>
					<?php echo $bl->merk_obat ?>
				</td>
				<td>
					<?php echo $bl->jenis_obat ?>
				</td>
				<td>
					<?php echo $bl->banyak_beli ?>
				</td>
				<td>
					<?php echo $bl->harga ?>
				</td>
				<td>
					<?php echo $bl->tanggal_beli ?>
				</td>
				<td>
					<a href="<?= base_url('Beli/hapus/').$bl->kode_beli?>" class="btn btn-danger" onclick="javascript: return confirm('Anda Yakin Hapus')"><i class="fa fa-trash"></i></a>
					<a href="<?= base_url('Beli/edit_beli/').$bl->kode_beli?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
		</table>
	</section>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">Form Pembelian</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" class="cmxform form-horizontal style-form" id="signupForm" action="<?php echo base_url().'Beli/tambah_aksi'?>">
	        	<!-- Kode Pembelian -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Kode Pembelian</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="kode_beli" name="kode_beli" type="text"/>
                    </div>
	        	</div>
	        	<!-- Kode Pelanggan -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Kode Pelanggan</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="kode_pelanggan" name="kode_pelanggan" type="text"/>
                    </div>
	        	</div>
	        	<!--Kode Obat -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Kode Obat</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="kode_obat" name="kode_obat" type="text"/>
                    </div>
	        	</div>
	        	<!--Jenis Obat -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Jenis Obat</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="jenis_obat" name="jenis_obat" type="text"/>
                    </div>
	        	</div>
	        	<!--Banyak Beli -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Banyak Beli</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="banyak_beli" name="banyak_beli" type="text"/>
                    </div>
	        	</div>
	        	<!--Harga -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Harga</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="harga" name="harga" type="text"/>
                    </div>
	        	</div>
	        	<!--Tanggal Beli -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Tanggal Beli</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="tanggal_beli" name="tanggal_beli" type="date"/>
                    </div>
	        	</div>
	        	
	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	        	<button type="submit" class="btn btn-primary">Simpan</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
</section>

	
