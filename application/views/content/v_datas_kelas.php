<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
<div id="base_url" data-value="<?= base_url()?>"></div>
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
				<th scope="col">Nis</th>
				<th scope="col">Kelas</th>
				<th scope="col">Photo</th>
				<th scope="col">Detail Siswa</th>
				<th scope="col">Pelanggran</th>
				<th scope="col">Bimbingan/Prestasi</th>
				<th scope="col">Laporan</th>
			</tr>
		</thead>
		<tbody>
		<?php $no = 1; foreach($siswaku as $hasil2){ ?>
			<?php $jumlahpel=$this->db->get_where("tbl_pelanggaran", array("id_siswa"=>$hasil2->id_siswa,"flag"=>"0"))->num_rows(); ?>
			<tr>
				<th scope="row">
					<?php echo $no++ ?>
				</th>
				<td>
					<?php echo $hasil2->nama_siswa;
					// echo $jumlahpel>3?'<i link="'.base_url().'" id_siswa="'.$hasil2->id_siswa.'" id="idjumlah" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Jumlah Pelanggaran >3"></i>':"";
					echo $jumlahpel>3?'<i id_siswa="'.$hasil2->id_siswa.'" class="fa fa-info-circle trigger-popover_pelanggaran" aria-hidden="true"></i>':""?>
				</td>
				<td>
					<?=$hasil2->nis?>
				</td>
				<td>	
					<?php
						$a = $this->db->where('id_kelas', $hasil2->id_kelas)->get('tbl_kelas');
						if ($a->num_rows()>0) {
								echo $a->row()->nama_kelas;
							}else{
								echo "data kosong";
							}
					?>
				</td>
				<td>
					<?php $hasilphoto2 = [  'src' => 'photo/siswa/' . $hasil2->photo_siswa,
		                          'height'  => '50'
		                          ];
		                echo img($hasilphoto2); ?>
				</td>
				<td>
					<?php echo anchor('admin/detail_siswa/'.$hasil2->id_siswa,'<button type="button" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Detail</button>'); ?>
				</td>
				<td>

					<?php if ($this->session->userdata('group')==2): ?> 
							<?php echo anchor('crud/edit_siswa/'.$hasil2->id_siswa,'<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Pelanggran</button>'); ?>
							<?php echo anchor('admin/lihat_pelanggaran/'.$hasil2->id_siswa,'<button type="button" class="btn btn-default"><i class="fa fa-info" aria-hidden="true"></i> Lihat</button>'); ?>
					<?php endif ?>
				</td>
				<td>
					<?php if ($this->session->userdata('group')==2): ?> 
						<?php echo anchor('crud/tambah_bimbingan/'.$hasil2->id_siswa,'<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Bimbingan</button>'); ?>
							<?php echo anchor('admin/lihat_bimbingan/'.$hasil2->id_siswa,'<button type="button" class="btn btn-default"><i class="fa fa-info" aria-hidden="true"></i> Lihat</button>'); ?>
					<?php endif ?>
				</td>
				<td>
					<?php if ($this->session->userdata('group')==2): ?> 
							<?php echo anchor('crud/edit_laporan/'.$hasil2->id_siswa,'<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Laporan</button>'); ?>
							<?php echo anchor('claporanpdf/cetakpdf/'.$hasil2->id_siswa,'<button type="button" class="btn btn-default"><i class="fa fa-info" aria-hidden="true"></i> Lihat</button>'); ?>
					<?php endif ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
</section>
