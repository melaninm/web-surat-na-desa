<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 50px; background-color: grey;">
<div class="row">
  <center><h1>My Profile</h1></center>
  <div class="col-sm-3">
    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-rounded" alt="" width="200" height="336">
  </div>
  <div class="col-sm-4" style="background-color:lavender;">
    <div class="card-body">
      <h5 class="card-title">Nama : <?= $user['name']; ?></h5>
      <p class="card-text">NIM : <?= $user['username']; ?></p>
      <p class="card-text">Jurusan : <?= $user['jurusan']; ?></p>
    </div>
  </div>
</div>
<div class="row"><br></div>
</div>


<div class="container" style="margin-top: 20px; background-color: grey;">
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
      <div class="col-lg-8">
        <?php echo form_open_multipart('user/edit'); ?>

    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
          <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $user['jurusan']; ?>">
              <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2">Picture</div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-3">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
          </div>
          <div class="col-sm-9">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="image">Choose file</label>
          </div>
          </div>
        </div>
      </div>
    </div>
        
    <div class="form-group row justify-content-end">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Edit</button>
        
        <a href="<?= base_url('user/index');?>" class="btn btn-info" role="button">Back</a>
        
      </div>
    </div>

  </form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




</div>

</body>
</html>
