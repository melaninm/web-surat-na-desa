<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<h1><center>Data Prestasi Mahasiswa</center></h1>
	<table>
		<tr>
			<th scope="col", width="20">No</th>
            <th scope="col", width="100">Nama</th>
            <th scope="col", width="100">NIM</th>
            <th scope="col", width="100">Jenis Prestasi</th>
            <th scope="col", width="100">Tingkat Prestasi</th>
            <th scope="col", width="100">Juara ke</th>
            <th scope="col", width="100">Tahun Prestasi</th>
            <th scope="col", width="100">Penyelenggara</th>
		</tr>

		<?php $i = 1; ?>
	    <?php foreach($prestasi as $p) : ?>
	    <tr>
	      <th scope="row"><?= $i; ?></th>
	      <th><?= $p['name']?></th>
	      <th><?= $p['username']?></th>
	      <th><?= $p['jenis_p']?></th>
	      <th><?= $p['tingkat_p']?></th>
	      <th><?= $p['juara']?></th>
	      <th><?= $p['tahun_p']?></th>
	      <th><?= $p['penyelenggara']?></th>
	    </tr>
	      
	    <?php $i ++;?>
	    <?php endforeach; ?>

	</table>
</body></html>