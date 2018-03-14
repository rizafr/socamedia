<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['post']=$this->m_tulisan->get_post_home();
		$x['populer']=$this->m_tulisan->get_tulisan_populer();
		$x['terbaru']=$this->m_tulisan->get_tulisan_terbaru();
		$this->load->view('template/v_header',$x);
		$this->load->view('template/v_menu',$x);
		$this->load->view('v_home',$x);
		$this->load->view('template/v_footer',$x);
	}
}