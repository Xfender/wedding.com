<?php

class Wedding extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('wedding_model');
	}	


	function index(){
		$data['wedding'] = $this->wedding_model->wedding_list();
		$this->load->view('template/header');
		$this->load->view('wedding/index', $data);
		$this->load->view('template/footer');
	}

	function view_create(){

		$this->load->view('template/header');
		$this->load->view('wedding/create');
		$this->load->view('template/footer');
	}

	function create(){
		$this->wedding_model->wedding_create();
			redirect('wedding');	
	}

	function edit($id){
		$data['wedding'] = $this->wedding_model->wedding_get($id);
		
		$this->load->view('template/header');
		$this->load->view('wedding/edit', $data);
		$this->load->view('template/header');
	}
	function update(){
		$this->wedding_model->wedding_update();
		redirect('wedding');
	}

	function delete($id){
		$this->wedding_model->wedding_delete($id);
		redirect('wedding');
	}

}
?>