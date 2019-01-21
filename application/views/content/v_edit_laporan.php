<section class="content-header">
    <h1>
        <?php echo $judul ?>
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $judul ?></li>
    </ol>
</section>
<!-- Content Header (Page header) -->
<section class="content-header">
<center>
		<h3>Tambah data baru</h3>
	</center>
	<?php 

	foreach($laporan as $u){ 

	?>
	
	<form action="<?php echo base_url(). 'crud/tambah_laporan_aksi'; ?>" method="post">
	
	
		<table style="margin:20px auto;">

			<tr>
				<td>Nama</td>
				<?php
					$a = $this->db->where('id_siswa', $u->id_siswa)->get('tbl_siswa');
					if ($a->num_rows()>0) {
						$data = $a->result();
					}else{
						$data=array();
					}
				?>
				<?php foreach ($data as $key): ?>
				
				<td>
					<input type="hidden" name="id" value="<?php echo $key->id_siswa ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $key->nama_siswa?>" readonly>
					
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" class="form-control" value="<?php echo $key->alamat_siswa?>" readonly></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" class="form-control" value="<?php echo $key->nis?>" readonly></td>
				<?php endforeach ?>
			</tr>
			

			<tr>
				<td>kejujuran</td>
				<td><select name="kejujuran" class="form-control">
					<option value="<?=$u->kejujuran?>"><?=$u->kejujuran?></option>
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
			
				</select>
				</td>
			</tr>
			<tr>
				<td>kesopanan</td>
				<td><select name="kesopanan" class="form-control">
				<option value="<?=$u->kesopanan?>"><?=$u->kesopanan?></option>
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>kedisiplinan</td>
				<td><select name="kedisiplinan" class="form-control">
					<option value="<?=$u->kedisiplinan?>"><?=$u->kedisiplinan?></option>
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>kerajinan</td>
				<td><select name="kerajinan" class="form-control">
					<option value="<?=$u->kerajinan?>"><?=$u->kerajinan?></option>
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>kebersihan</td>
				<td><select name="kebersihan" class="form-control">
					<option value="<?=$u->kebersihan?>"><?=$u->kebersihan?></option>
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
					
				</select>
				</td>
			</tr>
			<tr>
				<td>kerapian</td>
				<td><select name="kerapian" class="form-control">
					<option value="<?=$u->kerapian?>"><?=$u->kerapian?></option>
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><b>Hasil Akhir</b></td>
				<td><select name="hasil_akhir" class="form-control">
					<option value="<?=$u->hasil_akhir?>"><?=$u->hasil_akhir?></option>
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	<?=form_close()?>
	
	<?php } ?>

<?php if (!$laporan): ?>
	<form action="<?php echo base_url(). 'crud/tambah_laporan_aksi'; ?>" method="post">
	
	
		<table style="margin:20px auto;">

			<tr>
				<td>Nama</td>
				<?php
					$a = $this->db->where('id_siswa', $id)->get('tbl_siswa');
					if ($a->num_rows()>0) {
						$data = $a->result();
					}else{
						$data=array();
					}
				?>
				<?php foreach ($data as $key): ?>
				
				<td>
					<input type="hidden" name="id" value="<?php echo $key->id_siswa ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $key->nama_siswa?>" readonly>
					
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" class="form-control" value="<?php echo $key->alamat_siswa?>" readonly></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" class="form-control" value="<?php echo $key->nis?>" readonly></td>
				<?php endforeach ?>
			</tr>
			

			<tr>
				<td>kejujuran</td>
				<td><select name="kejujuran" class="form-control">
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
			
				</select>
				</td>
			</tr>
			<tr>
				<td>kesopanan</td>
				<td><select name="kesopanan" class="form-control">
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>kedisiplinan</td>
				<td><select name="kedisiplinan" class="form-control">
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>kerajinan</td>
				<td><select name="kerajinan" class="form-control">
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>kebersihan</td>
				<td><select name="kebersihan" class="form-control">
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
					
				</select>
				</td>
			</tr>
			<tr>
				<td>kerapian</td>
				<td><select name="kerapian" class="form-control">
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><b>Hasil Akhir</b></td>
				<td><select name="hasil_akhir" class="form-control">
					<option>Baik</option>
					<option>Cukup baik</option>
					<option>Sangat Baik</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	<?=form_close()?>
<?php endif ?>