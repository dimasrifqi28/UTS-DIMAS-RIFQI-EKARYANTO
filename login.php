<?php
 include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>

	<style type="text/css">
		* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: sans-serif;
}
a {
  color: #666;
  font-size: 14px;
  display: block;
}
.logo {
  width: 190px;
  height: 60px;
  background: #DDD;
}
.login-title {
  flex-basis: 100%;
}
#login-page {
  display: flex;
}
.login {
   margin: 100px auto;
        width: 400px;
        padding: 5px;
        background: #FFF;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  align-content: center;
  text-align: center;
}
.login a {
  margin-top: 25px;
}
.form-login label {
  text-align: left;
  font-size: 13px;
  margin-top: 5px;
  display: block;
  color: #666;
}
.input-email,
.input-password {
  width: 100%;
  background: #DDD;
  border-radius: 5px;
  margin: 4px 0 8px 0;
  padding: 10px;
  float: left;
  display: flex;
}
.icon {
  padding: 4px;
  color: #666;
  min-width: 30px;
  text-align: center;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 4px 0;
  outline: none;
}
input[type="submit"] {
  width: 100%;
  border: 0;
  border-radius: 25px;
  padding: 14px;
  background: #008552;
  color: #FFF;
  display: inline-block;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  margin-top: 10px;
}


	</style>
</head>
<body>
<div id="login-page">
  <div class="login">
    <h2 class="login-title">Silahkan Login</h2>
    <?php
      if (isset($message)) {
        echo "Username dan Password salah";
      }
    ?>
    <form class="form-login"  method="POST">
      <label for="email">Username (admin)</label>
      <div class="input-email">
        <i class="fas fa-envelope icon"></i>
        <input type="text" name="Username" placeholder="Masukkan Username">
      </div>
      <label for="password">Password (admin)</label>
      <div class="input-password">
        <i class="fas fa-lock icon"></i>
        <input type="password" name="Password" placeholder="Masukkan Password">
      </div>
      <input type="submit" value="Login" name="login">
    </form>
      <a href="#">Buat Akun Baru</a>
  </div>
  <div class="background">
    
  </div>
</div>
</body>
</html>