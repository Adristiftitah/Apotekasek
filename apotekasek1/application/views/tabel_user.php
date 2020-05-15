<section id="main-content">
    <section class="wrapper">
        <div class="row">
				<h1>
					Data User
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
					<li class="active">Data User</li>
				</ol>
		</div>
		<section class="content">
		<button class="btn btn-theme02" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data User</button>
		<br><br>
		<!--<div class="navbar-form navbar-right">
			<?php echo form_open('data_user/search') ?>

			<input type="text" name="keywoard" class="form-control" placeholder="Search">
			<button type="submit" class="btn btn-success">Cari</button>

			<?php echo form_close() ?>
		</div>-->

		<table id="datatables" class="display">
			<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
				<th>Role Id</th>
				<th>Status</th>
				<th>AKSI</th>
			</tr>
			</thead>
			<tbody>

			<?php  
			$no = 1;
			foreach ($User as $us):?>
			<tr>
				<td>
					<?php echo $no++ ?>
				</td>
				<td>
					<?php echo $us->nama ?>
				</td>
				<td>
					<?php echo $us->username ?>
				</td>
				<td>
					<?php echo $us->password ?>
				</td>
				<td>
					<?php if ($us->role_id == 1) {
						echo "admin";
					}else{
						echo "user";
					} ?>
				</td>
				<td>
					<?php if ($us->status == 0) {
						echo "<span class='badge badge-secondary'>Pending</span>";
					}else{
						echo "<span class='badge badge-success'>Aktif</span>";
					} ?>
				</td>
				<td>
					<a href="<?= base_url('data_user/hapus/').$us->id?>" class="btn btn-danger" onclick="javascript: return confirm('Anda Yakin Hapus')"><i class="fa fa-trash"></i></a>
					<a href="<?= base_url('User/edit_user/').$us->id?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</section>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">Form User</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<?php  
	      	foreach ($User as $usr):?>
	        <form method="post" class="cmxform form-horizontal style-form" id="signupForm" action="<?php echo base_url().'User/edit_user_simpan'?>">
	        	<!-- Id -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Id</label>
	        		<div class="col-lg-10" align="center">
                      <input class=" form-control" id="idn" name="id" type="text"/>
                    </div>
	        	</div>
	        	<!-- Nama -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Nama</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="nama" name="nama" type="text"/>
                    </div>
	        	</div>

	        	<!-- Username -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Username</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="username" name="username" type="text"/>
                    </div>
	        	</div>

	        	<!-- Password -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Password</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="password" name="password" type="text"/>
                    </div>
	        	</div>

	        	<!--Role id -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Role Id</label>
	        		<select name="role_id" class="form-control">
	        			<option value="<?= $usr->role_id?>" >
	        				<?php if(($usr->role_id) == 1){
	        					echo "admin";
	        				} else{
	        					echo "user";
	        				} ?>
	        			</option>
	        			<option value="1">Admin</option>
	        			<option value="2">User</option>
	        		</select>
	        		<?= form_error('role_id', '<div class="text-small text-danger">','</div>') ?>
	        	</div>

	        	<!--Alamat -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Status</label>
						<select name="status" class="form-control">
		        			<option value="<?= $usr->status?>">
		        				<?php if(($usr->status) == 0){
		        					echo "pending";
		        				} else{
		        					echo "aktif";
		        				} ?>
		        			</option>
		        			<option value="0">Pending</option>
		        			<option value="1">Aktif</option>
		        		</select>
		        		<?= form_error('status', '<div class="text-small text-danger">','</div>') ?>
	        	</div>

	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	        	<button type="submit" class="btn btn-primary">Simpan</button>
	        </form>
	    <?php endforeach ?>
	      </div>
	    </div>
	  </div>
	</div>
</section>