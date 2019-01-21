<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
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
		<form action="<?php echo base_url(). 'crud/tambah_kelas_aksi'; ?>" method="post">

		<?php if ($this->session->userdata('group')==1): ?>
		<div class="row">
	    	<div class="col-lg-4">
	        <!-- Form Elements -->
	        	<div class="panel panel-default">
	           		<div class="panel-body">
	                	<div class="row">
	                    	<div class="col-lg-12">

			<div class="form-group">
				<label class="col-form-label" for="formGroupExampleInput">Id Kelas</label>
			 	<input type="text" name="id_kelas" class="form-control" placeholder="id kelas" required>
			</div>
			<div class="form-group">
				<label class="col-form-label" for="formGroupExampleInput">Nama Kelas</label>
			 	<input type="text" name="nama_kelas" class="form-control" placeholder="nama kelas" required>
			</div>
						<tr>
							<td></td>
							<td><button type="submit" value="Tambah" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
 Tambah Kelas</button></td>
						</tr>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		<?php endif ?>
		</form>
		<style>
			table, th, td {
			    text-align: center;
			}
			
			table {
				margin-top: 20px;
				font-family: 'lato';
			}
		</style>
	<div class="row">
         <div class="col-lg-12">
         	<h2><center>Data Kelas</center></h2>
			<table  class="table table-striped" style="width:50%; margin:auto;">
					<tr>
						<th scope="col">NO</th>
						<th scope="col">Id Kelas</th>
						<th scope="col">Nama Kelas </th>

			<?php if ($this->session->userdata('group')==1): ?>
						<th scope="col">Action</th>
			<?php endif ?>
				</tr>
				
			<?php $no = 1; foreach($kelas as $hasil3){ ?>
					<tr>
						<th scope="row">
							<?php echo $no++ ?>
						</th>
						<td>
							<?=$hasil3->id_kelas?>
						</td>
						<td>
						<?php if ($this->session->userdata('group')==1 ): ?>
							<?=anchor('admin/data_siswake/'.$hasil3->id_kelas, $hasil3->nama_kelas , [

								])?>
						<?php endif ?>
						<?php if ($this->session->userdata('group')==2 ): ?>
							<?=anchor('admin/data_siswakelas/'.$hasil3->id_kelas, $hasil3->nama_kelas , [

								])?>
						<?php endif ?>
						<?php if ($this->session->userdata('group')==3 ): ?>
							<?=anchor('admin/data_siswakelas/'.$hasil3->id_kelas, $hasil3->nama_kelas , [

								])?>
						<?php endif ?>
						<?php if ($this->session->userdata('group')==4 ): ?>
							<?=anchor('admin/data_siswaabsen/'.$hasil3->id_kelas, $hasil3->nama_kelas , [

								])?>
						<?php endif ?>
						</td>

			<?php if ($this->session->userdata('group')==1): ?>
						<td>
							<button type="button" class="btn btn-danger hapus_kelas" data-id="<?php echo $hasil3->id_kelas; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
						</td>
			<?php endif ?>
					</tr>
			<?php } ?>
		</table>
	</div>
	</div>
</section>