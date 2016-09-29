<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Primo extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		
		$this->load->model('primo_model');

	}

	/**
	 * Index Page for this controller.
	 * get all list of primo
	 */
	public function index()
	{
		$data = array();
		$data['title'] = "The List of Primos";
		$data['primo_list'] = $this->primo_model->get_primo_list();

		// print_r($data['primo_list']); exit;

		$this->load->view('header', $data);
		$this->load->view('primo/list', $data);
		$this->load->view('footer', $data);
	}

	/**
	 * This is the action for add page.
	 * localhost/ci-crud/primo/add
	*/
	public function add(){
		$data = array();
		$data['title'] = "Add Primo";
		
		$this->load->view('header', $data);
		$this->load->view('primo/add', $data);
		$this->load->view('footer', $data);
	} 
	
	/**
	 * This is the action to add primo.
	 * redirect to localhost/ci-crud/primo
	*/

	public function add_primo(){
		$primo_name = $this->input->post("primo_name");
		$primo_des = $this->input->post("primo_des");
		
		$primo_data = array(
			'primo_name'=>$primo_name,
			'primo_des'=>$primo_des,
			'created_date'=>date('Y-m-d H:i:s')
		);
		
		$this->primo_model->insert_primo($primo_data);
		
		redirect('primo');
	}

	/**
	 * This is the action for edit page.
	 * localhost/ci-crud/primo/edit/{primo_id}
	*/
	public function edit(){
		// getting the index of primo
		$primo_id = $_REQUEST['primo_id'];

		$data = array();
		
		// getting the data of primo by id
		$data['primo'] = $this->primo_model->get_primo($primo_id);
		$data['title'] = "Edit Primo";
		
		$this->load->view('header', $data);
		$this->load->view('primo/edit', $data);
		$this->load->view('footer', $data);
	} 
	
	/**
	 * This is the action to add primo.
	 * redirect to localhost/ci-crud/primo
	*/

	public function edit_primo(){
		$primo_id = $this->input->post("primo_id");
		$primo_name = $this->input->post("primo_name");
		$primo_des = $this->input->post("primo_des");
		
		$primo_data = array(
			'primo_name'=>$primo_name,
			'primo_des'=>$primo_des,
			'updated_date'=>date('Y-m-d H:i:s')
		);
		
		$this->primo_model->update_primo($primo_data, $primo_id);
		
		redirect('primo');
	}

	/**
	 * This is the action to delete primo.
	 * redirect to localhost/ci-crud/primo
	*/

	public function delete() {
		$primo_id = $this->input->get('primo_id');
		$this->primo_model->delete_primo($primo_id);
		
		redirect('primo');
	}
}

/* End of file primo.php */
/* Location: ./application/controllers/primo.php */