$(document).ready(function(){
	var base_url = $("#base_url").attr("data-value");
	// $("#idjumlah").click(function() {
	// 		var link=$("#idjumlah").attr("link");
	// 		var id_siswa=$("#idjumlah").attr("id_siswa");
	// 		$.ajax({
	// 			type: 'GET',
	// 		   url: link+"crud/sudahbimbingan/"+id_siswa,
	// 		   success: function(html)
	// 		   {
	// 		   		window.location.href =link+"crud/tambah_bimbingan/"+id_siswa;
	// 		   }
	// 		});
	// 	});


	$(".trigger-popover_pelanggaran").mouseover(function() {
		var $elm = $(this);
		$(this).popover('show');
	});
	$(".trigger-popover_pelanggaran").popover({
	    animation:true, 
	    // title: '',
	    content:function(){
				var $elm = $(this);
				var popupElement='<h5 style="margin-top:6px">Jumlah Pelanggaran <strong>lebih dari 3</strong></h5><div class="text-center" style="padding-bottom:8px"><button class="btn btn-primary btn-sm btn-lakukan_bimbingan" data-id="'+$elm.attr("id_siswa")+'">Lakukan Bimbingan</button></div>';
	    	return popupElement;
	    },
	    html:true
	});
	$('.trigger-popover_pelanggaran').on('shown.bs.popover', function () {
		$(".popover").mouseleave(function() {
			$(".trigger-popover_pelanggaran").popover('hide');
		});
		$(".btn-lakukan_bimbingan").click(function(){
			window.location=base_url+"crud/tambah_bimbingan/"+$(this).attr("data-id");
		});
	});

	var url = $("#codeigniter").data('url');
	$(".hapus_siswa").on('click', function(){
		var id = $(this).data('id');

			swal({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			  		$.post(url+"crud/hapus_siswa",{
			  			data_id : id
			  		}).done(function(){
			  			window.location.reload();
			  		});
			  }
			})

	});
	$(".hapus_wali").on('click', function(){
		var id = $(this).data('id');

			swal({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			  		$.post(url+"crud/hapus_wali",{
			  			data_id : id
			  		}).done(function(){
			  			window.location.reload();
			  		});
			  }
			})

	});
	$(".hapus_kelas").on('click', function(){
		var id = $(this).data('id');

			swal({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			  		$.post(url+"crud/hapus_kelas",{
			  			data_id : id
			  		}).done(function(){
			  			window.location.reload();
			  		});
			  }
			})

	});
	$(".hapus_guru").on('click', function(){
		var id = $(this).data('id');

			swal({
			  title: 'Apakah Anda Yakin?',
			  text: "ingin menghapus data ini!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			  		$.post(url+"crud/hapus",{
			  			data_id : id
			  		}).done(function(){
			  			window.location.reload();
			  		});
			  }
			})

	});
	$(".hapus_pelanggaran").on('click', function(){
		var id = $(this).data('id');

			swal({
			  title: 'Apakah Anda Yakin?',
			  text: "ingin menghapus data ini!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			  		$.post(url+"crud/hapus_pelanggaran",{
			  			data_id : id
			  		}).done(function(){
			  			window.location.reload();
			  		});
			  }
			})

	});
	$(".hapus_bimbingan").on('click', function(){
		var id = $(this).data('id');

			swal({
			  title: 'Apakah Anda Yakin?',
			  text: "ingin menghapus data ini!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			  		$.post(url+"crud/hapus_bimbingan",{
			  			data_id : id
			  		}).done(function(){
			  			window.location.reload();
			  		});
			  }
			})

	});
	$(".hapus_berita").on('click', function(){
		var id = $(this).data('id');

			swal({
			  title: 'Apakah Anda Yakin?',
			  text: "ingin menghapus data ini!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			  		$.post(url+"crud/hapus_berita",{
			  			data_id : id
			  		}).done(function(){
			  			window.location.reload();
			  		});
			  }
			})

	});
	$("#v_username").on('keyup', function(){
		var username = $(this).val();
		$.get(url+"admin/cek_username",{
			username : username
		}).done(function(username){
			if(username =='ada'){
				swal(
					'peringatan',
					'data ada',
					'warning'
					)
				$("#disabled").attr('disabled', true);
			}else{
				$("#disabled").removeAttr('disabled');
			}
			
		});

	});
	$("#id_user").on('keyup', function(){
		var id_user = $(this).val();
		$.get(url+"admin/cek_iduser",{
			id_user : id_user
		}).done(function(iduser){
			if(iduser =='ada'){
				swal(
					'peringatan',
					'data ada',
					'warning'
					)
				$("#disabled").attr('disabled', true);
			}else{
				$("#disabled").removeAttr('disabled');
			}
			
		});
		
	});
	$(document).ready(function() {
    $('.example').DataTable( {
        "pagingType": "full_numbers"
    	} );
	} );
	$(document).ready(function() {
    $('#rekap').DataTable( {
        dom: 'Bfrtip',
        buttons: [{
            extend: 'print',
            message:"PROSENTASE KEHADIRAN DAN KETIDAK HADIRAN SISWA SMA N 01 JATIBARANG"
        }
        ]
	    } );
	} );

	$("#inp-nis").on("keyup",function(){
		var nis = $(this).val();
		console.log("nis = "+nis);
		$.get(url+"admin/cek_nis",{
			nis : nis
		}).done(function(data){
			console.log("done");
			$("#div-detail_siswa").show();
			console.log(data);
			data = JSON.parse(data);
			siswa = data.data;
			console.log(data);
			if(data.found =='ada'){
				$("#div-detail_siswa_notfound").hide();
				$("#div-detail_siswa_found").show();
				$("#td-nis").html(nis);
				$("#td-nama_siswa").html(siswa.nama_siswa);
				var jkel = "Tidak diketahui";
				if (siswa.j_kelamin_siswa=="P") jkel = "Perempuan";
				else if (siswa.j_kelamin_siswa=="L") jkel = "Laki-laki";
				$("#td-jenis_kel").html(jkel);
				$("#td-alamat").html(siswa.alamat_siswa);
				$("#td-tempat_lahir").html(siswa.tpt_lahir_siswa);
				$("#td-tgl_lahir").html(siswa.tgl_lahir_siswa);
				$("#td-agama").html(siswa.agama);
			}else{
				$("#div-detail_siswa_notfound").show();
				$("#div-detail_siswa_found").hide();
				$("#nf-nis").html(nis);
			}
		});
	});


});
