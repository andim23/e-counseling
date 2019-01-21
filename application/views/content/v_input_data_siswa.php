<section class="content-header">
    <h1>
        Tambah Data Siswa
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Siswa</li>
    </ol>
</section>
<!-- Content Header (Page header) -->
<section class="content-header">
	<?php echo form_open_multipart('crud/tambah_siswa_aksi'); ?>
	
	<form>
	<div class="row">
    	<div class="col-lg-12">
        <!-- Form Elements -->
        	<div class="panel panel-default">
           		<div class="panel-body">
                	<div class="row">
                    	<div class="col-lg-6">
    		
							<div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">Nama</label>
							 	<input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" placeholder="Nama Siswa" required>
							</div>
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput2">NIS</label>
							    <input type="text" name="nis" class="form-control" value="<?php echo $nis; ?>" placeholder="No Induk" required>
							</div>
							<div class="form-group col-md-6">
							    <label for="inputState1">Kelas</label>
							    	<select name="id_kelas" class="form-control" required>
							        <?php
										$a=$this->db->select('*')->get('tbl_kelas');
										$data=$a->result();
										?>
										<option selected></option>
									<?php foreach ($data as $key): ?>
										
									 	<option value="<?=$key->id_kelas?>"><?=$key->nama_kelas?></option>
										?>
									<?php endforeach ?>
								  	</select>
							</div>
							<div class="form-group col-md-6">
							    <label for="inputState">Jenis Kelamin</label>
							      	<select name="jenisKel" value="<?php echo $jenisKel; ?>" class="form-control" required>
							        	<option selected></option>
							        	<option>L</option>
										<option>P</option>
							      	</select>
							</div>
							<div class="form-group col-sm-6'">
							    <label for="">Alamat</label>
							    	<textarea name="alamat" class="form-control" value="<?php echo $alamat; ?>" rows="3"></textarea>
							</div>
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput3">No Telepon</label>
							    <input type="text" name="no_telepon" class="form-control" value="<?php echo $no_telepon; ?>" placeholder="No Telpon" required>
							</div>
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput4">Tanggal Lahir</label>
							    <div class='input-group date' id='datetimepicker1'>
					                    <input type='date' name="tgl_lahir_siswa" class="form-control" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
							</div>
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput5">Tempat Lahir</label>
							    <input type="text" name="tp_lahir" class="form-control" value="<?php echo $tp_lahir; ?>" placeholder="Alamat Lahir" required>
							</div>
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput5">Agama</label>
							    <input type="text" name="agama" class="form-control" value="<?php echo $agama; ?>" placeholder="Agama" required>
							</div>
							<div class="form-group">
							    <label for="exampleFormControlFile1">Pilih Foto</label>
							    <input type="file" class="form-control-file" name="userfile1" required>
							</div>
							  <button type="submit" value="Tambah" class="btn btn-primary">Tambahkan</button>

	</form>
		<!-- <table style="margin:20px auto;">
			<tr>
				<tr>
					<td>Nama</td>
						<td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
				</tr>
				<tr>
					<td>nis</td>
						<td><input type="text" name="nis" value="<?php echo $nis; ?>" required></td>
						</tr>
				
				<tr><td>Jenis Kelamin</td>	
				<td><select name="jenisKel" value="<?php echo $jenisKel; ?>">
				<option>L</option>
				<option>P</option>
				</select>
				</td></tr>
				
				<tr><td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>" required/></td></tr>
				
				<tr><td>No Telepon</td>
				<td><input type="text" name="no_telepon" value="<?php echo $no_telepon; ?>" required/></td></tr>
				
				<tr><td>Tgl Lahir</td>
				<td><input type="date" name="tgl_lahir_siswa" value="<?php echo $tgl_lahir_siswa; ?>" required/></td></tr>
				
				<tr><td>Tempat Lahir</td>
				<td><input type="text" name="tp_lahir" value="<?php echo $tp_lahir; ?>" required/></td></tr>
				
				<tr><td>Agama</td>
				<td><input type="text" name="agama" value="<?php echo $agama; ?>" required/></td>
				</tr>
			
				<tr><td>id kelas</td>
						<td>
							<select name="id_kelas">
							<?php
								$a=$this->db->select('*')->get('tbl_kelas');
								$data=$a->result();
							?>
							<?php foreach ($data as $key): ?>
							 	<option value="<?=$key->id_kelas?>"><?=$key->nama_kelas?></option>
					
							?>
							 <?php endforeach ?>
							</select>
						</td>
					</tr>
			<tr>
				<td>foto</td> 
				<td><input type="file" name="userfile1" size="20" required /></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table> -->
	<?=form_close()?>
</section>