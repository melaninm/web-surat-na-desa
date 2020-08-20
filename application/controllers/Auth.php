<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('user');
		}
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == false)
		{
			$data['title'] = 'Login Page';
			//$this->load->view('template/header', $data);
			$this->load->view('auth/login');
			//$this->load->view('template/footer');
		}
		else{
			$this->_login();
		}
		
	}


	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		if($user)
		{
			if (password_verify($password, $user['password']))
			{
				$data =[
					'user_id' => $user['id'],
					'username' => $user['username'],
					'role_id' => $user['role_id']
				];

				$this->session->set_userdata($data);
				if($user['role_id'] == 1)
				{
					redirect('admin');
				}
				else{
					redirect('user');
				}
				
			}
			else{
				$this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Password is wrong</div>');
			redirect('auth');
			}
		}else
		{
			$this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Username is not registered</div>');
			redirect('auth');
		}

		

	}

	public function register()
	{
		if ($this->session->userdata('username')) {
			redirect('user');
		}
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[8]|matches[password2]', ['matches' => 'Password dont Match !','min_length' => 'Password too Short !']);
		$this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'User Registration';
			//$this->load->view('template/header', $data);
			$this->load->view('auth/register');
			//$this->load->view('template/footer');
		}
		else
		{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2
				];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Congratulation ! Your account has been created. Please Login</div>');
			redirect('auth');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">You have been logout</div>');
		redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}



		
}