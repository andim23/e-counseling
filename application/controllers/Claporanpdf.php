<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Claporanpdf extends CI_Controller {
    /*****
     | Laporan PDF dengan DOMPDF
     | controller claporanpdf
     | by gtech
    *****/
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mlaporan');
        $this->load->library('dompdf_gen');
    }
 
    public function index()
    {
        $this->load->model('mlaporan');
        $this->load->library('dompdf_gen');
        $data['title'] = 'Laporan PDF CodeIgniter dengan DOMPdf'; //judul title
        $data['qbarang'] = $this->mlaporan->getAllItem(); //query model semua barang
        $this->load->view('vlaporan',$data);
    }
 
    // fungsi cetak pdf
    public function cetakpdf($idlaporan){
        $this->load->library('dompdf_gen');
        $a=$this->db->where('id_siswa', $idlaporan)->get('tbl_laporansiswa');
        $a=$a->result();
        $data['claporan']=$a;
        
        $data['title'] = 'Cetak PDF Laporan siswa'; //judul title
 
        $this->load->view('vcetaklaporan', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();
 
        $tes = $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        
        $tes2 = $this->dompdf->load_html($html);
        $render = $this->dompdf->render();
        // vardumpdatax($render);
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }
}