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
<?php echo anchor('crud/tambah','<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
 Tambah Data</button>'); ?>
<p></p>
 	<style>
			table, th, td {
			    text-align: center;
			}
			
			table {
				margin-top: 20px;
				font-family: 'Lato';
			}
		</style>
		<div class="table-responsive">
			<table class="table table-striped example">
				<thead>
					<tr>
						<th scope="col">NO</th>
						<th scope="col">nama guru</th>
						<th scope="col">Nip</th>
						<th scope="col">jenis kel</th>
						<th scope="col">alamat</th>
						<th scope="col">no telepon</th>
						<th scope="col">tmpt tgl Lahir</th>
						<th scope="col">agama</th>
						<th scope="col">photo</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
			<?php $no = 1; foreach ($guruku as $hasil1){
				?>
				<tr>
					<td>
						<?php echo $no++ ?>
					</td>
					<td style="text-transform: capitalize;">
						<?=$hasil1->nama_guru?>
					</td>
					<td>
						<?=$hasil1->nip?>
					</td>
					<td>
						<?=$hasil1->j_kelamin_guru?>
					</td>
					<td>
						<?=$hasil1->alamat_guru?>
					</td>
					<td>
						<?=$hasil1->telepon_guru?>
					</td>
					<td>
						<?=$hasil1->tpt_lahir_guru,", ", $hasil1->tgl_lahir_guru?>
					</td>
					<td>
						<?=$hasil1->agama?>
					</td>
					<td>
						<?php $hasilphoto = [  'src' => 'photo/guru/' . $hasil1->photo_guru,
			                          'height'  => '50'
			                          ];
			                echo img($hasilphoto); ?>
					</td>
					
					<td>
						<?php echo anchor('crud/edit/'.$hasil1->id_guru, '<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>'); ?>
						<button type="button" class="btn btn-danger hapus_guru" data-id="<?php echo $hasil1->id_guru; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
		</table>
	</div>
</section>