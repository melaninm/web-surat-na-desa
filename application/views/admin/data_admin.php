<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"> Data Admin </h1>

	<div class="row">
		<div class="col-md-6">
			<a class="btn btn-primary" href="<?= base_url('admin/tambah_admin')?>">+ Tambah Admin</a>
		</div>
		<div class="col-md-1"></div>
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
							<th scope="col">ID User</th>
							<th scope="col">Nama</th>
							<th scope="col">Jabatan</th>
							<th scope="col">Aksi</th>

						</tr>
					</thead>
					<tbody>
						<th scope="col">1.</th>
						<th scope="col">001</th>
						<th scope="col">Dadan Nazril</th>
						<th scope="col">Komplek Permata Biru blok V no 119 RT 04 RW 14</th>
						<th scope="col">
							<a href="<?= base_url('admin/detail_admin')?>"> <u> Detail </u> </a>
						</th>

					</tbody>
				</table>
			</div>
		</div>
	</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->