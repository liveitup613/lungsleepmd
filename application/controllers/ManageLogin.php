<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageLogin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		
		parent::__construct();
		date_default_timezone_set('EST');
	}

	public function index()
	{		
        $this->load->view('be/login/index');
	}
	
	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->select('ID');
		$this->db->where('Name', $username);
		$this->db->where('Password', $password);
		$this->db->from('tbluser');
		$this->db->limit(1);
		$result = $this->db->get()->row_array();

		if ($result == null) {
			redirect('admin');
		}

		$this->session->set_userdata('userId', $result['ID']);

		redirect('admin/home');
	}

	public function logout() {
		$this->session->set_userdata('userID', '');

		redirect('admin');
	}

	public function userprofile() {
		$this->db->select('*');
		$this->db->from('tbluser');
		$this->db->where('ID', 1);
		$data = $this->db->get()->row_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/login/userprofile', $data);
	}

	public function updateProfile() {
		$this->db->select('*');
		$this->db->where(array(
			'Name' => 'admin',
			'Password' => $this->input->post('OldPassword')
		));
		$this->db->from('tbluser');
		$user_data = $this->db->get()->result_array();

		if ($user_data == null) {
			echo json_encode(array(
				'success' => false,
				'message' => 'Invalid Password'
			));
			return;
		}

		$date = time();
		$avatar = "";
		
        $blog_data = array(
			'Password' => $this->input->post('NewPassword'),			
        );

        if (!empty($_FILES["Portfolio"]["name"])) {
            $config['upload_path'] = 'assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['overwrite'] = true;
            $config['file_name'] = 'avatar'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('Portfolio')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $avatar = $data['file_name'];
		}
		
		if ($avatar !== '') {

			if (!empty($user_data['Avatar']) && file_exists('assets/images/'.$user_data['Avatar']))
				unlink('assets/images/services/'.$user_data['Avatar']);
			$blog_data['Avatar'] = $avatar;
		}			

		$this->db->where('ID', 1);
		$this->db->update('tbluser', $blog_data);

		$returnedID = $this->db->affected_rows();

		if ($returnedID == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true
			));
	}
}