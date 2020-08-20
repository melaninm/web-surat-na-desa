
<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="js/jquery-3.1.0.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
 Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"> Data Warga </h1>

	<div class="row">
		<div class="col-md-3">
			<a class="btn btn-primary" href="<?= base_url('admin/tambah_warga')?>">+ Tambah Warga</a>
		</div>


		<div class="col-md-1.5">
			<p> Tampilkan : </p>
		</div>

		<div class="col-md-2">
			<select class="custom-select">
				<option value="0">Seluruh RW</option>
				<option value="1">RW 01</option>
				<option value="2">RW 02</option>
				<option value="3">RW 03</option>
				<option value="4">RW 04</option>
				<option value="5">RW 05</option>
				<option value="6">RW 06</option>
				<option value="7">RW 07</option>
				<option value="8">RW 08</option>
				<option value="9">RW 09</option>
				<option value="10">RW 10</option>
				<option value="11">RW 11</option>
				<option value="12">RW 12</option>
				<option value="13">RW 13</option>
				<option value="14">RW 14</option>
				<option value="15">RW 15</option>
				<option value="16">RW 16</option>
				<option value="17">RW 17</option>
				<option value="18">RW 18</option>
				<option value="19">RW 19</option>
				<option value="20">RW 20</option>
				<option value="21">RW 21</option>
				<option value="22">RW 22</option>
				<option value="23">RW 23</option>
				<option value="24">RW 24</option>
				<option value="25">RW 25</option>
				<option value="26">RW 26</option>
				<option value="27">RW 27</option>
				<option value="28">RW 28</option>
				<option value="29">RW 29</option>
				<option value="30">Seluruh RT</option>
				<option value="31">RT 01</option>
				<option value="32">RT 02</option>
				<option value="33">RT 03</option>
				<option value="34">RT 04</option>
				<option value="35">RT 05</option>
				<option value="36">RT 06</option>
				<option value="37">RT 07</option>
				<option value="38">RT 08</option>
				<option value="39">RT 09</option>
				<option value="40">RT 10</option>
				<option value="41">RT 11</option>
				<option value="42">RT 12</option>
				<option value="43">RT 13</option>
				<option value="44">RT 14</option>
			</select>
		</div>

		<div class="col-md-1">
			<button type="button" class="btn btn-primary"> Tampil </button>
		</div>
		
		<div class="col-md-1"></div>
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
							<th scope="col">No.KK</th>
							<th scope="col">NIK</th>
							<th scope="col">Nama</th>
							<th scope="col">Alamat</th>
							<th scope="col">Aksi</th>

						</tr>
					</thead>
					<tbody>

						<tr>
							<th scope="col">1.</th>
							<th scope="col">3213213232</th>
							<th scope="col">9932132112</th>
							<th scope="col">Antonius Bagas Dwitomo</th>
							<th scope="col">Komplek Vijaya Kusuma blok K no 9</th>
							<th scope="col">
								<a style="-moz-tab-size: 2;" href="<?= base_url('admin/detail_warga')?>"> <u> Detail </u> </a>
								&emsp;
								<a style="-moz-tab-size: 2; color: red"><u> Hapus </u></a> <!-- fungsi hapus belum masuk controller -->
							</th>
						</tr>
						<tr>
							<th scope="col">2.</th>
							<th scope="col">3213213232</th>
							<th scope="col">9932132112</th>
							<th scope="col">Antonius Bagas Dwitomo</th>
							<th scope="col">Komplek Vijaya Kusuma blok K no 9</th>
							<th scope="col">
								<a style="-moz-tab-size: 2;" href="<?= base_url('admin/detail_warga')?>"> <u> Detail </u> </a>
								&emsp;
								<a style="-moz-tab-size: 2; color: red"><u> Hapus </u></a> <!-- fungsi hapus belum masuk controller -->
							</th>
						</tr>
						<tr>
							<th scope="col">3.</th>
							<th scope="col">3213213232</th>
							<th scope="col">9932132112</th>
							<th scope="col">Antonius Bagas Dwitomo</th>
							<th scope="col">Komplek Vijaya Kusuma blok K no 9</th>
							<th scope="col">
								<a style="-moz-tab-size: 2;" href="<?= base_url('admin/detail_warga')?>"> <u> Detail </u> </a>
								&emsp;
								<a style="-moz-tab-size: 2; color: red"><u> Hapus </u></a> <!-- fungsi hapus belum masuk controller -->
							</th>
						</tr>
						<tr>
							<th scope="col">4.</th>
							<th scope="col">3213213232</th>
							<th scope="col">9932132112</th>
							<th scope="col">Antonius Bagas Dwitomo</th>
							<th scope="col">Komplek Vijaya Kusuma blok K no 9</th>
							<th scope="col">
								<a style="-moz-tab-size: 2;" href="<?= base_url('admin/detail_warga')?>"> <u> Detail </u> </a>
								&emsp;
								<a style="-moz-tab-size: 2; color: red"><u> Hapus </u></a> <!-- fungsi hapus belum masuk controller -->
							</th>
						</tr>
						<tr>
							<th scope="col">5.</th>
							<th scope="col">3213213232</th>
							<th scope="col">9932132112</th>
							<th scope="col">Antonius Bagas Dwitomo</th>
							<th scope="col">Komplek Vijaya Kusuma blok K no 9</th>
							<th scope="col">
								<a style="-moz-tab-size: 2;" href="<?= base_url('admin/detail_warga')?>"> <u> Detail </u> </a>
								&emsp;
								<a style="-moz-tab-size: 2; color: red"><u> Hapus </u></a> <!-- fungsi hapus belum masuk controller -->
							</th>
						</tr>
						<tr>
							<th scope="col">6.</th>
							<th scope="col">3213213232</th>
							<th scope="col">9932132112</th>
							<th scope="col">Antonius Bagas Dwitomo</th>
							<th scope="col">Komplek Vijaya Kusuma blok K no 9</th>
							<th scope="col">
								<a style="-moz-tab-size: 2;" href="<?= base_url('admin/detail_warga')?>"> <u> Detail </u> </a>
								&emsp;
								<a style="-moz-tab-size: 2; color: red"><u> Hapus </u></a> <!-- fungsi hapus belum masuk controller -->
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
<!-- End of Main Content 
<script>
    $(document).ready(function(){
        $('#dataTable').dataTable();
    });
</script>-->