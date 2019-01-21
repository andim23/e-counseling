<section class="content-header">
  <h1>
    <?php if ($this->session->userdata('group')==1): ?>
    <?php echo $judul ?>
    <?php endif ?>
    <?php if ($this->session->userdata('group')==2): ?>
    Tambah Pelanggaran Siswa
    <?php endif ?>
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?php echo $judul ?></li>
  </ol>
</section>
<!-- Content Header (Page header) -->
<section class="content-header">
  <?php foreach($siswa as $u){ 
  	if ($this->session->userdata('group')==1): 
    	$action = base_url(). 'crud/update_siswa';
    elseif ($this->session->userdata('group')==2): 
    	$action = base_url(). 'crud/input_pelanggaran/'.$id;
  	endif
    ?>
  <form action="<?= $action?>" method="post">
    <div class="row">
      <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-6">
    						<?php if ($this->session->userdata('group')==1): ?>
                <?php if ($this->session->has_userdata('form_error')):?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Maaf,</strong> <?= $this->session->userdata('form_error');$this->session->unset_userdata('form_error');?>
                </div>
                <?php endif?>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $u->id_siswa ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $u->nama_siswa?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat_siswa?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Nis</label>
                  <div class="col-sm-10">
                    <input type="text" name="nis" class="form-control" value="<?php echo $u->nis?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kel</label>
                  <div class="col-sm-10">
                    <select name="jenisKel" class="form-control">
                      <option value="<?=$u->j_kelamin_siswa?>"><?=$u->j_kelamin_siswa?></option>
                      <option>L</option>
                      <option>P</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">No telepon</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_telepon" class="form-control" value="<?php echo $u->telepon_siswa?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" name="tp_lahir" class="form-control" value="<?php echo $u->tpt_lahir_siswa?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Tgl Lahir</label>
                  <div class="input-group col-sm-7">
                    <input type="date" name="tgl_lahir_siswa" class="form-control" value="<?php echo $u->tgl_lahir_siswa?>">
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
                <?php elseif ($this->session->userdata('group')==2): ?>
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
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Pelanggaran</label>
                  <div class="col-sm-10">
                    <input type="text" name="pelanggaran" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputState1" class="col-sm-2 col-form-label">Sanksi</label>
                  <div class="col-sm-10">
	                  <select name="id_sanksi" class="form-control">
	                    <?php
	                      $a=$this->db->select('*')->get('tbl_sanksi');
	                      $data=$a->result();
	                      ?>
	                    <?php foreach ($data as $key): ?>
	                    <option value="<?= $key->id_sanksi?>"><?= $key->nama_sanksi?></option>
	                    <?php endforeach ?>
	                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="formGroupExampleInput4">Tanggal Kejadian</label>
                  <div class="col-sm-10">
	                  <div class="input-group date" >
	                    <input type="date" name="tgl_kejadian" class="form-control" />
	                    <span class="input-group-addon">
	                    <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
	                  </div>
                  </div>
                </div>
                <?php endif ?>
                <input type="submit" class="btn btn-info" value="Simpan">
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.panel-body -->
        </div><!-- /.panel.panel-default -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </form>
  <?php } ?>
</section>
