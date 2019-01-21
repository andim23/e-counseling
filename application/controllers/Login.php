<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		$cek1 = $this->m_login->cek_login("admin",$where)->row();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'group' => $cek1->group
				
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			$this->session->set_flashdata('error', 'gagal username '.$username.' salah');
			redirect('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect("login");
	}
}