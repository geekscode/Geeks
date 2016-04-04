<?php
include 'conf/config.php';
error_reporting(E_ALL ^ E_NOTICE);
$sql1 = mysql_query("SELECT * from mainmenu order by idmain");
					while ($hasil = mysql_fetch_array($sql1)) {
						$no = $hasil['idmain'];
						$nama = $hasil['namamenu'];
						$link1 = $hasil['link'];
						$aktif = $hasil['aktif'];
						}
$act="modul/menuutama/actmenuutama.php";
$link="?module=menuutama&act=tambahmenu";

switch ($_GET[act]) {
	default:
?>
<div class="row-fluid">
	<div class="span3">

	</div>
	<div class="span9">
		<form action="###" class="form">
			<legend>
				<h3>Menu Utama Management</h3>
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
			<input type="text" placeholder="Input ID or Nama Menu">&nbsp;&nbsp;&nbsp;<a href=<?php echo $link; ?> class="btn btn-primary"><i class="icon-pencil icon-white"></i> Add Menu Utama</a>
		</form>
		<!--<div class="alert alert-success">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
			 <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
		</div>-->
		<table class="table table-bordered table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Nama Menu</center></th>
					<th><center>Link</center></th>
					<th><center>Aktif</center></th>
					<th><center>Aksi</center></th>
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
					<td><center><a href=<?php echo"?module=menuutama&act=updatemenu&idmain=".$no; ?>><i class="icon-edit"></i> Update</a> &nbsp;&nbsp;<a href="<?php echo "$act?module=menuutama&act=hapus&idmain=$no"; ?>"><i class=icon-edit></i> Hapus</a></center></td></center></td>
				</tr>	
			</tbody>
			<?php
			}
			?>													
		</table>
		<?php
		break;
		case "tambahmenu":
		?>
			<div class="row-fluid">
				<div class="span3">
					
				</div>
				<div class='span9'>
					<form>
						<legend>
							<h3>Menu Utama Management</h3>
							<blockquote>
								<p>Add Menu Utama</p>
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
						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
						</div>
						<form action="<?php echo "$act?module=menuutama&act=input"; ?>" class='form-horizontal span8 offset2 well' name="add" method="POST" id="MenuUtama">
							<table class="span12">
								<tr>
									<td>
										<div class="control-group">
											<label for="id" class="control-label">ID Menu Utama</label>
											<div class="controls">
												<input type="text" name="idmain" id = "idmenu"placeholder="Masukan ID Menu Utama .."  >
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="namamenu" class="control-label">Nama Menu</label>
											<div class="controls">
												<input type="text" name="namamenu" id="namamenu" placeholder="Masukan Nama Menu ..">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Link</label>
											<div class="controls">
												<input type="text" name="link" id="link" placeholder="Masukan Link">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="aktif" class="control-label">Aktif</label>										
											<div class="controls">
												<input type="radio" name="aktif" value="Y" checked> Y <input type="radio" name="aktif" value="N"> N
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
case 'updatemenu':
$edit=mysql_query("SELECT * FROM mainmenu where idmain='$_GET[idmain]' ");
$r = mysql_fetch_array($edit);
?>
			<div class="row-fluid">
				<div class="span3">
					
				</div>
				<div class='span9'>
					<form>
						<legend>
							<h3>Menu Utama Management</h3>
							<blockquote>
								<p>Edit Menu Utama</p>
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
						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
						</div>
						<form action="<?php echo "$act?module=menuutama&act=update";?>" class='form-horizontal span8 offset2 well' name="update" method="POST" id="MenuUtama">
							<input type="hidden" name="idmain" value="<?= $r[idmain] ?>">
							<table class="span12">
								<tr>
									<td>
										<div class="control-group">
											<label for="id" class="control-label">ID Menu Utama</label>
											<div class="controls">
												<input type="text" name="idmain" id="idmain" value="<?=$r[idmain]?>" disabled>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="namamenu" class="control-label">Nama Menu</label>
											<div class="controls">
												<input type="text" name="namamenu" id="namamenu" value="<?= $r[namamenu] ?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Link</label>
											<div class="controls">
												<input type="text" name="link" id="link" value="<?= $r[link] ?>">
											</div>
										</div>
									</td>
								</tr>
								<?php
									if ($data[aktif]=='Y') {
								
								?>
								<tr>
									<td>
										<div class="control-group">
											<label for="aktif" class="control-label">Aktif</label>										
											<div class="controls">
												<?php echo "<input type='radio' name='aktif' value='Y' checked> Y <input type='radio' name='aktif' value='N'> N"; ?>
											</div>
										</div>
									</td>
								</tr>
								<?php
									}else{
								?>
								<tr>
									<td>
										<div class="control-group">
											<label for="aktif" class="control-label">Aktif</label>										
											<div class="controls">
												<?php echo "<input type='radio' name='aktif' value='Y'> Y <input type='radio' name='aktif' value='N' checked> N"; ?>
											</div>
										</div>
									</td>
								</tr>
								<?php
									}
								?>
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