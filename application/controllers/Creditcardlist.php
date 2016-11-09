<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creditcardlist extends CI_Controller {

	public function index()
	{
            
            $crud = new grocery_CRUD();

            $crud->set_table('creditcard');

            $output = $crud->render();
            
            //$this->load->view('head');
            $this->load->view('list',$output);
            //$this->load->view('footer');
	}
}
