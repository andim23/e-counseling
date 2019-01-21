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
   <?php echo anchor('crud/tambah_siswa','<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
      Tambah Data</button>'); ?>
   <p></p>
   <?php endif ?>
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
               <th scope="col">
                  <?php if ($this->session->userdata('group')==1): ?> 
                  ID Siswa
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==3): ?> 
                  NO
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==4): ?> 
                  NOl
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==2): ?> 
                  NO
                  <?php endif ?>
               </th>
               <th scope="col">Nama Siswa</th>
               <th scope="col">Nis</th>
               <th scope="col">Kelas</th>
               <th scope="col">
                  <?php if ($this->session->userdata('group')==1): ?> 
                  Jenis Kel
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==3): ?> 
                  Jenis Kel
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==4): ?> 
                  Jenis Kel
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==2): ?> 
                  Nama Wali
                  <?php endif ?>
               </th>
               <th scope="col">Alamat</th>
               <th scope="col">TTL</th>
               <th scope="col">Agama</th>
               <th scope="col">Photo</th>
               <th scope="col">
                  <?php if ($this->session->userdata('group')==1): ?> 
                  Action
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==3): ?> 
                  Pelanggran
               <th scope="col">Bimbingan/Prestasi</th>
	               <?php endif ?>
	               <?php if ($this->session->userdata('group')==4): ?> 
	               Absensi
	               <?php endif ?>
	               </th>
	               <?php if ($this->session->userdata('group')==3): ?> 
               	
               <?php endif ?>
            </tr>
         </thead>
         <tbody>
            <?php $no = 1; foreach($siswaku as $hasil2){
               ?>
            <tr>
               <th scope="row">
                  <?php if ($this->session->userdata('group')==1): ?> 
                  <?=$hasil2->id_siswa?>
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==2): ?> 
                  <?php echo $no++ ?>
               </th>
               <?php endif ?>
               <?php if ($this->session->userdata('group')==3): ?> 
               <?php echo $no++ ?></th>
               <?php endif ?>
               <?php if ($this->session->userdata('group')==4): ?> 
               <?php echo $no++ ?></th>
               <?php endif ?>
               <td style="text-transform: capitalize;"><?=$hasil2->nama_siswa?></td>
               <td><?=$hasil2->nis?></td>
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
                  <?php if ($this->session->userdata('group')==1): ?> 
                  <?=$hasil2->j_kelamin_siswa?>
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==3): ?> 
                  <?=$hasil2->j_kelamin_siswa?>
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==4): ?> 
                  <?=$hasil2->j_kelamin_siswa?>
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==2): ?> 
                  <?php
                     $a = $this->db->where('id_siswa', $hasil2->id_siswa)->get('tbl_orang_tua');
                     if ($a->num_rows()>0) {
                     	echo $a->row()->nama_ortu;
                     	echo anchor('admin/detail_ortu/'.$a->row()->id_ortu, '<i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Lihat Detail!"></i>'); 
                     }else{
                     	echo "data kosong";
                     }	
                     ?>
                  <?php endif ?>
               </td>
               <td><?=$hasil2->alamat_siswa?></td>
               <td><?=$hasil2->tpt_lahir_siswa,", ", $hasil2->tgl_lahir_siswa?></td>
               <td><?=$hasil2->agama?></td>
               <td>
                  <?php $hasilphoto2 = [  'src' => 'photo/siswa/' . $hasil2->photo_siswa,
                     'height'  => '50'
                     ];
                     echo img($hasilphoto2); ?>
               </td>
               <td>
                  <?php if ($this->session->userdata('group')==1): ?>
                  <?php echo anchor('crud/edit_siswa/'.$hasil2->id_siswa, '<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>'); ?>
                  <button type="button" class="btn btn-danger hapus_siswa" data-id="<?php echo $hasil2->id_siswa; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                  <?php endif ?>
                  <?php if ($this->session->userdata('group')==3): ?> 
                  <center><?php echo anchor('admin/lihat_pelanggaran/'.$hasil2->id_siswa,'<button type="button" class="btn btn-default"><i class="fa fa-info" aria-hidden="true"></i> Lihat</button>'); ?></center>
                  <?php endif ?>
               </td>
               <?php if ($this->session->userdata('group')==3): ?> 
               <td>
                  <center><?php echo anchor('admin/lihat_bimbingan/'.$hasil2->id_siswa,'<button type="button" class="btn btn-default"><i class="fa fa-info" aria-hidden="true"></i> Lihat</button>'); ?></center>
               </td>
               <?php endif ?>
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
   <?php if ($this->session->userdata('group')==1): ?> 
   <p>Lihat data siswa berdasarkan Kelas<a href="<?php echo site_url('admin/data_kelas') ?>"> Di sisni..</a></p>
   <?php endif ?>
</section>


