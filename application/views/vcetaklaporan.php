<!DOCTYPE html>
<html>
  <head> 
    <center>
    <img class="gambar" src="<?=site_url('photo/logosmanja.png')?>">
    <h3 style="margin-top: 10px;">PEMERINTAH KABUPATEN BREBES</h3>
    <h3>DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA</h3>
    <h2>SMA NEGERI 01 JATIBARANG</h2>
    <p id="jln">Jl.Raya Karanglo-Tegalwulung, Brebes Kode Pos 52266</p>
    <img class="gambar2" src="<?=site_url('photo/logotutwurihandayani.png')?>">


    </center>
    <title><?=$title?></title>
    <style>
    h2{
      margin-top: 0px;
      margin-bottom: 0px;
    }
    h3{
      margin-top: 0px;
      margin-bottom: 0px;
    }
    #jln{
      margin-top: 0px;
      margin-bottom: 10px;
      text-transform: capitalize;
    }
     #uper1{
      margin-top: 45px;
      margin-bottom: 0px;
      margin-right: 10%;
      margin-left: 7%;
       text-align: justify;
    }
     #uper2{
      margin-top: 5px;
      margin-bottom: 0px;
      margin-right: 10%;
      margin-left: 7%;
       text-align: justify;
    }
     #uper3{
      margin-top: 5px;
      margin-bottom: 0px;
      margin-right: 10%;
      margin-left: 7%;
       text-align: justify;
    }
    table.nilai{
        border-collapse: collapse;
        margin: 0 auto;
        width: 70%;
        margin-top: 5px;
        margin-bottom: 20px;
    }
    table.nilai>tr>th,table.nilai>tr>td{
      padding: 5px 10px;
    }

    table.deskrip{
        border-collapse: collapse;
        margin: 0 auto;
        margin-top: 0px;
        margin-bottom: 25px; 

    }
    table th{
        border:1px solid #000;
        text-align: left;
        padding: 5px;
    }
    table td{
        border:1px solid #000;
        padding-top: 5px;
    }img.gambar{
        width:10%;
        position: absolute;
        left: 30px;
        top: 50px;
    }img.gambar2{
        width:10%;
        position: absolute;
        left: 600px;
        top: 50px;
        opacity: 0.8;
    }

    </style>
    <hr style=" margin-top: 5px; width:90%; ">
  </head>
<body>

  <h3 align="center" style="margin-top: 20px;"><u>SERTIFIKAT</u></h3>
    <?php foreach($claporan as $rlaporan){  ?>
          <p id="uper1" style="margin-bottom: 0px;">Kepala Sekolah Menengah Atas Negeri 01 Jatibarang sebagai pelaksana bimbingan dan konseling memberikan Sertifikat Hasil Bimbingan Konseling kepada :</p>

        <table class="deskrip" border="0px" style="margin-top: 0px;">
          <tr>
              <td>Nama</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
              <td style="text-transform: capitalize;"><?php
              $a = $this->db->where('id_siswa', $rlaporan->id_siswa)->get('tbl_siswa');
              $a = $a->row();
              echo $a->nama_siswa;
            ?></td>
          </tr>
          <tr>
              <td>Sekolah</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
              <td>SMA N 01 JATIBARANG</td>
          </tr>
          <tr>
              <td>Kabupaten</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
              <td>Brebes</td>
          </tr>
          <tr>
              <td>No. Induk</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
              <td><?php
              $a = $this->db->where('id_siswa', $rlaporan->id_siswa)->get('tbl_siswa');
              $a = $a->row();
              echo $a->nis;
            ?></td>
          </tr>
          <tr>
            <td>Tanggal </td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
             <td>
             <?php
              date_default_timezone_set("Asia/Jakarta");
              $umam = date("F"); 
                                    switch ($umam) {
                                      case 'January':
                                        echo  date("d").' Januari '.date("Y");
                                        break;
                                    }switch ($umam) {
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
             </td>
          </tr>
        </table>
         <p id="uper2" style="margin-top: 5px;">yang telah mengikuti pelaksanaan kegiatan bimbingan konseling yang di telah di laksanakan selama menjadi siswa di SMA N 01 Jatibarang dengan penilaian seperti berikut :</p>
         

      <table class="nilai"”>
          <tr>

            <th> NO</th>
            <th>Parameter</th>
            <th>Nilai</th>
          </tr>
          <tr>
              <td style="background-color: #f2f2f2;">1</td>
              <th style="background-color: #f2f2f2;">Kesopanan</th>
              <td style="background-color: #f2f2f2;"><?php echo $rlaporan->kesopanan;?></td>
              
          </tr> 
          <tr>
              <td>2</td>
              <th>Kerajinan</th>
              <td><?php echo $rlaporan->kerajinan;?></td>
              
          </tr>
          <tr>
              <td style="background-color: #f2f2f2;">3</td>
              <th style="background-color: #f2f2f2;">Kerapian</th>
              <td style="background-color: #f2f2f2;"><?php echo $rlaporan->kerapian;?></td>
           
          </tr>
          <tr>
              <td>4</td>
              <th>Kebersihan</th>
              <td><?php echo $rlaporan->kebersihan;?></td>
              
          </tr>
          <tr>
              <td style="background-color: #f2f2f2;">5</td>
              <th style="background-color: #f2f2f2;">Kedisiplinan</th>
              <td style="background-color: #f2f2f2;"><?php echo $rlaporan->kedisiplinan;?></td>
              
          </tr>
          <tr>
              <td>6</td>
              <th>Kejujuran</th>
              <td><?php echo $rlaporan->kejujuran;?></td>
              
          </tr>
        
    </table>
    <p id="uper3" style="margin-top: 20px;">Berdasarkan nilai yang telah di tentukan, peserta dinyatakan <b><?php echo $rlaporan->hasil_akhir;?></b> selama mengikuti Bimbingan Konseling di SMA N 01 Jatibarang.</p>
    <?php }?>
   
    <p align="right" style="margin-top:70px; margin-right:70px;"> Brebes, <?php
              date_default_timezone_set("Asia/Jakarta");
              $umam = date("F"); 
                                    switch ($umam) {
                                      case 'January':
                                        echo  date("d").' Januari '.date("Y");
                                        break;
                                    }switch ($umam) {
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

                                      
             ?></p>
             <p align="right" style="margin-top:100px; margin-right:70px;">Kepala Sekolah</p>
  </body>
</html>