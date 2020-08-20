<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<!-- Search form -->

	<h1 class="h3 mb-4 text-gray-800">Pengajuan Surat</h1>

	<div class="card mb-3">

		<div class="card-body">
			<div class="row">
				<div class="col-md-7">
					<div> &nbsp; </div>
				</div>
				&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="col-md-0.2">
					<p> Cari : </p>
				</div>

				<div class="col-md-3">
					<input class="form-control" type="text" aria-label="Search">
				</div>
			</div>

			<br>
			<div class="table-responsive">
				<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>

							<th scope="col">No</th>
							<th scope="col">ID Surat</th>
							<th scope="col">Jenis Pengajuan</th>
							<th scope="col">Pengaju</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Status</th>
							<th scope="col">Aksi</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="col">1.</th>
							<th scope="col">001</th>
							<th scope="col">Surat Pengantar Nikah</th>
							<th scope="col">M Humam Wahisyam</th>
							<th scope="col">17/08/20</th>
							<th scope="col"><span class="badge badge-warning">Pending <i class="fas fa-exclamation-circle"></i> </span></th>
							<th scope="col"><a href="<?= base_url('admin/detail_pengajuan_surat')?>"> <u> Detail </u> </th>
						</tr>

						<tr>
							<th scope="col">2.</th>
							<th scope="col">002</th>
							<th scope="col">Surat Pengantar Nikah</th>
							<th scope="col">Akbar Hidayatullah Harahap</th>
							<th scope="col">17/08/20</th>
							<th scope="col"><span class="badge badge-success">Disetujui <i class="fas fa-check-circle"></i> </span></th>
							<th scope="col"><a href="<?= base_url('admin/detail_pengajuan_surat')?>"> <u> Detail </u> </th>
						</tr>

						<tr>
							<th scope="col">3.</th>
							<th scope="col">003</th>
							<th scope="col">Surat Pengantar Nikah</th>
							<th scope="col">M. Aqil Al-Muhtadi</th>
							<th scope="col">17/08/20</th>
							<th scope="col"><span class="badge badge-danger">Ditolak <i class="far fa-times-circle"></i> </span></th>
							<th scope="col"><a href="<?= base_url('admin/detail_pengajuan_surat')?>"> <u> Detail </u> </th>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<br>
	<br>



	<h1 class="h3 mb-4 text-gray-800">Pendaftaran Akun</h1>

	<div class="card mb-3">
		<div class="card-body">
			<div class="row">

				<div class="col-md-7">
					<div> &nbsp; </div>
				</div>
				&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="col-md-0.2">
					<p> Cari : </p>
				</div>

				<div class="col-md-3">
					<input class="form-control" type="text" aria-label="Search">
				</div>
			</div>

			<br>
			<div class="card mb-3">

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>

									<th scope="col">No</th>
									<th scope="col">No.KK</th>
									<th scope="col">NIK</th>
									<th scope="col">Nama Lengkap</th>
									<th scope="col">Alamat</th>
									<th scope="col">Aksi</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="col">1.</th>
									<th scope="col">3213213213212</th>
									<th scope="col">9913213213213</th>
									<th scope="col">Melani Nurul Mudyawati</th>
									<th scope="col">Komplek Permata Biru blok X no 109 RT 05 RW 27</th>
									<th scope="col"><a href="sksk"> <u> Detail </u></a> </th>
								</tr>

								<tr>
									<th scope="col">1.</th>
									<th scope="col">3213213213212</th>
									<th scope="col">9913213213213</th>
									<th scope="col">Fauzan Herdika Tubagus Putra</th>
									<th scope="col">Komplek Permata Biru blok AG no 14 RT 04 RW 24</th>
									<th scope="col"><a href="sksk"> <u> Detail </u> </th>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
