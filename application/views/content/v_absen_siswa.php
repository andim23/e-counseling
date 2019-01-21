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
		<center><h1 style="font-family: georgia;"><?php echo $judul ?></h1></center>
			<form action="<?php echo base_url(). 'crud/tambah_absen_aksi'; ?>" method="post">

			<CENTER>TANGGAL : <?php 
                                  		date_default_timezone_set("Asia/Jakarta");
                                  		$umam = date("F"); 
                                    	switch ($umam) {
                                      		case 'January':
                                        echo  date("d").' Januari '.date("Y");
                                        break;
                                    }
                                        $umam = date("F"); 
                                    	switch ($umam) {
                                      		case 'February':
                                        echo  date("d").' Februari '.date("Y");
                                        break;$umam = date("F"); 
                                    }
                                    	switch ($umam) {
                                      		case 'March':
                                        echo  date("d").' Maret '.date("Y");
                                        break;$umam = date("F"); 
                                    }
                                    	switch ($umam) {
                                      		case 'May':
                                        echo  date("d").' Mei '.date("Y");
                                        break;$umam = date("F"); 
                                    }
                                    	switch ($umam) {
                                      		case 'August':
                                        echo  date("d").' Agustus '.date("Y");
                                        break;$umam = date("F"); 
                                    }
                                    	switch ($umam) {
                                      		case 'October':
                                        echo  date("d").' Oktober '.date("Y");
                                        break;$umam = date("F"); 
                                    }
                                    	switch ($umam) {
                                      		case 'December':
                                        echo  date("d").' Desember '.date("Y");
                                        break;$umam = date("F");
                                      
                                    } 
			?>
			</CENTER>
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
			<table class="table table-striped">
				<tr>
					<th scope="col">NO</th>
					<th scope="col">Nama Siswa</th>
					<th scope="col">Nis</th>
					<th scope="col">Kelas</th>
					<th scope="col">Absensi</th>
				</tr>

			<?php $no1=0; $no = 1; foreach($siswaku as $hasil2){
				?>
				<tr>
					<td>
						<?php echo $no++ ?>
					</td>
					<td>
						<input type="hidden" name="id<?php echo $no1; ?>" value="<?php echo $hasil2->id_siswa?>" >
						<?php echo $hasil2->nama_siswa?>
					</td>
					<td>
						<?=$hasil2->nis?>
					</td>
					<td>
						<?php $a = $this->db->where('id_kelas', $hasil2->id_kelas)->get('tbl_kelas');
							$a = $a->row(); ?>
						<input type="hidden" name="id_kelas" value="<?php echo $a->id_kelas ?>" >
						<?php echo $a->nama_kelas?>

					</td>
					<td>
								
									 <input type="radio" name="absensi<?php echo $no1; ?>" value="H" checked>H  
									 <input type="radio" name="absensi<?php echo $no1; ?>" value="I">I 
									 <input type="radio" name="absensi<?php echo $no1; ?>" value="S">S 
									 <input type="radio" name="absensi<?php echo $no1; ?>" value="A">A
								  
					</td>

				</tr>
			<?php $no1++;} ?>
			<input type="hidden" name="no1" value="<?php echo $no1; ?>">
			</table>
		<center><input type="submit" class="btn btn-info" value="Tambah"></center>
</section>