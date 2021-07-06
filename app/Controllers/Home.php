<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function __construct()
	{
		//$this->load->model('survay_form_model');
		// $userModel = new \App\Models\Survay_form();
	}
	public function index()
	{
		return view('userForm');
	}

	public function addRecord()
	{
		$userModel = new \App\Models\Survay_form();
		helper(['form', 'url']);
		$validation =  \Config\Services::validation();
		// $validation->setRules([
		// 	'name' => 'required',
		// 	'email' => 'required|min_length[10]',
		// 	'Fcolor' => 'required'
		// ]);
		// $this->form_validation->set_rules('name','name','required');
		// $this->form_validation->set_rules('email','email','required');
		// $this->form_validation->set_rules('Fcolor','Fcolor','required');
		if ( $_POST['name'] == '' || $_POST['email'] == '' || $_POST['Fcolor'] == '')
        {
           return view('userForm', [
                'validation' => 'Please fill all fields',
            ]);
        }
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fcolor = $_POST['fcolor'];
		$values = array(
			'name'      => $name,
			'email'     => $email,
			'Fcolor'    => $fcolor
		);
		$response  = $userModel->InserServeryForm($values);
				if($response==true){
					return redirect()->to('Home/successMesg'); 
				}
				else{
				   return redirect()->to('Home/errorMesg');
				}

	}

	public function successMesg()
	{
		return view('success');
	}

	public function errorMesg()
	{
		return view('ErrorOnSubmit');
	}
}
