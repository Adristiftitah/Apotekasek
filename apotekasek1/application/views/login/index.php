<div id="login-page">
    <div class="container">
      <form class="form-login" role="form" autocomplete="off" id="formLogin" novalidate=""
        method="POST" action="<?php echo base_url('login') ?>">
        <h2 class="form-login-heading" align="center">sign in now</h2>
        <div class="login-wrap">
          <?php echo $this->session->flashdata('pesan')
          ?>
          <input type="text" class="form-control" placeholder="USERNAME" name="username" id="username" required="" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="PASSWORD" name="password" id="password" required="" autocomplete="new-password">
          <br>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <br>
          <div class="alert alert-info" role="alert">
	      	<?php 
	      	 	if (isset($pesan)) {
	      	 		echo $pesan;
	      	 	} else {
	      	 		echo "Masukkan username dan password";
	      	 	}
	      	 	
	      	 ?>
      	 </div>
          <hr>

          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="<?php echo base_url('registrasi/index') ?>">
              Belum Punya Akun? Daftar
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>

              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>

            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>