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
	<?php echo form_open_multipart('crud/tambah_berita_aksi'); ?>
	
	<form>
	<div class="row">
    	<div class="col-lg-12">
        <!-- Form Elements -->
        	<div class="panel panel-default">
           		<div class="panel-body">
                	<div class="row">
                    	<div class="col-lg-6">
    		
							<div class="form-group">
							    <label class="col-form-label" for="formGroupExampleInput4">Tanggal Beritar</label>
							    <div class='input-group date'>
					                    <input type='date' name="tgl_berita" class="form-control" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
							</div><div class="form-group">
								<label class="col-form-label" for="formGroupExampleInput">Judul</label>
							 	<input type="text" name="judul" class="form-control" placeholder="judul berita" required>
							</div>
							<div class="form-group col-sm-6'">
							    <label for="">Isi Berita</label>
							    	<textarea name="berita" class="form-control" rows="3"></textarea>
							</div>
							  <button type="submit" value="Tambah" class="btn btn-primary">Tambahkan</button>

		</form>
	<?=form_close()?>
</section>