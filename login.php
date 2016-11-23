<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/me.css">
</head>
<body>
<div class="container">

      <form class="form-signin"  method="POST" action="auth.php">
      	<div class="row">
      		<div class="col-md-12">
      			<h2 class="text-center">Login</h2>
      		</div>
      		<div class="col-md-12">
      			<label for="user">Nama Pengguna</label>
      			<input type="text" id="user" name="user" class="form-control text-center" placeholder="Nama Pengguna" required autofocus>
      		</div>
      		<div class="col-md-12">
      			<label for="pass">Password</label>
      			<input type="password" id="pass" name="pass" class="form-control text-center" placeholder="Password" required>
      		</div>
      		<div class="col-md-12">
      			<button style="margin-top: 15px;" class="btn btn-lg btn-info btn-block" type="submit">Masuk</button>
      		</div>
      	</div>
      </form>

 </div>
</body>
</html>