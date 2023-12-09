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
	}
}
