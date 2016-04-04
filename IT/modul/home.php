<?php include 'conf/config.php';
error_reporting(E_ALL ^ E_NOTICE);
	$sql1 = mysql_query("SELECT * from mainmenu order by idmain");
		while ($hasil = mysql_fetch_array($sql1)) {
		$no = $hasil['idmain'];
		$nama = $hasil['namamenu'];
		$link1 = $hasil['link'];
		$aktif = $hasil['aktif'];
	}
?>
<div class="container">
	<div class="row">
		<div class="span12">
		<h2>TVU</h2>
		<table class="table table-bordered table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Nama Menu</center></th>
					<th><center>Link</center></th>
					<th><center>Aktif</center></th>
					<!--<th><center>Aksi</center></th>-->
				</tr>
			</thead>
			<?php
				$sql1 = mysql_query("SELECT * from mainmenu order by idmain");
					while ($hasil = mysql_fetch_array($sql1)) {
						$no = $hasil['idmain'];
						$nama = $hasil['namamenu'];
						$link1 = $hasil['link'];
						$aktif = $hasil['aktif'];						
			?>
			<tbody>
				<tr>
					<td><center><?= $no; ?></center></td>
					<td><?= $nama; ?></td>
					<td><?= $link1; ?></td>
					<td><center><?= $aktif; ?></center></td>
				</tr>	
			</tbody>
			<?php
			}
			?>													
		</table>
		</div>
		<div class="span12">
			<h2>Modem</h2>
		<table class="table table-bordered table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Nama Menu</center></th>
					<th><center>Link</center></th>
					<th><center>Aktif</center></th>
					<!--<th><center>Aksi</center></th>-->
				</tr>
			</thead>
			<?php
				$sql1 = mysql_query("SELECT * from mainmenu order by idmain");
					while ($hasil = mysql_fetch_array($sql1)) {
						$no = $hasil['idmain'];
						$nama = $hasil['namamenu'];
						$link1 = $hasil['link'];
						$aktif = $hasil['aktif'];						
			?>
			<tbody>
				<tr>
					<td><center><?= $no; ?></center></td>
					<td><?= $nama; ?></td>
					<td><?= $link1; ?></td>
					<td><center><?= $aktif; ?></center></td>
				</tr>	
			</tbody>
			<?php
			}
			?>													
		</table>
		</div>
		<div class="span12">
						<h2>Bgan</h2>
		<table class="table table-bordered table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Nama Menu</center></th>
					<th><center>Link</center></th>
					<th><center>Aktif</center></th>
					<!--<th><center>Aksi</center></th>-->
				</tr>
			</thead>
			<?php
				$sql1 = mysql_query("SELECT * from mainmenu order by idmain");
					while ($hasil = mysql_fetch_array($sql1)) {
						$no = $hasil['idmain'];
						$nama = $hasil['namamenu'];
						$link1 = $hasil['link'];
						$aktif = $hasil['aktif'];						
			?>
			<tbody>
				<tr>
					<td><center><?= $no; ?></center></td>
					<td><?= $nama; ?></td>
					<td><?= $link1; ?></td>
					<td><center><?= $aktif; ?></center></td>
				</tr>	
			</tbody>
			<?php
			}
			?>													
		</table>
		</div>
	</div>
</div>