<section id="main-content" style="margin-top: 20px">
    <section class="wrapper">
        <div class="row">
				<h1>
					Data Obat
					<small>Control Panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
					<li class="active">Data Obat</li>
				</ol>
		</div>
		<section class="content">
		<button class="btn btn-theme02" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Obat</button>

		<!-- <div class="navbar-form navbar-right">
			<?php //echo form_open('Obat/search') ?>

			<input type="text" name="keywoard" class="form-control" placeholder="Search">
			<button type="submit" class="btn btn-success">Cari</button>

			<?php echo form_close() ?>
		</div> -->


		<table id="datatables" class="display">
		<thead>
			<tr>
				<th>kode_obat</th>
	            <th>merk_obat</th>
	            <th>jenis_obat</th>
	            <th>harga</th>
	            <th>tanggal_kadaluarsa</th>
	            <th>stok</th>
	            <th>aksi</th>
			</tr> 
		</thead>

		<tbody>
			<?php  
			$kode_obat = 1;
			foreach ($Obat as $obt):?>
			<tr>
				<td>
					<?php echo $kode_obat++ ?>
				</td>
				<td>
					<?php echo $obt->merk_obat ?>
				</td>
				<td>
					<?php echo $obt->jenis_obat ?>
				</td>
				<td>
					<?php echo $obt->harga ?>
				</td>
				<td>
					<?php echo $obt->tanggal_kadaluarsa ?>
				</td>
				<td>
					<?php echo $obt->stok ?>
				</td>
				<td>
					<a href="<?= base_url('Obat/hapus/').$obt->kode_obat?>" class="btn btn-danger" onclick="javascript: return confirm('Anda Yakin Hapus')"><i class="fa fa-trash"></i></a>
					<a href="<?= base_url('Obat/edit_obat/').$obt->kode_obat?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
	        <h4 class="modal-title" id="exampleModalLabel">Form Obat</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" class="cmxform form-horizontal style-form" id="signupForm" action="<?php echo base_url().'Obat/tambah_aksi'?>">
	        	<!-- Kode Obat -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Kode Obat</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="kode_obat" name="kode_obat" type="text"/>
                    </div>
	        	</div>
	        	<!-- Merk Obat -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Merk Obat</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="merk_obat" name="merk_obat" type="text"/>
                    </div>
	        	</div>
	        	<!-- Jenis Obat -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Jenis Obat</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="jenis_obat" name="jenis_obat" type="text"/>
                    </div>
	        	</div>
	        	<!-- Harga -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Harga</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="harga" name="harga" type="text"/>
                    </div>
	        	</div>
	        	<!-- Tanggal Kadaluarsa -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Tanggal Kadaluarsa</label>
	        		<div class="col-md-3 col-xs-11">
	                      <input type="date" class="form-control" name="tanggal_kadaluarsa">
                    
                    </div>
	        	</div>
	        	<!-- Stok -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Stok</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="stok" name="stok" type="text"/>
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

	
