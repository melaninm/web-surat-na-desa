<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{			
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();
		
		$this->load->model('Data_model', 'data');
		$data['prestasi'] = $this->data->getPrestasi();
		
		$this->load->view('user/awal', $data);
	
	}

	public function profile()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();
		
		$this->load->view('user/profile', $data);
		
	}

	public function edit()
	{
			$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');

		if($this->form_validation->run() == false){
			
			$this->load->view('user/edit', $data);
			
		}
		else
		{
			$name = $this->input->post('name');
			$jurusan = $this->input->post('jurusan');
			$username = $this->input->post('username');


			//cek jika ada gambar yang akan di upload
			$upload_image = $_FILES['image']['name'];

			if($upload_image)
			{
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image'))
				{
					$old_image = $data['user']['image'];
					if($old_image != 'default.jpg')
					{
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else
				{
					echo $this->upload->display_errors();	
				}
			}

			

			$this->db->set('name', $name);
			$this->db->set('jurusan', $jurusan);
			$this->db->where('username', $username);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has been updated</div>');
			redirect('user/profile');
		}
		
	}

}	