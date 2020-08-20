<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<div class="col-lg-8">
			<?php echo form_open_multipart('admin/profile'); ?>


			<div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo site_url('admin/profile') ?>"><i class="fas fa-arrow-left"></i> Back</a>
				</div>
				<div class="card-body">

					<form action="<?php echo site_url('.....') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for=".....">No. Kartu Keluarga</label>
							<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>"
								type="text" name="....." />
							<div class="invalid-feedback">
								<?php echo form_error('.....') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="....">NIK</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>

						<div class="form-group">
							<label for=".....">Nama Lengkap</label>
							<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>"
								type="text" name="....." />
							<div class="invalid-feedback">
								<?php echo form_error('.....') ?>
							</div>
						</div>


						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for=".....">RT</label>
									<br>
									<select class="custom-select">
										<option value="0">Pilih RT</option>
										<option value="1">RT 01</option>
										<option value="2">RT 02</option>
										<option value="3">RT 03</option>
										<option value="4">RT 04</option>
										<option value="5">RT 05</option>
										<option value="6">RT 06</option>
										<option value="7">RT 07</option>
										<option value="8">RT 08</option>
										<option value="9">RT 09</option>
										<option value="10">RT 10</option>
										<option value="11">RT 11</option>
										<option value="12">RT 12</option>
										<option value="13">RT 13</option>
										<option value="14">RT 14</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for=".....">RW</label>
									<br>
									<select class="custom-select">
										<option value="0">Pilih RW</option>
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
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for=".....">Alamat</label>
							<textarea class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>"
								type="text" name="....." min="0" style="height : 100px"></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('.....') ?>
							</div>
						</div>


						<input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
					</form>

				</div>

			</div>

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
