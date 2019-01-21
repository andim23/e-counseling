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
		
<form action="<?php echo base_url(). 'crud/tambah_user_aksi'; ?>" method="post">
		<div class="row">
	    	<div class="col-lg-4">
	        <!-- Form Elements -->
	        	<div class="panel panel-default">
	           		<div class="panel-body">
	                	<div class="row">
	                    	<div class="col-lg-12">
			<div class="form-group">
				<label class="col-form-label" for="formGroupExampleInput">Username</label>
			 	<input type="text" id="v_username" name="username" class="form-control" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label class="col-form-label" for="formGroupExampleInput">Password</label>
			 	<input type="text" name="password" class="form-control" placeholder="Password" required>
			</div>
			<div class="form-group">
				<label class="col-form-label">Akses</label>
					<select name="group" class="form-control" required>
						<?php
							$a=$this->db->select('*')->get('group');
							$data=$a->result();
						?>
						<?php foreach ($data as $key): ?>
				
						<option value="<?=$key->id_group?>"><?=$key->nama?></option>
						?>
						<?php endforeach ?>
				  	</select>
			</div>
			<tr>
			<td></td>
				<td><button type="submit" value="Tambah" id="disabled" class="btn btn-info">Tambah <i class="fa fa-plus" aria-hidden="true"></i>
			</tr>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
	</form>
</section>