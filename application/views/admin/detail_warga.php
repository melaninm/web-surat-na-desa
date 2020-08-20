<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


	<div class="row">
		<div class="col-md-12">
			<?php echo form_open_multipart('admin/edit_detail_warga'); ?>
		</div>
		<form action="<?php echo site_url('.....') ?>" method="post" enctype="multipart/form-data">
			<div class="col-md-8">
				<div class="form-group">
					<label for=".....">Nama Lengkap</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Antonius Bagas Dwitomo" readonly/>
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">NIK</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="9932132112" readonly />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">NKK</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="3213213232" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Password</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="●●●●●●" readonly/>
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Jenis Kelamin</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Laki-laki" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Agama</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Katholik" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Tempat Lahir</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Bandung" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Tanggal Lahir</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="12/09/99" readonly />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Pendidikan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="S1" readonly/>
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Pekerjaan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Insinyur" readonly />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Kewarganegaraan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="WNA" readonly />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Alamat</label>
					<textarea class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="textarea"
						name="....." value="" readonly min="0"
						style="height : 100px">Komplek Vijaya Kusuma blok K no 9</textarea>
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="....">RT</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="09" readonly />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="....">RW</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="02" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Desa</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Cisarempit" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Kecamatan</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Cileunyi" readonly />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Kabupaten/Kota</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Bandung" readonly />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Provinsi</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Jawa Barat" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Kode Pos</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="40928" readonly />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Kepala Keluarga</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Christiana Ambar" readonly />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Status Pernikahan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Belum Kawin" readonly />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Status Hubungan dalam Keluarga</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Anak Kandung" readonly />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Nama Ayah</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Christiana Ambar" readonly />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Nama Ibu</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Christiana Melly" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group" style="margin-left: 100px;">
					<img src="<?= base_url('assets/img/profile/tes.JPG') ?>" class="img-thumbnail" style width="200" height="210">
					<!-- <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail"> -->
				</div>
			
			</div>
		</div>

	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<button type="submit" class="btn btn-success">Edit</button> <!-- belum ada fungsi controllernya -->
			</div>
		</div>

	</div>
	</form>
</div>

<br>
<br>

</div>
<!-- /.container-fluid -->