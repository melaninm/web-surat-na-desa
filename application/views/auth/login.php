<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>login/style.css">
</head>
<style>
body {
  background-image: url('assets/saintek.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
  <div class="text">
    <center><p style="background-color: LightGray; font-size: 30px; ">DATA PRESTASI MAHASISWA <br>JURUSAN TEKNIK INFORMATIKA <br>FAKULTAS SAINS DAN TEKNOLOGI <br>UIN SUNAN GUNUNG DJATI BANDUNG</p></center>
  </div>

  <div class="kotak_login">
      <p class="tulisan_login">Silahkan login</p>

      <?= $this->session->flashdata('message');?>

      <form method="post" action="<?= base_url('auth'); ?>">
        <label>Username</label>
        <input type="text" name="username" id="username" class="form_login" placeholder="masukkan NIM" value="<?= set_value('username');?>">
         <small class="color">
          <?= form_error('username');?>
        </small>

        <label>Password</label>
        <input type="password" name="password" id="password" class="form_login" placeholder="Password">
         <small class="color">
          <?= form_error('password');?>
        </small>

        <input type="submit" class="tombol_login" value="LOGIN">

        <br/>
        <br/>
        <center>
          <a href="<?= base_url('auth/register');?>">Create New Account</a>
        </center>
      </form>

  </div>
</body>
</html>