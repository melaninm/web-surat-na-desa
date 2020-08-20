<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('user/tampilan/head.php') ?>
</head>
<body>
	<div></div>
	<div class="container" style="margin-top: 50px; background-color: #008B8B;">
        <div class="container-fluid" style="margin-top: 20px; margin-bottom: 100px;">

		<!-- DataTables -->
		<div class="card mb-3">
			<div class="card-header">
				<a href="<?php echo site_url('prestasi/add') ?>">
					<button class="btn btn-primary mb-3">Add</button>
				</a>
				<a href="<?php echo site_url('user/') ?>">
					<button class="btn btn-primary mb-3">Back</button>
				</a>
			</div>
			<div class="card-body">

				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>NIM</th>
								<th>Jenis Prestasi</th>
								<th>Tingkat</th>
								<th>Juara Ke</th>
								<th>Tahun</th>
								<th>Penyelenggara</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($prestasi as $prestasi): ?>
							<tr>
								<td width="150">
									<?php echo $prestasi->id_user ?>
								</td>
								<td>
									<?php echo $prestasi->jenis_p ?>
								</td>
								<td>
									<?php echo $prestasi->tingkat_p ?>
								</td>
								<td>
									<?php echo $prestasi->juara ?>
								</td>
								<td>
									<?php echo $prestasi->tahun_p ?>
								</td>
								<td>
									<?php echo $prestasi->penyelenggara ?>
								</td>
								<td width="250">
									<a href="<?php echo site_url('prestasi/edit/'.$prestasi->jenis_p) ?>">
									 	<button class="btn btn-info">EDIT</button>
									</a>
									<a onclick="deleteConfirm('<?php echo site_url('prestasi/delete/'.$prestasi->jenis_p) ?>')"
									 href="<?php echo site_url('prestasi/delete/'.$prestasi->jenis_p) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
								</td>
							</tr>

							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
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