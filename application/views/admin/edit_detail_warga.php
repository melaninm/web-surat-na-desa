<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


	<div class="row">
		<div class="col-md-12">
			<?php echo form_open_multipart('admin/simpan_detail_warga'); ?>
		</div>
		<form action="<?php echo site_url('.....') ?>" method="post" enctype="multipart/form-data">
			<div class="col-md-8">
				<div class="form-group">
					<label for=".....">Nama Lengkap</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Antonius Bagas Dwitomo" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">NIK</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="9932132112" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">NKK</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="3213213232" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Password</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="●●●●●●" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Jenis Kelamin</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Laki-laki" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Agama</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Katholik" />
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
								name="...." value="Bandung" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Tanggal Lahir</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="12/09/99" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Pendidikan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="S1" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Pekerjaan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Insinyur" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Kewarganegaraan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="WNA" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Alamat</label>
					<textarea class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="textarea"
						name="....." value="" min="0"
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
								name="...." value="09" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="....">RW</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="02"/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Desa</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Cisarempit"/>
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
								name="...." value="Cileunyi" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Kabupaten/Kota</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Bandung" />
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
								name="...." value="Jawa Barat"/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Kode Pos</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="40928" />
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Kepala Keluarga</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Christiana Ambar" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Status Pernikahan</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Belum Kawin" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="form-group">
					<label for=".....">Status Hubungan dalam Keluarga</label>
					<input class="form-control <?php echo form_error('.....') ? 'is-invalid' : '' ?>" type="text"
						name="....." value="Anak Kandung" />
					<div class="invalid-feedback">
						<?php echo form_error('.....') ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Nama Ayah</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Christiana Ambar"/>
							<div class="invalid-feedback">
								<?php echo form_error('....') ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="....">Nama Ibu</label>
							<input class="form-control <?php echo form_error('....') ? 'is-invalid' : '' ?>" type="text"
								name="...." value="Christiana Melly"/>
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
				<div class="form-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="image" name="image">
						<label class="custom-file-label" for="image">Choose file</label>
					</div>
				</div>
			</div>
		</div>

	<div class="row">

		<div class="form-group">
			<div class="col-md-4">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
	</form>
</div>

<br>
<br>

</div>
<!-- /.container-fluid -->