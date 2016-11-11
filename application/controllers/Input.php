<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function index()
	{
            if(!empty($this->input->post('cardNumber'))){
                $data = array(
                    'id' => $this->input->post('pid'),
                    'cardNumber' => $this->input->post('cardNumber'),
                    'expiry-month' => $this->input->post('expiry-month'),
                    'expiry-year' => $this->input->post('expiry-year'),
                    'cvv' => $this->input->post('cvv'),
                    'nameoncard' => $this->input->post('nameoncard')
                );
            }
            
            $this->load->view('head');
            $this->load->view('input');
            $this->load->view('footer');
	}
}
