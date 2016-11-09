<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function index()
	{
            $this->load->view('head');
            $this->load->view('input');
            $this->load->view('footer');
	}
}
