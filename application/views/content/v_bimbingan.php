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
		<th scope="col">nama siswa</th>
		<th scope="col">Pembimbing</th>
		<th scope="col">tanggal bimbingan</th>
		<th scope="col">hal bimbingan</th>
	<?php if ($this->session->userdata('group')==2): ?> 
		<th scope="col">aksi</th>
	<?php endif ?>
		
	</tr>
	
<?php $no = 1; foreach($bimbingan as $hasil4){
	?>
	<tr>
		<td>
			<?php echo $no++ ?>
		</td>
		<td>
		<?php
			$a = $this->db->where('id_siswa', $hasil4->id_siswa)->get('tbl_siswa');
			$a = $a->row();
			echo $a->nama_siswa;
		?>

		</td>
		<td>
			<?=$hasil4->nama_pembimbing?>
		</td>
		<td>
			<?=$hasil4->tgl_bimbingan?>
		</td>
		<td>
			<?=$hasil4->hal_bimbingan?>
		</td>
		<?php if ($this->session->userdata('group')==2): ?> 
		<td>
		<button type="button" class="btn btn-danger hapus_bimbingan" data-id="<?php echo $hasil4->id_bimbingan; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
			
		</td>
		<?php endif ?>
		
	</tr>
<?php } ?>
</table>
</section>