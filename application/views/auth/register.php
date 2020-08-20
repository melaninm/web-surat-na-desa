<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>login/style.css">
</head>
<style>
body {
  background-image: url('assets/saintek.jpg');
  background-color: black;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
  <div class="kotak_login">
      <p class="tulisan_login">Create An New Account</p>

      <form method="post" action="<?= base_url('auth/register'); ?>">

        <label>Nama</label>
        <input type="text" name="name" id="name" class="form_login" placeholder="" value="<?= set_value('name'); ?>">
        <small class="color">
          <?= form_error('name');?>
        </small>

        <label>Username</label>
        <input type="text" name="username" id="username" class="form_login" placeholder="" value="<?= set_value('username'); ?>">

        <small class="color">
          <?= form_error('username');?>
        </small>

        <label>Password</label>
        <input type="password" name="password1" id="password1" class="form_login" placeholder="" >

        <small class="color">
          <?= form_error('password1');?>
        </small>
        <label>Reset</label>
        <input type="password" name="password2" id="password2" class="form_login" placeholder="">

        <input type="submit" class="tombol_login" value="Register Account">
        <hr>
        <center><a href="<?= base_url('auth'); ?>">Kembali ke LOGIN</a></center>
      </form>

    </div>
  </body>
</html>