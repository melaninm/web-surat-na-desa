<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"> Data Rekap </h1>

	<div class="row">

		<div class="col-md-4">
			<select class="custom-select">
				<option value="0">Pengajuan Surat</option>
				<option value="1">Pendaftaran Akun</option>
			</select>
		</div>

		<div class="col-md-3"><div> &nbsp; </div></div>
		<div class="col-md-1"></div>
		&emsp;&emsp;
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
			<div class="table-responsive" style="overflow-x: hidden;">
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
							<th scope="col">Akbar Hidayatullah Harahap</th>
							<th scope="col">17/08/20</th>
							<th scope="col"><span class="badge badge-success">Disetujui <i class="fas fa-check-circle"></i> </span></th>
							<th scope="col"> <a  href="<?= base_url('admin/detail_data_rekap')?>"> <u> Detail </u>
							</th>
						</tr>

						<tr>
							<th scope="col">3.</th>
							<th scope="col">002</th>
							<th scope="col">Surat Pengantar Nikah</th>
							<th scope="col">M. Aqil Al-Muhtadi</th>
							<th scope="col">17/08/20</th>
							<th scope="col"><span class="badge badge-danger">Ditolak <i class="far fa-times-circle"></i> </span></th>
							<th scope="col"> <a href="<?= base_url('admin/detail_data_rekap')?>"> <u> Detail </u>
							</th>
						</tr>
					</tbody>
				</table>
				<div class="row">
                  <div class="col">
                  <?php echo $this->pagination->create_links();?>
                  </div>
                </div>
			</div>
		</div>
	</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->