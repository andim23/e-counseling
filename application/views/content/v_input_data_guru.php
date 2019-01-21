<section class="content-header">
    <h1>
        Input Data Guru
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Data Guru</li>
    </ol>
</section>
<!-- Content Header (Page header) -->
<section class="content-header">
	<?php echo validation_errors(); ?>
	<?php if ($this->session->flashdata('berhasil')) {
		
		
	} ?>
	<?php echo form_open_multipart('crud/tambah_aksi');?>
	
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
							 	<input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" placeholder="Nama Guru" required>
							</div>
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput2">NIP</label>
							    <input type="text" name="nip" class="form-control" value="<?php echo $nip; ?>" placeholder="No Induk" required>
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
							    <label class="col-form-label" for="formGroupExampleInput4">Tanggal Lahir</label>
							    <div class='input-group date' id='datetimepicker1'>
					                    <input type='date' name="tgl_lahir_guru" class="form-control" />
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
								<label class="col-form-label" for="formGroupExampleInput">ID User</label>
							 	<input type="text" id="id_user" name="id_user" class="form-control" placeholder="Iduser" >
							</div>
							<div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">Username</label>
							 	<input type="text" id="v_username" name="username" class="form-control" placeholder="Username" >
							</div>
							<div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">Password</label>
							 	<input type="text" name="password" class="form-control" placeholder="nama kelas" >
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
							<div class="form-group">
							    <label for="exampleFormControlFile1">Pilih Foto</label>
							    <input type="file" class="form-control-file" name="userfile" required>
							</div>
						<button type="submit" value="Tambah" id="disabled" class="btn btn-info">Tambahkan</button>
			
<?=form_close()?>
</section>