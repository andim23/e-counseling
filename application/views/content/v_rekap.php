
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
		<form action="" method="post">
	<center><label>Pilih Range Tanggal  :</label></center>
			<table style="margin:20px auto;" border="1">
				<tr>
					<th scope="col">Tanggal</th>
					<th scope="col"><input type="date" name="tgl1" id="form"></th>
					<th scope="col">s/d</th>
					<th scope="col"><input type="date" name="tgl2" id="form1"></th>

					<th scope="col"><input type="submit" name="submit" value="Rekap"></th>
				</tr>

			</table>

<?php if (empty($_POST['submit'])) {
		echo ""; 
	} else {
 ?>
 <style>
 h3{
 	margin-top: 2px;
 	margin-bottom: 0px
 }
 h4{
 	margin-top: 2px;
 	margin-bottom: 5px
 }
 table, th, td {
			    text-align: center;
			}

 </style>	
<center>
	<h3>PROSENTASE KEHADIRAN DAN KETIDAK HADIRAN SISWA</h3>
	<h3>SMA N 01 JATIBARANG</h3>
	<h4>Pada tanggal  &nbsp&nbsp<?php echo $this->input->post('tgl1'). "&nbsps/d&nbsp".$this->input->post('tgl2'); ?></h4>
	</center>
	<div class="row">
         <div class="col-lg-12" style="margin-right:20px;"> 
			<table class="table table-striped" id="rekap">
				<thead>
				<tr>
					<th scope="col">NO</th>
					<th scope="col">nama Kelas</th>
					<th scope="col">L</th>
					<th scope="col">P</th>
					<th scope="col">jmlh</th>
					<th scope="col">I</th>
					<th scope="col">S</th>
					<th scope="col">A</th>
					<th scope="col">jmlh hdr</th>
					<th scope="col">jmlh tdk</th>
				</tr>
				</thead>
			<tbody>
	
		<?php $no = 1; foreach($kelas->result() as $key){
			$tanggal1 = $this->input->post('tgl1');
			$tanggal2 = $this->input->post('tgl2');
			$rekap = $this->m_data->rekap_absen($key->id_kelas, $tanggal1, $tanggal2);
		?>
				<tr>
					<td>
						<?php echo $no++ ?>
					</td>

					<td>	
						<?php echo $key->nama_kelas?>
					</td>
					
					<td>
						<?php echo $rekap['l']; ?>
					</td>
					<td>
						<?php echo $rekap['p']; ?>
					</td>
					<td>
						<?php echo $rekap['j']; ?>
					</td>
					
					<td>
						<?php echo $rekap['i']; ?>
					</td>
					<td>
						<?php echo $rekap['s']; ?>
					</td>
					<td>
						<?php echo $rekap['a']; ?>
					</td>
					<td>
						<?php echo $rekap['h']; ?>
					</td>
					<td>
						<?php echo $rekap['a']+$rekap['i']+$rekap['s']; ?>
					</td>
				</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>
<?php } ?>
</form>
</section>