<?php 
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_pengguna');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		$x['data']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('template/v_header');
		$this->load->view('template/v_menu');
		$this->load->view('v_about', $x);
		$this->load->view('template/v_footer');
	}
}