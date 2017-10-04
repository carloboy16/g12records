<?php include "tpl/header.php"; ?>
<div class="login_container">
	<div class="container">
	<form class="register">
    <div class="header">
      <h2>Login</h2>
    </div>
  	<div class="form-group">
    <label for="exampleInputEmail1">USERNAME</label>
    <input type="username" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
  	</div>
  	<div class="form-group">
  	<label for="exampleInputEmail1">PASSWORD</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
  	</div>
	<button class="btn btn-primary login">LOGIN</button>
  <a href="/register">Are you a leader? register here</a>
	</form>
	</div>
</div>

<?php include "tpl/footer.php"; ?>
<script src="js/login.js"></script>
