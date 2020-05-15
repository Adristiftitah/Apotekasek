<section id="main-content">
    <section class="wrapper">
        <div class="row">
				<h1>
					Data Pelanggan
					<small>Control Panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
					<li class="active">Data Pelanggan</li>
				</ol>
		</div>
		<section class="content">
		<button class="btn btn-theme02" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Pelanggan</button>
		<br><br>
		<!--<div class="navbar-form navbar-right">
			<?php echo form_open('Pelanggan/search') ?>

			<input type="text" name="keywoard" class="form-control" placeholder="Search">
			<button type="submit" class="btn btn-success">Cari</button>

			<?php echo form_close() ?>
		</div>-->

		<table id="datatables" class="display">
			<thead>
			<tr>
				<th>kode_pelanggan</th>
				<th>nama_pelanggan</th>
				<th>alamat</th>
				<th>AKSI</th>
			</tr>
			</thead>

			<tbody>
			<?php  
			$kode_pelanggan = 1;
			foreach ($Pelanggan as $plgn):?>
			<tr>
				<td>
					<?php echo $kode_pelanggan++ ?>
				</td>
				<td>
					<?php echo $plgn->nama_pelanggan ?>
				</td>
				<td>
					<?php echo $plgn->alamat ?>
				</td>
				<td>
					<a href="<?= base_url('Pelanggan/hapus/').$plgn->kode_pelanggan?>" class="btn btn-danger" onclick="javascript: return confirm('Anda Yakin Hapus')"><i class="fa fa-trash"></i></a>
					<a href="<?= base_url('Pelanggan/edit_pelanggan/').$plgn->kode_pelanggan?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
	        <h4 class="modal-title" id="exampleModalLabel">Form Pelanggan</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" class="cmxform form-horizontal style-form" id="signupForm" action="<?php echo base_url().'Pelanggan/tambah_aksi'?>">
	        	<!-- Kode Pelanggan -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Kode Pelanggan</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="kode_pelanggan" name="kode_pelanggan" type="text"/>
                    </div>
	        	</div>
	        	<!-- Nama Pelanggan -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Nama Pelanggan</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="nama_pelanggan" name="nama_pelanggan" type="text"/>
                    </div>
	        	</div>
	        	<!--Alamat -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Alamat</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="alamat" name="alamat" type="text"/>
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

	
