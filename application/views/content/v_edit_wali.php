<section class="content-header">
    <h1>
        Edit Data Wali
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Data Wali</li>
    </ol>
</section>
<!-- Content Header (Page header) -->
<section class="content-header">
	<form action="<?php echo base_url(). 'crud/update_wali'; ?>" method="post">
	
	<div class="row">
		<div class="col-lg-12">
		<!-- Form Elements -->
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<?php foreach($wali as $u){ ?>
							<div class="form-group">
								<label class="col-form-label" for="nama">Nama</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $u->id_ortu ?>">
								<input id="nama" type="text" class="form-control" name="nama" value="<?php echo $u->nama_ortu?>">
							</div>
							<div class="form-group">
								<label class="col-form-label" for="alamat">Alamat</label>
								<input id="alamat" type="text" class="form-control" name="alamat" value="<?php echo $u->alamat?>">
							</div>
							<div class="form-group">
								<label class="col-form-label" for="status_keluarga">Status Keluarga</label>
								<select id="status_keluarga" name="status_keluarga" class="form-control">
									<option value="<?=$u->status_keluarga?>"><?=$u->status_keluarga?></option>
									<option>Bapak</option>
									<option>Ibu</option>
									<option>Wali</option>
								</select>
							</div>
							<div class="form-group">
								<label class="col-form-label" for="j_kelamin_ortu">Jenis Kelamin</label>
								<select id="j_kelamin_ortu" name="jenisKel" class="form-control">
									<option value="<?=$u->j_kelamin_ortu?>"><?=$u->j_kelamin_ortu?></option>
									<option>L</option>
									<option>P</option>
								</select>
							</div>
							<div class="form-group">
								<label class="col-form-label" for="telepon_ortu">Nama</label>
								<input id="telepon_ortu" type="text" class="form-control" name="no_telepon" value="<?php echo $u->telepon_ortu?>">
							</div>
							<div class="form-group">
								<label class="col-form-label" for="pekerjaan">Nama</label>
								<input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="<?php echo $u->pekerjaan?>">
							</div>
							<div class="form-group">
								<label class="col-form-label" for="KIP">KIP</label>
								<input id="KIP" type="text" class="form-control" name="KIP" value="<?php echo $u->KIP?>">
							</div>
							<input type="submit" class="btn btn-info" value="Simpan">
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div><!-- /.panel-body -->
			</div><!-- /.panel.panel-default -->
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->
	</form>	

</section>
	<?php } ?>
