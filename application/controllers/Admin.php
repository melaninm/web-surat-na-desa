<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{			
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Homepage';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		$this->load->model('Data_model', 'data');
		$data['prestasi'] = $this->data->getPrestasi();
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/homepage', $data);
		$this->load->view('template/footer');
	}

	public function profile()
	{
		$start = $this->uri->segment(3);
        $config['base_url'] = 'http://localhost/PPL/index.php/Admin/profile/';
        $config['total_rows'] = 6;
        $config['per_page'] = 3;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);

		$data['title'] = 'Data Warga';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/data_warga', $data);
		$this->load->view('template/footer');
	}

	public function edit()
	{
		$data['title'] = 'Data Admin';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');

		if($this->form_validation->run() == false){
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar1', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/data_admin', $data);
			$this->load->view('template/footer');
		}
		else
		{
			$name = $this->input->post('name');
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
			$this->db->where('username', $username);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has been updated</div>');
			redirect('admin/profile');
		}
	}

	public function menu()
	{
		$start = $this->uri->segment(3);
        $config['base_url'] = 'http://localhost/PPL/index.php/Admin/menu/';
        $config['total_rows'] = 6;
        $config['per_page'] = 3;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);

		$data['title'] = 'Data Rekap';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/rekap_data', $data);
		$this->load->view('template/footer');
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$this->load->model('Data_model', 'data');
		$data['prestasi'] = $this->data->getPrestasi();
		$this->load->view('admin/laporan_pdf', $data);

		$paper_size = 'F4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("DataPrestasi_Mahasiswa.pdf", array('Attachment' =>0));
	}

	public function tambah_warga()
	{
		$data['title'] = 'Tambah Warga';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/tambah_warga', $data);
		$this->load->view('template/footer');

	}

	public function tambah_admin()
	{
		$data['title'] = 'Tambah Admin';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/tambah_admin', $data);
		$this->load->view('template/footer');

	}

	public function detail_warga()
	{
		$data['title'] = 'Detail Warga';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/detail_warga', $data);
		$this->load->view('template/footer');

	}

	public function edit_detail_warga()
	{
		$data['title'] = 'Edit Detail Warga';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();
		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/edit_detail_warga', $data);
		$this->load->view('template/footer');
	}

	public function detail_admin()
	{
		$data['title'] = 'Detail Admin';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/detail_admin', $data);
		$this->load->view('template/footer');
	}

	public function edit_detail_admin()
	{
		$data['title'] = 'Edit Detail Admin';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/edit_detail_admin', $data);
		$this->load->view('template/footer');
	}

	public function detail_pengajuan_surat()
	{
		$data['title'] = 'Detail Pengajuan Surat';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/detail_pengajuan_surat', $data);
		$this->load->view('template/footer');
	}

	public function detail_data_rekap()
	{
		$data['title'] = 'Detail Data Rekap';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]) ->row_array();

		
		$data['userr'] = $this->db->get('user')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/detail_data_rekap', $data);
		$this->load->view('template/footer');
	}

}