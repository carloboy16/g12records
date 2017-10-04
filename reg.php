<?php include "tpl/header.php"; ?>
<div class="login_container">
	<div class="container">
	<form class="register">
    <div class="header">
      <h2>Leader Registration</h2>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">First Name<span class="required">*</span></label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" placeholder="First Name" required>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Middle Name<span class="required">(Optional)</span></label>
    <input type="text" name="middlename" class="form-control" id="exampleInputEmail1" placeholder="Middle Name" >
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Last Name<span class="required">*</span></label>
    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Last Name" required>
    </div>

  	<div class="form-group">
    <label for="exampleInputEmail1">USERNAME<span class="required">*</span></label>
    <input type="username" name="username" class="form-control username" id="exampleInputEmail1" placeholder="USERNAME" required>
    <div class="username-availability"></div>
  	</div>

  	<div class="form-group">
  	<label for="exampleInputEmail1">PASSWORD<span class="required">*</span></label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="PASSWORD" required>
  	</div>
    <div class="form-group">
      <label for="exampleInputEmail1">Leadership<span class="required">*</span></label>
    <select class="form-control" name="level" required>
    <option value="1">Pastor</option>
    <option value="2">Primary Leader</option>
    <option value="3">Cell Leader</option>
    <option value="4">Cell Member</option>
    <option value="5">Attender</option>
    </select>
  </div>

	<button class="btn btn-primary login register">Register</button>

    <a href="/login">Back to login</a>
	</form>
	</div>
</div>
<div class="overlay-popup">
  <div class="message"></div>
</div>
<?php include "tpl/footer.php"; ?>
<script src="js/register.js"></script>
