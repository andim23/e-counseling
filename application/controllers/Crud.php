<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('group')) {
					$this->group = 0;
					redirect('login');
				} else {
					$this->group=$this->session->userdata('group');
				}
						
	}
// menu guru
	function tambah(){
		$this->load->library('form_validation');
// mengambil id dari v_input_guru	buat eror	
		$data = array(
			'nama' => set_value('nama', ''),
			'nip' => set_value('nip', ''),
			'jenisKel' => set_value('jenisKel', ''),
			'alamat' => set_value('alamat', ''),
			'no_telepon' => set_value('no_telepon', ''),
			'tp_lahir' => set_value('tp_lahir', ''),
			'tgl_lahir_guru' => set_value('tgl_lahir_guru', ''), 
			'agama' => set_value('agama', ''),

			);

		$this->load->view('layout/l_header');
		
		$this->load->view('content/v_input_data_guru', $data);
		$this->load->view('layout/l_footer');
	}
	function tambah_aksi(){
		$this->load->library('form_validation');
		$this->load->model('m_data');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$jenisKel = $this->input->post('jenisKel');
		$alamat = $this->input->post('alamat');
		$no_telepon = $this->input->post('no_telepon');
		$tp_lahir = $this->input->post('tp_lahir');
		$tgl_lahir_guru = $this->input->post('tgl_lahir_guru');
		$agama = $this->input->post('agama');
		$photo = $this->input->post('photo');
		$username = $this->input->post('username');
		$group = $this->input->post('group');
		$id_user = $this->input->post('id_user');
		

		 		$config['upload_path']          = './photo/guru/';
                $config['allowed_types']        = 'gif|jpg|png';

		         $this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('userfile'))
                {
                	echo "gambar eror";
                       echo $this->upload->display_errors();

                       
                } else {

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nip','Nip','required');
		if($this->form_validation->run() == FALSE){
			
			$this->tambah();
		}else{
		$gambar = $this->upload->data();
		$data = array(
			'nama_guru' => $nama,
			'nip' => $nip,
			'j_kelamin_guru' => $jenisKel,
			'alamat_guru' => $alamat,
			'telepon_guru' => $no_telepon,
			'tpt_lahir_guru' => $tp_lahir,
			'tgl_lahir_guru' => $tgl_lahir_guru,
			'agama' => $agama,
			'id_user' => $id_user,
			'photo_guru'	=> $gambar['file_name']
			);
		$data2 = array(
			'password' => md5($this->input->post("password")),
			'username' => $username,
			'id_user' => $id_user,
			'group'	=> $group
			);
		
		$this->m_data->input_data($data2,'admin');
		$this->m_data->input_data($data,'tbl_guru');
		redirect('admin/data_guru');
			}
	
		
		}
	}
	function edit($id){
		$this->load->model('m_data');
		$data['judul'] = "Edit Siswa";
		$where = array('id_guru' => $id);
		$data['guru'] = $this->m_data->edit_data($where,'tbl_guru')->result();
		$this->load->view('layout/l_header');
		$this->load->view('content/v_edit',$data);
		$this->load->view('layout/l_footer');
	}
	function update(){
		$this->load->model('m_data');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nip = $this->input->post('nip');
		$jenisKel = $this->input->post('jenisKel');
		$no_telepon = $this->input->post('no_telepon');
		$tp_lahir = $this->input->post('tp_lahir');
		$tgl_lahir_guru = $this->input->post('tgl_lahir_guru');
		$agama = $this->input->post('agama');
	 
		$data = array(
			'nama_guru' => $nama,
			'alamat_guru' => $alamat,
			'nip' => $nip,
			'j_kelamin_guru' => $jenisKel,
			'telepon_guru' => $no_telepon,
			'tpt_lahir_guru' => $tp_lahir,
			'tgl_lahir_guru' => $tgl_lahir_guru,
		);
	 
		$where = array(
			'id_guru' => $id
		);
	 
		$this->m_data->update_data($where,$data,'tbl_guru');
		redirect('admin/data_guru');
	}
	function hapus($id){
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_guru' => $id);
		$this->m_data->hapus_data($where,'tbl_guru');
		redirect('admin/data_guru');
	}

	// menu sisswa
	function tambah_siswa(){
		$this->load->library('form_validation');
	// mengambil id dari v_input_guru	buat eror	
		$data = array(
			'nama' => set_value('nama', ''),
			'nis' => set_value('nis', ''),
			'jenisKel' => set_value('jenisKel', ''),
			'alamat' => set_value('alamat', ''),
			'no_telepon' => set_value('no_telepon', ''),
			'tp_lahir' => set_value('tp_lahir', ''),
			'tgl_lahir_siswa' => set_value('tgl_lahir_siswa', ''),
			'agama' => set_value('agama', ''),
			'id_ortu' => set_value('id_ortu', ''),
			'id_kelas' => set_value('id_kelas', ''),
			

			);

		$this->load->view('layout/l_header');
		$this->load->view('content/v_input_data_siswa', $data);
		$this->load->view('layout/l_footer');
	}
	function tambah_siswa_aksi(){
		$this->load->library('form_validation');
		$this->load->model('m_data');
		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');
		$jenisKel = $this->input->post('jenisKel');
		$alamat = $this->input->post('alamat');
		$no_telepon = $this->input->post('no_telepon');
		$tp_lahir = $this->input->post('tp_lahir');
		$tgl_lahir_siswa = $this->input->post('tgl_lahir_siswa');
		$agama = $this->input->post('agama');
		$id_kelas = $this->input->post('id_kelas');
		$photo = $this->input->post('photo');

		 		$config1['upload_path']          = './photo/siswa/';
                $config1['allowed_types']        = 'gif|jpg|png';

		        $this->load->library('upload', $config1);
				if ( ! $this->upload->do_upload('userfile1'))
                {
                       echo $this->upload->display_errors();

                       
                } else {
		
	
	
		$gambar1 = $this->upload->data();
		$data = array(
			'nama_siswa' => $nama,
			'nis' => $nis,
			'j_kelamin_siswa' => $jenisKel,
			'alamat_siswa' => $alamat,
			'telepon_siswa' => $no_telepon,
			'tpt_lahir_siswa' => $tp_lahir,
			'tgl_lahir_siswa' => $tgl_lahir_siswa,
			'agama' => $agama,
			'id_kelas' => $id_kelas,
			'photo_siswa'	=> $gambar1['file_name']
			);
		$this->m_data->input_data($data,'tbl_siswa');
		redirect('admin/data_siswa');
	}
	}
	function edit_siswa($id){
		$this->load->model('m_data');
		$data['judul'] = "Edit Siswa";
		$where = array('id_siswa' => $id);
		$data['siswa'] = $this->m_data->edit_data($where,'tbl_siswa')->result();
		$data['id'] = $id;
		$this->load->view('layout/l_header');
		$this->load->view('content/v_edit_siswa',$data);
		$this->load->view('layout/l_footer');
	}
	function input_pelanggaran($id){
		$this->load->model('m_data');
		$id_siswa = $this->input->post('id');
		$pelanggaran = $this->input->post('pelanggaran');
		$id_sanksi = $this->input->post('id_sanksi');
		$tgl_kejadian = $this->input->post('tgl_kejadian');
		$data = array(
			'id_siswa' => $id_siswa,
			'pelanggaran' => $pelanggaran,
			'id_sanksi' => $id_sanksi,
			'tgl_kejadian' => $tgl_kejadian

			);
		$this->m_data->input_data($data,'tbl_pelanggaran');
		redirect('crud/edit_siswa/'.$id);
	}
	function update_siswa(){
		$this->load->model('m_data');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nis = $this->input->post('nis');
		$jenisKel = $this->input->post('jenisKel');
		$no_telepon = $this->input->post('no_telepon');
		$tp_lahir = $this->input->post('tp_lahir');
		$tgl_lahir_siswa = $this->input->post('tgl_lahir_siswa');
		$agama = $this->input->post('agama');

		$this->load->library("form_validation");
		$config = $this->update_siswa_rules();
		$this->form_validation->set_rules($config);
		// vardumpdatax($this->form_validation->run());
		if($this->form_validation->run() == false){
			$this->session->set_userdata("form_error","Lengkapi semua data!");
			redirect('crud/edit_siswa/'.$id);
		}else{
			$data = array(
				'nama_siswa' => $nama,
				'alamat_siswa' => $alamat,
				'nis' => $nis,
				'j_kelamin_siswa' => $jenisKel,
				'telepon_siswa' => $no_telepon,
				'tpt_lahir_siswa' => $tp_lahir,
				'tgl_lahir_siswa' => $tgl_lahir_siswa
			);
		 
			$where = array(
				'id_siswa' => $id
			);
		 
			$this->m_data->update_data($where,$data,'tbl_siswa');
			redirect('admin/data_siswa');
		}
	}
	private function update_siswa_rules(){
		$config = array(
	        array(
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'nis',
                'label' => 'nis',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'jenisKel',
                'label' => 'jenisKel',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'no_telepon',
                'label' => 'no_telepon',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'tp_lahir',
                'label' => 'tp_lahir',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'tgl_lahir_siswa',
                'label' => 'tgl_lahir_siswa',
                'rules' => 'required'
	        ),
	        array(
                'field' => 'agama',
                'label' => 'agama',
                'rules' => 'required'
	        ),
		);
		return $config;
	}
	function hapus_siswa(){
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_siswa' => $id);
		$this->m_data->hapus_data($where,'tbl_siswa');
		redirect('admin/data_siswa');
	}
	function tambah_wali(){
		// phpinfo();
		// exit();
		$this->load->library('form_validation');
	// mengambil id dari v_input_guru	buat eror	
		$data = array(
			'nama_ortu' => set_value('nama_ortu', ''),
			// 'id_siswa' => set_value('id_siswa', ''),
			'nis' => set_value('nis', ''),
			'status_keluarga' => set_value('status_keluarga', ''),
			'jenisKel' => set_value('jenisKel', ''),
			'alamat' => set_value('alamat', ''),
			'no_telepon' => set_value('no_telepon', ''),
			'pekerjaan' => set_value('pekerjaan', ''),
			'KIP' => set_value('KIP', '')
			);

		$this->load->view('layout/l_header');
		$this->load->view('content/v_input_data_wali', $data);
		$this->load->view('layout/l_footer');
	}
	function tambah_wali_aksi(){
		$this->load->library('form_validation');
		$this->load->model('m_data');
		$nama_ortu = $this->input->post('nama_ortu');
		$status_keluarga = $this->input->post('status_keluarga');
		$jenisKel = $this->input->post('jenisKel');
		$alamat = $this->input->post('alamat');
		$no_telepon = $this->input->post('no_telepon');
		$pekerjaan = $this->input->post('pekerjaan');
		$KIP = $this->input->post('KIP');
		$nis = $this->input->post('nis');
		$query = $this->db->where('nis', $nis)->get('tbl_siswa');
		if ($query->num_rows()==1) {
			$siswa = $query->result_array();
			$id_siswa = $siswa[0]["id_siswa"];
		}
		$username = $this->input->post('username');
		$group = $this->input->post('group');
		$id_user = $this->input->post('id_user');
		
		$this->form_validation->set_rules('nama_ortu','Nama','required');
		$this->form_validation->set_rules('status_keluarga','NIS','required');
		if($this->form_validation->run() == FALSE){
			$this->tambah_wali();
		}else{
				
		$data1 = array(
			'nama_ortu' => $nama_ortu,
			'id_siswa' => $id_siswa,
			'status_keluarga' => $status_keluarga,
			'j_kelamin_ortu' => $jenisKel,
			'alamat' => $alamat,
			'telepon_ortu' => $no_telepon,
			'pekerjaan' => $pekerjaan,
			'id_user' => $id_user,
			'KIP' => $KIP
			);
		$data2 = array(
			'password' => md5($this->input->post("password")),
			'username' => $username,
			'id_user' => $id_user,
			'group'	=> $group
			);
		$this->m_data->input_data($data1,'tbl_orang_tua');
		$this->m_data->input_data($data2,'admin');
		redirect('admin/data_orangtua');
		}	
	}
	function edit_wali($id){
		$this->load->model('m_data');
		$where = array('id_ortu' => $id);
		$data['wali'] = $this->m_data->edit_data($where,'tbl_orang_tua')->result();
		$this->load->view('layout/l_header');
		$this->load->view('content/v_edit_wali',$data);
		$this->load->view('layout/l_footer');
	}
	function update_wali(){
		$this->load->model('m_data');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$status_keluarga = $this->input->post('status_keluarga');
		$jenisKel = $this->input->post('jenisKel');
		$no_telepon = $this->input->post('no_telepon');
		$pekerjaan = $this->input->post('pekerjaan');
		$KIP = $this->input->post('KIP');
	 
		$data = array(
			'nama_ortu' => $nama,
			'alamat' => $alamat,
			'KIP' => $KIP,
			'j_kelamin_ortu' => $jenisKel,
			'telepon_ortu' => $no_telepon,
			'pekerjaan' => $pekerjaan,
			'status_keluarga' => $status_keluarga
		);
	 
		$where = array(
			'id_ortu' => $id
		);
	 
		$this->m_data->update_data($where,$data,'tbl_orang_tua');
		redirect('admin/data_orangtua');
	}
	function hapus_wali(){
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_ortu' => $id);
		$this->m_data->hapus_data($where,'tbl_orang_tua');
		redirect('admin/data_orangtua');
	}
	function tambah_kelas_aksi(){
		$this->load->model('m_data');
		$id_kelas = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');		
				
		$data = array(
			'id_kelas' => $id_kelas,
			'nama_kelas' => $nama_kelas	
			);
		$this->m_data->input_data($data,'tbl_kelas');
		redirect('admin/data_kelas');
	}
	function hapus_kelas(){
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_kelas' => $id);
		$this->m_data->hapus_data($where,'tbl_kelas');
		redirect('admin/data_kelas');
	}
	function tambah_user_aksi(){
		$this->load->model('m_data');
		$username = $this->input->post('username');
		$group = $this->input->post('group');		
				
		$data = array(
			'password' => md5($this->input->post("password")),
			'username' => $username,
			'group'	=> $group
			);
		$this->m_data->input_data($data,'admin');
		redirect('admin/buat_user');
	}
	function hapus_pelanggaran($id){
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_pelanggaran' => $id);
		$this->m_data->hapus_data($where,'tbl_pelanggaran');
		redirect('admin/lihat_pelanggaran');
	}
	function tambah_bimbingan_aksi(){
		$this->load->model('m_data');
		$hal_bimbingan = $this->input->post('hal_bimbingan');
		$id_siswa = $this->input->post('id');
		$pembimbing = $this->input->post('pembimbing');
		$tgl_bimbingan = $this->input->post('tgl_bimbingan');
				
		$data = array(
			'hal_bimbingan' => $hal_bimbingan,
			'id_siswa' => $id_siswa,
			'nama_pembimbing' => $pembimbing,
			'tgl_bimbingan' => $tgl_bimbingan
			);
		$this->m_data->input_data($data,'tbl_bimbingan');
		$this->sudahbimbingan($id_siswa);
		redirect('crud/tambah_bimbingan/'.$this->input->post('id'));
	}
	function tambah_bimbingan($id){
		$this->load->model('m_data');
		$data['judul'] = "Input Bimbingan";
		$where = array('id_siswa' => $id);
		$data['siswa'] = $this->m_data->edit_data($where,'tbl_siswa')->result();
		$data['riwayat_0'] = $this->db->where(array('id_siswa'=>$id,'flag'=>'0'))->get('tbl_pelanggaran');
		$data['riwayat_1'] = $this->db->where(array('id_siswa'=>$id,'flag'=>'1'))->get('tbl_pelanggaran');

		$this->load->view('layout/l_header');
		$this->load->view('content/v_input_bimbingan', $data);
		$this->load->view('layout/l_footer');
	}
	function hapus_bimbingan($id){
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_bimbingan' => $id);
		$this->m_data->hapus_data($where,'tbl_bimbingan');
		redirect('admin/lihat_bimbingan');
	}
	function edit_laporan($id){
		$this->load->model('m_data');
		$data['judul'] = "Edit Laporan Siswa";

		$data['laporan'] = $this->m_data->edit_laporan($id);
		$data['id'] = $id;
		$this->load->view('layout/l_header');
		$this->load->view('content/v_edit_laporan', $data);
		$this->load->view('layout/l_footer');
	}
	function tambah_laporan_aksi(){
		$this->load->model('m_data');
		$kejujuran = $this->input->post('kejujuran');
		$id_siswa = $this->input->post('id');
		$kesopanan = $this->input->post('kesopanan');
		$kedisiplinan = $this->input->post('kedisiplinan');
		$kerapian = $this->input->post('kerapian');
		$kebersihan =$this->input->post('kebersihan');
		$kerajinan =$this->input->post('kerajinan');
		$hasil_akhir =$this->input->post('hasil_akhir');

		$data = array(
			'kerajinan' => $kerajinan,
			'id_siswa' => $id_siswa,
			'kesopanan' => $kesopanan,
			'kedisiplinan' => $kedisiplinan,
			'kerapian' => $kerapian,
			'kebersihan' => $kebersihan,
			'kejujuran' => $kejujuran,
			'hasil_akhir' => $hasil_akhir
			);
		
		$this->m_data->edit_valuelaporan($data,'tbl_laporansiswa');
		redirect('crud/edit_laporan/'.$this->input->post('id'));
	}
	function tambah_absen_aksi(){
		$this->load->model('m_data');
		
		$tgl= date('Y-m-d');
		$id_kelas = $this->input->post('id_kelas');
		$no1 = $this->input->post('no1');
		for ($i=0; $i<$no1; $i++) { 
			$id_siswa = $this->input->post('id'.$i);
			$absensi = $this->input->post('absensi'.$i);

			$data = array(
				'id_siswa' => $id_siswa,
				'id_kelas' => $id_kelas,
				'absensi' => $absensi,
				'tanggal' => $tgl
			);

			$this->m_data->input_data($data,'tbl_absensi');
		}
		redirect('admin/data_kelas');
	}
	function tambah_berita_aksi(){
		$this->load->model('m_data');
		$tgl_berita = $this->input->post('tgl_berita');
		$judul = $this->input->post('judul');
		$berita = $this->input->post('berita');		
				
		$data = array(
			'tgl_berita' => $tgl_berita,
			'judul' => $judul,
			'berita'	=> $berita
			);
		$this->m_data->input_data($data,'tbl_berita');
		redirect('admin/index');
	}
	function hapus_berita($id){
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_berita' => $id);
		$this->m_data->hapus_data($where,'tbl_berita');
		redirect('admin/index');
	}
	function sudahbimbingan($id_siswa){
		$jumlahpel=$this->db->get_where("tbl_pelanggaran", array("id_siswa"=>$id_siswa,"flag"=>"0"));
		foreach ($jumlahpel->result() as $row) {
			$this->db->where("id_pelanggaran", $row->id_pelanggaran);
			$this->db->update("tbl_pelanggaran", array("flag"=>"1"));
		}
	}
	

}
