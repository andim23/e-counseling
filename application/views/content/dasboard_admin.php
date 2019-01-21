<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Content Header (Page header) -->
<section class="content-header">
    <?php if ($this->session->userdata('group')==1): ?> 
		
            <?php echo anchor('admin/buat_berita','<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Buat Berita</button>'); ?>
    <?php endif ?>
    <center><H1 style="font-family: georgia;"> INFO BERITA</H1></center>
            <!-- <div class="panel panel-default">
            <div class="panel-body"> -->
            <?php foreach ($berita as $key) { ?>
                <div class="panel panel-primary" style="margin:auto; width:80%; margin-top:15px; box-shadow: 1px 2px;">
                  <div class="panel-heading">
                  <div class="row">
                    <div class="col-sm-10" style="margin-bottom:0px"><h3 style="margin-bottom:0px; font-family: georgia; margin-top:0px; text-transform: uppercase;"> <?=$key->judul?> </h3>
                    </div>
                    <div class="col-sm-2">
                                <p><?php date("d F Y", strtotime($key->tgl_berita));
                                  $umam = date("F"); 
                                    switch ($umam) {
                                      case 'January':
                                        echo  date("d").' Januari '.date("Y");
                                        break; 
                                    }
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
                                 ?></p>            
                    </div>
                    </div>          
                  </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
              
                                <p style="text-align:justify;  font-family: serif;"><?=$key->berita?></p>
                                <?php if ($this->session->userdata('group')==1): ?>
                                    <button type="button" class="btn btn-danger hapus_berita" data-id="<?php echo $key->id_berita; ?>"><i class="fa fa-trash" aria-hidden="true"></i>
                                     Hapus</button>
                                <?php endif ?>
                            </div>                            
                        </div>
                    </div>
                </div>
               <!--  </div>
                </div>  -->                  
                    
                       
                    
            <?php } ?>

</section><!-- /.content -->