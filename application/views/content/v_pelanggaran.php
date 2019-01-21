
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
<center><h1><?php echo $judul ?></h1></center>
		<style>
			table, th, td {
			    text-align: center;
			}
			
			table {
				margin-top: 20px;
			
			}
		</style>
<div class="table-responsive">
<table class="table table-striped">
	<tr>
		<th scope="col">NO</th>
		<th scope="col">nama</th>
		<th scope="col">pelanggaran</th>
		<th scope="col">tanggal</th>
		<th scope="col">sanksi</th>
		<?php if ($this->session->userdata('group')==2): ?> 
			<th scope="col">aksi</th>
		<?php endif ?>
	</tr>
	
<?php $no = 1; foreach($pelanggaran as $hasil3){
	?>
	<tr>
		<td>
			<?php echo $no++ ?>
		</td>
		<td>	
			<?php
				$a = $this->db->where('id_siswa', $hasil3->id_siswa)->get('tbl_siswa');
				$a = $a->row();
				echo $a->nama_siswa;
			?>
		</td>
		<td>
			<?=$hasil3->pelanggaran?>
		</td>
		<td>
			<?=$hasil3->tgl_kejadian?>
		</td>
		<td>
			<?php
				$a = $this->db->where('id_sanksi', $hasil3->id_sanksi)->get('tbl_sanksi');
				$a = $a->row();
				echo $a->nama_sanksi;
			?>
		</td>
		
			<?php if ($this->session->userdata('group')==2): ?> 
				<td>
				<button type="button" class="btn btn-danger hapus_pelanggaran" data-id="<?php echo $hasil3->id_pelanggaran; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
				</td>
			<?php endif ?>
		
		
	</tr>
<?php } ?>
</table>
</section>