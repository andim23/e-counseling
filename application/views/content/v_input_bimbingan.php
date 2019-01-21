<style type="text/css">
.flex-center {
  display: flex;
  align-items: center;
  justify-content: center;
}

</style>
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
  <?php foreach($siswa as $u){ ?>

	<form action="<?php echo base_url(). 'crud/tambah_bimbingan_aksi'; ?>" method="post">
  <div class="panel panel-default">
    <div class="panel-body">
    	<div class="row">
    		<div class="col-lg-6">
				  <center>
				    <h3 style="margin-top:0">Tambah data baru</h3>
				  </center>
				  <div class="form-group row">
				    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-10">
				      <input type="hidden" name="id" value="<?php echo $u->id_siswa ?>">
				      <input type="text" name="nama" class="form-control" value="<?php echo $u->nama_siswa?>" readonly>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
				    <div class="col-sm-10">
				      <input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat_siswa?>" readonly>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="colFormLabel" class="col-sm-2 col-form-label">Nis</label>
				    <div class="col-sm-10">
				      <input type="text" name="nis" class="form-control" value="<?php echo $u->nis?>" readonly>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="colFormLabel" class="col-sm-2 col-form-label">Pembimbing</label>
				    <div class="col-sm-10">
				      <input type="text" name="pembimbing" class="form-control" value="<?php echo $this->session->userdata("nama"); ?>" readonly>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal</label>
				    <div class="col-sm-10">
					    <div class="input-group date">
					      <input type="date" name="tgl_bimbingan" class="form-control">
					      <span class="input-group-addon">
					      <span class="glyphicon glyphicon-calendar"></span>
					      </span>
					    </div>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="colFormLabel" class="col-sm-2 col-form-label">Perihal</label>
				    <div class="col-sm-10">
				    	<textarea class="form-control" name="hal_bimbingan" rows="4" required></textarea>
				    </div>
				  </div>
				  <input type="submit" class="btn btn-info" value="Tambah">
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        	<div class="panel panel-default">
        		<div class="panel-body">
        			<?php if ($riwayat_0->num_rows()+$riwayat_1->num_rows()>0): ?>        				
        			<h4>Riwayat Pelanggaran</h4>
        			<div class="table-responsive">
        				<table class="table table-hover table-striped">
        					<thead>
        						<tr>
        							<th>No</th>
        							<th>Pelanggaran yang dilakukan</th>
        							<th>Tanggal</th>
        						</tr>
        					</thead>
        					<tbody>
        						<?php $c=1;if ($riwayat_0->num_rows()>0): ?>
        						<tr style="background:#eee">
        							<td class="text-muted" colspan="3" align="center"><i><small>Belum dilakukan bimbingan</small></i></td>
        						</tr>
        						<?php foreach($riwayat_0->result_array() as $row):?>
        						<tr>
        							<td><?= $c?></td>
        							<td><?= $row['pelanggaran']?></td>
        							<td><?= $row['tgl_kejadian']?></td>
        						</tr>
        						<?php $c++;endforeach?>
        						<?php endif ?>
        						<?php if ($riwayat_1->num_rows()>0): ?>
        						<tr style="background:#eee">
        							<td class="text-muted" colspan="3" align="center"><i><small>Sudah dilakukan bimbingan</small></i></td>
        						</tr>
        						<?php foreach($riwayat_1->result_array() as $row):?>
        						<tr style="background:#eee">
        							<td><?= $c?></td>
        							<td><?= $row['pelanggaran']?></td>
        							<td><?= $row['tgl_kejadian']?></td>
        						</tr>
        						<?php $c++;endforeach?>
        						<?php endif ?>
        					</tbody>
        				</table>
        			</div>
        			<?php else :?>
        			<div class="flex-center" style="min-height:300px">
        				<div class="text-center">
        				<h4>Riwayat pelanggaran tidak ditemukan</h4>
        				<h5><i>Siswa belum pernah melakukan pelanggaran</i></h5>
        				</div>
        			</div>
        			<?php endif ?>
        		</div>
        	</div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.panel-body -->
  </div><!-- /.panel.panel-default -->
  <?=form_close()?>
  <?php } ?>
</section>
