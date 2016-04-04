<?php
include 'conf/config.php';
error_reporting(E_ALL ^ E_NOTICE);
$act="modul/tvu/acttvu.php";
$link="?module=tvu&act=tambahtvu";

switch ($_GET[act]) {
	default:
?>
<div class="row-fluid">
	<div class="span3">

	</div>
	<div class="span9">
		<form action="###" class="form">
			<legend>
				<h3>TVU Management</h3>
			</legend>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="span3">
		<form action="###" class="form well">
			<p>
				We've made sure to make designing for Gumby just as easy as to develop with it. There are a few things that you may not know about Gumby that we encourage you to read over. Then get started with our UI Kit and PSD grids. We can't wait to see what you create!

				If you're not already familiar with responsive web design, a term coined by Ethan Marcotte on AListApart, we highly suggest reading that entry as well as others on the idea of RWD(responsive web design). Gumby is a responsive framework and as a designer, understanding the idea of this and how it works is crucial.
			</p>
			<hr>
		</form>
	</div>
	<div class="span9">
		<form class="form-stacked well">
			<input type="text" placeholder="Input ID or Nama Menu">&nbsp;&nbsp;&nbsp;<a href=<?php echo $link; ?> class="btn btn-primary"><i class="icon-pencil icon-white"></i> Add TVU</a>
		</form>
		<!--<div class="alert alert-success">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
			 <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
		</div>-->
		<table class="table table-bordered table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Nama TVU</center></th>
					<th><center>Model</center></th>
					<th><center>Kelengkapan</center></th>
					<th><center>Keterangan</center></th>
					<th><center>Modem</center></th>
					<th><center>Aksi</center></th>
				</tr>
			</thead>
			<?php
				$sql1 = mysql_query("SELECT * from tvu order by kdtvu");
					while ($hasil = mysql_fetch_array($sql1)) {
						$no = $hasil['kdtvu'];
						$nama = $hasil['namatvu'];
						$model = $hasil['model'];
						$Kelengkapan = $hasil['Kelengkapan'];
						$keterangan = $hasil['keterangan'];
						$modem = $hasil['modem'];
			?>
			<tbody>
				<tr>
					<td><center><?= $no; ?></center></td>
					<td><?= $nama; ?></td>
					<td><?= $model; ?></td>
					<td><center><?= $kelengkapan; ?></center></td>
					<td><center><?= $keterangan; ?></center></td>
					<td><center><?= $modem; ?></center></td>
					<td><center><a href=<?php echo"?module=tvu&act=updatetvu&kdtvu=".$no; ?>><i class="icon-edit"></i> Update</a> &nbsp;&nbsp;<a href=<?php echo "$act?module=tvu&act=hapus&kdtvu=$no"; ?>><i class=icon-edit></i> Hapus</a></center></td></center></td>
				</tr>	
			</tbody>
			<?php
			}
			?>													
		</table>
		<?php
		break;
		case "tambahtvu":
		?>
			<div class="row-fluid">
				<div class="span3">
					
				</div>
				<div class='span9'>
					<form>
						<legend>
							<h3>TVU Management</h3>
							<blockquote>
								<p>Add TVU</p>
							</blockquote>
						</legend>
					</form>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<form action="##" class="form well">
						<p>
							ust because something doesn’t do what you planned it to do doesn’t mean it’s useless.    – Thomas Edison
						</p>
						<hr>
					</form>
				</div>
				<div class="span8">
					<body Onload="document.add.idmain.focus();">
						<!--<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
						</div>-->
						<form action="<?php echo "$act?module=tvu&act=input"; ?>" class='form-horizontal span8 offset2 well' name="add" method="POST" id="MenuUtama">
							<table class="span12">
								<tr>
									<td>
										<div class="control-group">
											<label for="id" class="control-label">Kode TVU</label>
											<div class="controls">
												<input type="text" name="kdtvu" id = "kdtvu"placeholder="Masukan Kode TVU .."  >
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="namamenu" class="control-label">Nama TVU</label>
											<div class="controls">
												<input type="text" name="namatvu" id="namatvu" placeholder="Masukan Nomor Mode m..">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Model</label>
											<div class="controls">
												<input type="text" name="model" id="model" placeholder="Masukan Model TVU">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Kelengkapan</label>
											<div class="controls">
												<textarea name="kelengkapan"></textarea>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Keterangan</label>
											<div class="controls">
												<textarea name="keterangan" class="form-control" rows="="8></textarea>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="aktif" class="control-label">Modem</label>										
											<div class="controls">
												<select name="tvu">
													<option value="0" selected>-- Pilih Data --</option>
													<?php
													$tamp = mysql_query("SELECT * FROM modem order by nmmodem");
													while ($data=mysql_fetch_array($tamp)) 
													{
													echo "<option value=$data[kdmodem]>$data[nmmodem]</option>";	
													}
													?>
												</select>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">												
											<div class="controls">
												<button type="submit" class="btn btn-primary" name="submit"><i class="icon-plus-sign icon-white"></i> Save</button> <button type="reset" class="btn btn-primary" onclick="self.history.back()"><i class="icon-remove icon-white"></i> Batal</button>														
											</div>
										</div>
									</td>
								</tr>								
							</table>							
						</form>						
					</body>					
				</div>
			</div>
<?php
break;
case 'updatemodem':
$edit=mysql_query("SELECT * FROM modem where kdtvu='$_GET[kdtvu]' ");
$r = mysql_fetch_array($edit);
?>
			<div class="row-fluid">
				<div class="span3">
					
				</div>
				<div class='span9'>
					<form>
						<legend>
							<h3>Modem Management</h3>
							<blockquote>
								<p>Edit Modem </p>
							</blockquote>
						</legend>
					</form>
				</div>
			</div> 
			<div class="row-fluid">
				<div class="span3">
					<form action="##" class="form well">
						<p>
							The most technologically efficient machine that man has ever invented is the book.
						</p>
						<hr>
					</form>
				</div>
				<div class="span8">
					<body Onload="document.edit.namamenu.focus();">
						<form action="<?php echo "$act?module=modem&act=update";?>" class='form-horizontal span8 offset2 well' name="update" method="POST" id="MenuUtama">
							<input type="hidden" name="kdtvu" value="<?= $r[kdtvu] ?>">
							<table class="span12">
								<tr>
									<td>
										<div class="control-group">
											<label for="id" class="control-label">ID Menu Utama</label>
											<div class="controls">
												<input type="text" name="kdtvu" id="kdtvu" value="<?=$r[kdtvu]?>" disabled>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="namamenu" class="control-label">Nama Menu</label>
											<div class="controls">
												<input type="text" name="namatvu" id="namamenu" value="<?= $r[namatvu] ?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Operator</label>
											<div class="controls">
												<input type="text" name="operator" id="operator" value="<?= $r[operator] ?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Keterangan</label>
											<div class="controls">
												<input type="text" name="keterangan" id="keterangan" value="<?= $r[keterangan] ?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">												
											<div class="controls">
												<button type="submit" class="btn btn-primary" name="submit"><i class="icon-plus-sign icon-white"></i> Update</button> <button type="reset" class="btn btn-primary" onclick="self.history.back()"><i class="icon-remove icon-white"></i> Batal</button>														
											</div>
										</div>
									</td>
								</tr>	 							
							</table>							
						</form>						
					</body>					
				</div>
			</div>
<?php
}
?>