<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_event');
	}

	public function index()
	{
		$queryAllEvent = $this->M_event->getDataEvent();
		$DATA = array(
			'queryAllEvent' => $queryAllEvent
		);
		$this->load->view('home', $DATA);
		$this->load->helper('form');
	}

	public function fungsiTambah() 
	{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$location = $this->input->post('location');
		$date = $this->input->post('date');

		$data = array(
			'name' => $name,
			'description' => $description,
			'location' => $location,
			'date' => $date
		);

		$this->M_event->insertDataEvent($data);
		redirect(base_url('')); 
	}

	public function fungsiDelete($id)
	{
		$this->M_event->deleteDataEvent($id);
		redirect(base_url(''));
	}
}
