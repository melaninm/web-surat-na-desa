<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


	<div class="row">
		<div class="col-md-12">
			<?php echo form_open_multipart('admin/edit_detail_admin'); ?>
		</div>
		<form action="<?php echo site_url('.....') ?>" method="post" enctype="multipart/form-data">
			<div class="col-md-8">
				<div class="form-group">
					<label for=".....">Username</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text" name="....." value ="admin123" readonly />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="....">Password</label>
					<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text" name="....." value="●●●●●●" readonly/>
					<div class="invalid-feedback">
						<?php echo form_error('....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Nama Lengkap</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text" name="....." value="Dadan Nazril" readonly />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Jabatan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text" name="....." value="Staff Desa Cinunuk" readonly/>
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">No HP</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text" name="....." value="0892132122" readonly/>
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group" style="margin-left: 100px;">
					<img src="<?= base_url('assets/img/profile/tes.JPG') ?>" class="img-thumbnail" style width="200" height="210">
					<!-- <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail"> -->
				</div>
			</div>
			<div class="col-md-4">
				<button type="submit" class="btn btn-success">Edit</button> <!-- belum ada fungsi controllernya -->
			</div>
		</form>
	</div>

	<br>
	<br>

</div>
<!-- /.container-fluid -->
