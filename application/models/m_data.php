<?php 
 
class M_data extends CI_Model{
	
	function get_all_data_guru()
	{
		$query = $this->db->get('tbl_guru');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
	function get_all_data_siswa()
	{  if ($this->session->userdata('group')==3) {
		$nama = $this->session->userdata('nama');
		$data = $this->db->select('id_user')->where('username', $nama)->get('admin');
		$data = $data->row();
		$this->db->select('*');	
		$this->db->from('admin');
		$this->db->where('admin.id_user', $data->id_user)->join('tbl_orang_tua', 'tbl_orang_tua.id_user = admin.id_user');
		$this->db->join('tbl_siswa', 'tbl_siswa.id_siswa = tbl_orang_tua.id_siswa');
		$a = $this->db->get(); 
		return $a;
	}else{
		return $this->db->limit(40)->get('tbl_siswa');
	}
		
	}
	function get_all_data_wali()
	{
		return $this->db->get('tbl_orang_tua');
		
	}
	function get_all_data_kelas()
	{
		return $this->db->get('tbl_kelas');
		
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_valuelaporan($data, $table){
		$a=$this->db->where('id_siswa', $data['id_siswa'])->get('tbl_laporansiswa');
		if($a->num_rows()>0){
			$this->db->where('id_siswa', $data['id_siswa'])->update('tbl_laporansiswa', $data);
		}else{
			$this->db->insert('tbl_laporansiswa', $data);
		}
		
	}
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	function edit_laporan($id){		
		$query = $this->db->where('id_siswa', $id)->get('tbl_laporansiswa');
		if ($query->num_rows()>0) {
			return $query->result();
		}else{
			return array();
		}
	}
	function rekap_absen($id, $tanggal1, $tanggal2){
		$h = $this->db->get_where('tbl_absensi', array('id_kelas'=>$id,'absensi'=>'H','tanggal>='=>$tanggal1, 'tanggal<='=>$tanggal2))->num_rows();
		$s = $this->db->get_where('tbl_absensi', array('id_kelas'=>$id,'absensi'=>'S','tanggal>='=>$tanggal1, 'tanggal<='=>$tanggal2))->num_rows();
		$a = $this->db->get_where('tbl_absensi', array('id_kelas'=>$id,'absensi'=>'A','tanggal>='=>$tanggal1, 'tanggal<='=>$tanggal2))->num_rows();
		$i = $this->db->get_where('tbl_absensi', array('id_kelas'=>$id,'absensi'=>'I','tanggal>='=>$tanggal1, 'tanggal<='=>$tanggal2))->num_rows();
		$j = $this->db->get_where('tbl_siswa', array('id_kelas'=>$id))->num_rows();
		$l = $this->db->get_where('tbl_siswa', array('id_kelas'=>$id,'j_kelamin_siswa'=>'L'))->num_rows();
		$p = $this->db->get_where('tbl_siswa', array('id_kelas'=>$id,'j_kelamin_siswa'=>'P'))->num_rows();
		$data = array(
			'h' => $h,
			's' => $s,
			'i' => $i,
			'a' => $a,
			'j' => $j,
			'l' => $l,
			'p' => $p
			);
		return $data;
	}

}