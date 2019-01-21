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
	<?php foreach($guru as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<div class="row">
		    <div class="col-lg-12">
		    <!-- Form Elements -->
		        <div class="panel panel-default">
		    		<div class="panel-body">
		           		<div class="row">
		                    	<div class="col-lg-6">
		        <div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="hidden" name="id" value="<?php echo $u->id_guru ?>">
						<input type="text" name="nama" class="form-control" value="<?php echo $u->nama_guru?>">
					</div>
				</div>
				<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat_guru?>">
					</div>
				</div>
				<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Nis</label>
					<div class="col-sm-10">
						<input type="text" name="nip" class="form-control" value="<?php echo $u->nip?>">
					</div>
				</div>			
				<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kel</label>
					<div class="col-sm-10">
						<select name="jenisKel" class="form-control">
							<option value="<?=$u->j_kelamin_guru?>"><?=$u->j_kelamin_guru?></option>
							<option>L</option>
							<option>P</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">No telepon</label>
					<div class="col-sm-10">
						<input type="text" name="no_telepon" class="form-control" value="<?php echo $u->telepon_guru?>">
					</div>
				</div>
				<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-10">
						<input type="text" name="tp_lahir" class="form-control" value="<?php echo $u->tpt_lahir_guru?>">
					</div>
				</div>
				<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Tgl Lahir</label>
					<div class="input-group col-sm-7">
						<input type="date" name="tgl_lahir_guru" class="form-control" value="<?php echo $u->tgl_lahir_guru?>">
							<span class="input-group-addon">
					                <span class="glyphicon glyphicon-calendar"></span>
					        </span>
					</div>
				</div>
				<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">Agama</label>
					<div class="col-sm-10">
						<input type="text" name="agama" class="form-control" value="<?php echo $u->agama?>">
					</div>
				</div>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
	</section>