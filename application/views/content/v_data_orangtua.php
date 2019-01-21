<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
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
	<?php if ($this->session->userdata('group')==1): ?> 
		<?php echo anchor('crud/tambah_wali','<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>'); ?>					
	<?php endif ?>
	<p></p>
		<style>
			table, th, td {
			    text-align: center;
			}
			
			table {
				margin-top: 20px;
				font-family: 'lato';
			}
		</style>
		<div class="table-responsive">
		<table class="table table-striped example">
			<thead>
			<tr>
				<th scope="col">NO</th>
				<th scope="col">Nama Siswa</th>
				<th scope="col">nama wali</th>
				<th scope="col">status keluarga</th>
				<th scope="col">jenis kel</th>
				<th scope="col">alamat</th>
				<th scope="col">telepon wali</th>
				<th scope="col">pekerjaan</th>
				<th scope="col">KIP</th>
				<?php if ($this->session->userdata('group')==1): ?> 
				<th scope="col">Action</th>
				<?php endif ?>
			</tr>
			</thead>
		<tbody>
		<?php $no = 1; foreach($wali as $hasil2){
			?>
			<tr>
				<th scope="row">
					<?php echo $no++ ?>
				</th>
				<td>
					<?php
					$a = $this->db->where('id_siswa', $hasil2->id_siswa)->get('tbl_siswa');
					if ($a->num_rows()>0) {
								echo $a->row()->nama_siswa;
							}else{
								echo "data kosong";
							}
				?>
				</td>
				<td style="text-transform: capitalize;"><?=$hasil2->nama_ortu?></td>
				<td><?=$hasil2->status_keluarga?></td>
				<td><?=$hasil2->j_kelamin_ortu?></td>
				<td><?=$hasil2->alamat?></td>
				<td><?=$hasil2->telepon_ortu?></td>
				<td><?=$hasil2->pekerjaan?></td>
				<td><?=$hasil2->KIP?></td>
				<?php if ($this->session->userdata('group')==1): ?> 
				<td>
					<div class="btn-group">
					<button type="button" class="btn btn-danger hapus_wali btn-sm" data-id="<?php echo $hasil2->id_ortu; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
					<button type="button" class="btn btn-warning btn-sm" onclick="window.location='../crud/edit_wali/<?= $hasil2->id_ortu;?>'"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
					</div>
				</td>
				<?php endif ?>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
</section>
<style type="text/css">
	.dataTables_wrapper .dataTables_paginate .paginate_button{
    padding: 0; 
    margin-left: 0;
	}
</style>
