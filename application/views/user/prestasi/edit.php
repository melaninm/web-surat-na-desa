<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('user/tampilan/head.php') ?>
</head>
<body>
	<div>
	<div class="container" style="margin-top: 50px; background-color: #008B8B;">
        <div class="container-fluid" style="margin-top: 20px; margin-bottom: 50px;">

		<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
		<?php endif; ?>

	
		<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('prestasi/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" user/prestasi/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="jenis_p" value="<?php echo $prestasi->jenis_p?>" />

							<div class="form-group">
								<label for="id_user">NIM*</label>
								<input class="form-control <?php echo form_error('id_user') ? 'is-invalid':'' ?>"
								 type="text" name="id_user" placeholder="NIM" value="<?php echo $prestasi->id_user ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_user') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_p">Jenis*</label>
								<input class="form-control <?php echo form_error('jenis_p') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_p" placeholder="Jenis prestasi" value="<?php echo $prestasi->jenis_p ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_p') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tingkat_p">Tingkat*</label>
								<input class="form-control <?php echo form_error('tingkat_p') ? 'is-invalid':'' ?>"
								 type="text" name="tingkat_p" placeholder="NIM" value="<?php echo $prestasi->tingkat_p ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tingkat_p') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="juara">Juara*</label>
								<input class="form-control <?php echo form_error('juara') ? 'is-invalid':'' ?>"
								 type="number" min="0" name="juara" placeholder="Juara" value="<?php echo $prestasi->juara ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('juara') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tahun_p">Tahun*</label>
								<input class="form-control <?php echo form_error('tahun_p') ? 'is-invalid':'' ?>"
								 type="text" name="tahun_p" placeholder="Tahun" value="<?php echo $prestasi->tahun_p ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tahun_p') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="penyelenggara">Penyelenggara*</label>
								<input class="form-control <?php echo form_error('penyelenggara') ? 'is-invalid':'' ?>"
								 type="text" name="penyelenggara" placeholder="Penyelenggara" value="<?php echo $prestasi->penyelenggara ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('penyelenggara') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>
				
	</div>
</div>		

</div>
		
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<?php $this->load->view("user/tampilan/modal.php") ?>
		<?php $this->load->view("user/tampilan/js.php") ?>
</body>
</html>