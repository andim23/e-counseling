<section class="content-header">
    <h1>
        Input Data Wali
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Data Wali</li>
    </ol>
</section>
<!-- Content Header (Page header) -->
<section class="content-header">
	<form action="<?php echo base_url(). 'crud/tambah_wali_aksi'; ?>" method="post">
	
	<div class="row">
    	<div class="col-lg-12">
        <!-- Form Elements -->
        	<div class="panel panel-default">
           		<div class="panel-body">
                	<div class="row">
                    	<div class="col-lg-6">
    		
							<div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">Nama</label>
							 	<input type="text" name="nama_ortu" class="form-control" value="<?php echo $nama_ortu; ?>" placeholder="nama wali" required>
							</div><!-- 
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput2">ID Siswa</label>
							    <input type="text" name="id_siswa" class="form-control" value="<?php echo $id_siswa; ?>" placeholder="id siswa" required>
							</div> -->
							<div class="form-group">
							    <label class="col-form-label" for="NIS">NIS</label>
							    <input id="inp-nis" type="text" name="nis" class="form-control" value="<?php echo $nis; ?>" placeholder="NIS" required>
							</div>
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput2">Status Keluarga</label>
							    <select name="status_keluarga" value="<?php echo $status_keluarga; ?>" class="form-control" required>
							        	<option>Bapak</option>
										<option>Ibu</option>
										<option>Wali</option>
							      	</select>
							</div>
							<div class="form-group">
							    <label for="inputState">Jenis Kelamin</label>
							      	<select name="jenisKel" value="<?php echo $jenisKel; ?>" class="form-control" required>
							  
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
								<label class="col-form-label" for="formGroupExampleInput">Pekerjaan</label>
							 	<input type="text" name="pekerjaan" class="form-control" value="<?php echo $pekerjaan; ?>" placeholder="pekerjaan wali" required>
							</div>
							<div class="form-group">
							    <label for="inputState">KIP</label>
							      	<select name="KIP" value="<?php echo $KIP; ?>" class="form-control" required>
							  
							        	<option>YES</option>
										<option>NO</option>
							      	</select>
							</div>
							<div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">ID User</label>
							 	<input type="text" id="id_user" name="id_user" class="form-control" placeholder="Iduser" required>
							</div>
							<div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">Username</label>
							 	<input type="text" id="v_username" name="username" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">Password</label>
							 	<input type="text" name="password" class="form-control" placeholder="nama kelas" required>
							</div>
							<div class="form-group">
								<label class="col-form-label">Akses</label>
									<select name="group" class="form-control" required>
										<?php
											$a=$this->db->select('*')->get('group');
											$data=$a->result();
										?>
										<?php foreach ($data as $key): ?>
								
										<option value="<?=$key->id_group?>"><?=$key->nama?></option>
										?>
										<?php endforeach ?>
								  	</select>
							</div>
							<button type="submit" value="Tambah" id="disabled" class="btn btn-info">Tambah</button>
						</div>
						<div class="col-lg-6" id="div-detail_siswa" style="display:none"><!-- 
				        	<div class="panel panel-default">
				           		<div class="panel-body">
				           		tes
				           		</div>
				           	</div> -->
				        	<div class="panel panel-default">
				           		<div class="panel-body">
					           		<div id="div-detail_siswa_notfound">
					           		<h3 class="text-muted" style="margin:0">Maaf, tidak ditemukan siswa dengan NIS <span>"<span id="nf-nis"></span>"</span></h3>
					           		</div>
					           		<div id="div-detail_siswa_found">
					           			<h3 style="margin-top:0">Data Siswa</h3>
					           			<table class="table table-striped table-hover">
					           				<tr>
					           					<td style="font-weight:bold">NIS</td>
					           					<td id="td-nis">23424</td>
					           				</tr>
					           				<tr>
					           					<td style="font-weight:bold">Nama</td>
					           					<td id="td-nama_siswa">Umam</td>
					           				</tr>
					           				<tr>
					           					<td style="font-weight:bold">Alamat</td>
					           					<td id="td-alamat">Jl. DI Pandjaitan No. 128, Purwokerto</td>
					           				</tr>
					           				<tr>
					           					<td style="font-weight:bold">Jenis Kelamin</td>
					           					<td id="td-jenis_kel">Laki-laki</td>
					           				</tr>
					           				<tr>
					           					<td style="font-weight:bold">Tempat Lahir</td>
					           					<td id="td-tempat_lahir">Brebes</td>
					           				</tr>
					           				<tr>
					           					<td style="font-weight:bold">Tanggal Lahir</td>
					           					<td id="td-tgl_lahir">19 Des 1996</td>
					           				</tr>
					           				<tr>
					           					<td style="font-weight:bold">Agama</td>
					           					<td id="td-agama">Islam</td>
					           				</tr>
					           			</table>
					           		</div>
				           		</div>
				           	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>
