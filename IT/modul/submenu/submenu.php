<?php
include 'conf/config.php';
error_reporting(E_ALL ^ E_NOTICE);
$act="modul/submenu/actsubmenu.php";
$link="?module=submenu&act=tambahmenu";

switch ($_GET[act]) {
	default:
?>
<div class="row-fluid">
	<div class="span3">

	</div>
	<div class="span9">
		<form action="###" class="form">
			<legend>
				<h3>Sub Menu Management</h3>
			</legend>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="span3">
		<form action="###" class="form well">
			<p>
				This is the whole point of technology.  It creates an appetite for immortality on the one hand.  It threatens universal extinction on the other. Technology is lust removed from nature. – Don DeLillo (Author)
			</p>
			<hr>
		</form>
	</div>
	<div class="span9">
		<form class="form-stacked well">
			<input type="text" placeholder="Input ID or Nama Menu">&nbsp;&nbsp;&nbsp;<a href="<?php echo "$link"; ?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Add Sub Menu Utama</a>
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
					<th><center>Menu Utama</center></th>
					<th><center>Link Sub Menu</center></th>
					<th><center>Aksi</center></th>
				</tr>
			</thead>
			<?php
				$sql1 = mysql_query("SELECT submenu.idsub,submenu.namasub,submenu.linksub, submenu.idmain, mainmenu.idmain, mainmenu.namamenu from submenu,mainmenu WHERE submenu.idmain = mainmenu.idmain order by idsub");
					while ($hasil = mysql_fetch_array($sql1)) {
						$no = $hasil['idsub'];
						$nama = $hasil['namasub'];
						$menuutama = $hasil['namamenu'];
						$link = $hasil['linksub'];
						
			?>
			<tbody>
				<tr>
					<td><center><?= $no; ?></center></td>
					<td><?= $nama; ?></td>
					<td><?= $menuutama; ?></td>
					<td><center><?= $link; ?></center></td>
					<td><center><a href=<?php echo"?module=submenu&act=updatesub&idsub=".$no; ?>><i class="icon-edit"></i> Edit</a> &nbsp;&nbsp;<a href="<?php echo "$act?module=submenu&act=hapus&idsub=$no"; ?>"><i class=icon-edit></i> Hapus</a></center></td>
				</tr>	
			</tbody>
			<?php
			}
			?>													
		</table>
	</div>
<?php
break;
case 'tambahmenu';
?>

			<div class="row-fluid">
				<div class="span3">
					
				</div>
				<div class='span9'>
					<form>
						<legend>
							<h3>Sub Menu Management</h3>
							<blockquote>
								<p>Add Sub Menu </p>
							</blockquote>
						</legend>
					</form>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<form action="##" class="form well">
						<p>
							"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
							"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
						</p>
						<hr>
					</form>
				</div>
				<div class="span8">
					<body Onload="document.add.idutama.focus();">
						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
						</div>
						<form action="<?php echo "$act?module=submenu&act=input"; ?>" class='form-horizontal span8 offset2 well' name="add" method="POST" id="SubMenu">
							<table class="span12">
								<tr>
									<td>
										<div class="control-group">
											<label for="id" class="control-label">ID Sub Menu Utama</label>
											<div class="controls">
												<input type="text" name="idsub" id = "idsub"placeholder="Masukan ID Menu Utama .."  >
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
											<label for="namamenu" class="control-label">Menu Utama</label>
											<div class="controls">
												<select name="mainmenu">
													<option value="0" selected>-- Pilih Data --</option>
													<?php
													$tamp = mysql_query("SELECT * FROM mainmenu where aktif='N' order by namamenu");
													while ($data=mysql_fetch_array($tamp)) 
													{
													echo "<option value=$data[idmain]>$data[namamenu]</option>";	
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
			case 'updatesub':
			$edit = mysql_query("SELECT * FROM submenu where idsub='$_GET[idsub]'");
			$r = mysql_fetch_array($edit);
			?>

			<div class="row-fluid">
				<div class="span3">
					
				</div>
				<div class='span9'>
					<form>
						<legend>
							<h3>Sub Menu Utama Management</h3>
							<blockquote>
								<p>Edit Sub Menu Utama</p>
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
		<body Onload="document.edit.namasub.focus();">
			<!--<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Sub Menu akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Sub Menu akan ditampilkan di halaman administrator. 
			</div>-->
			<form action="<?php echo "$aksi?module=submenu&act=update"; ?>" class='form-horizontal span8 offset2 well' name="edit" method="POST" id="SubMenu">

				<table class="span12">
					<input type="hidden" name="idsub" value="<?=$r[idsub]?>">
					<tr>
						<td>
							<div class="control-group">
								<label for="id" class="control-label">ID Sub Menu </label>
								<div class="controls">
									<input type="text" name="idsub" value="<?=$r[idsub]?>" disabled >
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namasub" class="control-label">Nama Sub Menu</label>
							<div class="controls">
								<input type="text" name="namasub" id="namasub" value="<?= $r[namasub]?>">
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namamenu" class="control-label">Nama Menu</label>
								<div class="controls">
									<select name="menu_utama">
										<option value="0" selected>-- Pilih Data --</option>
										<?php
											$tamp = mysql_query("SELECT * from mainmenu order by namamenu ");
											while ($main = mysql_fetch_array($tamp)) {
												?>
												<option value="<?= $main[idmain]?>"><?= $main[namamenu] ?></option>
												<?php
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
								<label for="link" class="control-label">Link</label>
								<div class="controls">
									<input type="text" name="linksub" id="link" value="<?= $r[linksub]?>">
								</div>
							</div>
						</td>
					</tr>
					<?
						}else{					
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="aktif" class="control-label">Aktif</label>										
								<div class="controls">
								<?php echo "<input type='radio' name='aktif' value='Y'> Y <input type='radio' name='aktif' value='N' checked> N";?>
								</div>
							</div>
						</td>
					</tr>
					<?php
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
			?>
<?php
}
?>