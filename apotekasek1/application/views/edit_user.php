<section id="main-content">
    <section class="wrapper">
    	<div class="row">
				<h2 align="center">
					Edit Data User
				</h2><br><br>
		</div>
		<section class="content">

        	<?php foreach ($User as $usr):?>
	        <form method="post" class="cmxform form-horizontal style-form" id="signupForm" action="<?php echo base_url().'User/edit_user_simpan'?>">

			
			
				<!-- Nama -->
				<input type="hidden" class="form-control" id="id" name="id" type="text" value="<?= $usr->id ?>">
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Nama</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="nama" name="nama" type="text" value="<?= $usr->nama ?>" />
                    </div>
	        	</div>

	        	<!-- Username -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Username</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="username" name="username" type="text" value="<?= $usr->username ?>"/>
                    </div>
	        	</div>

	        	<!-- Password -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Password</label>
	        		<div class="col-lg-10">
                      <input class=" form-control" id="password" name="password" type="text" value="<?= $usr->password ?>"/>
                    </div>
	        	</div>

	        	<!--Role id -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Role Id</label>
	        		<div class="col-lg-10" align="center">
	        		<select name="role_id" class="form-control">
	        			<option value="<?= $usr->role_id?>">
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
	        	</div>

	        	<!--Status -->
	        	<div class="form-group">
	        		<label class="control-label col-lg-2">Status</label>
	        		<div class="col-lg-10">
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
	        	</div>

	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	        	<button type="submit" class="btn btn-primary">Simpan</button>
	        </form>
	    <?php endforeach ?>
	</section>
	</section>
</section>