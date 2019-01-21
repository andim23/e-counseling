<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index()
	{
		$data['berita']= $this->db->get('tbl_berita')->result();

		$this->load->view('layout/l_header');
		$this->load->view('content/dasboard_admin', $data);
		$this->load->view('layout/l_footer');
		
	}
	function data_guru(){
		$this->load->model('m_data');
		$data['guruku']= $this->m_data->get_all_data_guru();
		$data['judul'] = "DATA GURU";
		$this->load->view('layout/l_header');
		$this->load->view('content/v_data_guru',$data);
		$this->load->view('layout/l_footer');


	}
	function data_siswa(){
		$this->load->model('m_data');
		$data['judul'] = "DATA SISWA";
		$data['siswaku']= $this->m_data->get_all_data_siswa()->result();
		$this->load->view('layout/l_header', $data);
		$this->load->view('content/v_data_siswa',$data);
		$this->load->view('layout/l_footer');
	}
	function data_orangtua(){
		$this->load->model('m_data');
		$data['judul'] = "DATA ORANG TUA SISWA";
		$data['wali']= $this->m_data->get_all_data_wali()->result();
		$this->load->view('layout/l_header');
		$this->load->view('content/v_data_orangtua',$data);
		$this->load->view('layout/l_footer');
	}
	function data_kelas(){
		$this->load->model('m_data');
		$data['judul'] = "DATA KELAS";
		$data['kelas']= $this->m_data->get_all_data_kelas()->result();
		$this->load->view('layout/l_header');
		$this->load->view('content/v_data_kelas',$data);
		$this->load->view('layout/l_footer');
	}
	function data_siswakelas($idsiswakelas){
		$data['judul'] = "DATA KELAS SISWA";
		$a=$this->db->where('id_kelas', $idsiswakelas)->get('tbl_siswa');
		$a=$a->result();
		$data['siswaku']=$a;

		$this->load->view('layout/l_header');
		$this->load->view('content/v_datas_kelas',$data);
		$this->load->view('layout/l_footer');

	}
	function data_siswake($idsiswakelas){
		$data['judul'] = "DATA KELAS SISWA";
		$a=$this->db->where('id_kelas', $idsiswakelas)->get('tbl_siswa');
		$a=$a->result();
		$data['siswaku']=$a;

		$this->load->view('layout/l_header');
		$this->load->view('content/v_data_siswa',$data);
		$this->load->view('layout/l_footer');

	}
	function data_siswaabsen($idsiswakelas){
		$data['judul'] = "DATA KELAS ABSEN SISWA";
		$a=$this->db->where('id_kelas', $idsiswakelas)->get('tbl_siswa');
		$a=$a->result();
		$data['siswaku']=$a;

		$this->load->view('layout/l_header');
		$this->load->view('content/v_absen_siswa',$data);
		$this->load->view('layout/l_footer');

	}
	function buat_user(){
		$data['judul'] = "TAMBAH USER";
		$this->load->view('layout/l_header');
		$this->load->view('content/v_tambah_user',$data);
		$this->load->view('layout/l_footer');
	}
	function lihat_pelanggaran($idpelanggaran){
		$data['judul'] = "DATA PELANGGARAN SISWA";
		$a=$this->db->where('id_siswa', $idpelanggaran)->get('tbl_pelanggaran');
		$a=$a->result();
		$data['pelanggaran']=$a;
		

		$this->load->view('layout/l_header');
		$this->load->view('content/v_pelanggaran',$data);
		$this->load->view('layout/l_footer');
	}
	function lihat_bimbingan($idbimbingan){
		$data['judul'] = "DATA BIMBINGAN SISWA";
		$a=$this->db->where('id_siswa', $idbimbingan)->get('tbl_bimbingan');
		$a=$a->result();
		$data['bimbingan']=$a;
		

		$this->load->view('layout/l_header');
		$this->load->view('content/v_bimbingan',$data);
		$this->load->view('layout/l_footer');
	}
	function rekap_absen(){
		$this->load->model('m_data');
		
		$data['kelas']= $this->db->get('tbl_kelas');		
		$data['judul'] = "REKAP ABSENSI";

		$this->load->view('layout/l_header');
		$this->load->view('content/v_rekap',$data);
		$this->load->view('layout/l_footer');
	}
	function buat_berita(){
		$data['judul'] = "TAMBAH BERITA BARU";
		$this->load->view('layout/l_header');
		$this->load->view('content/v_berita',$data);
		$this->load->view('layout/l_footer');
	}
	function cek_username(){
		$a = $this->input->get('username');
		$query = $this->db->where('username', $a)->get('admin')->num_rows();
		if ($query > 0) {
			echo "ada";
		}else{
			echo "tidak";
		}
	}
	function cek_iduser(){
		$a = $this->input->get('id_user');
		$query = $this->db->where('id_user', $a)->get('admin')->num_rows();
		if ($query > 0) {
			echo "ada";
		}else{
			echo "tidak";
		}
	}

	function cek_nis(){
		$found = "tidak ada";
		$sendBack = "";
		if ($this->input->get_post('nis')) {
			$nis = $this->input->get_post('nis');
			$query = $this->db->where('nis', $nis)->get('tbl_siswa');
			if ($query->num_rows()==1) {
				$found = "ada";
				$data	= $query->result_array();
				$data = $data[0];
				$sendBack['data'] = $data;
				$originalDate = $data['tgl_lahir_siswa'];
				$sendBack['data']['tgl_lahir_siswa']	= date("d-m-Y", strtotime($originalDate));
			}
		}else $found = "tidak ada";
		$sendBack['found']	= $found;
		echo json_encode($sendBack);
	}

	function detail_siswa($idsiswa){
		$data['judul'] = "DETAIL SISWA";
		$a=$this->db->where('id_siswa', $idsiswa)->get('tbl_siswa');
		$a=$a->result();
		$data['siswaku']=$a;

		$this->load->view('layout/l_header');
		$this->load->view('content/v_data_siswa',$data);
		$this->load->view('layout/l_footer');

	}
	function detail_ortu($idortu){
		$data['judul'] = "DETAIL WALI";
		$a=$this->db->where('id_ortu', $idortu)->get('tbl_orang_tua');
		$a=$a->result();
		$data['wali']=$a;

		$this->load->view('layout/l_header');
		$this->load->view('content/v_data_orangtua',$data);
		$this->load->view('layout/l_footer');

	}
	
}
