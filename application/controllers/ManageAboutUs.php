<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageAboutUs extends CI_Controller {

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
		$this->db->select('*');
		$this->db->from('tblaboutus');
		$this->db->where('ID', 1);
		$data = $this->db->get()->row_array();

		$type_array = array('Association', 'Affiliation', 'Certification');

		foreach ($type_array as $type) {
			$this->db->select('*');
			$this->db->where('Type', $type);
			$this->db->from('tblresource');
			$data[$type.'s'] = $this->db->get()->result_array();
		}

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();
		
        $this->load->view('be/aboutus/index', $data);
	}
	
	public function updateContent(){
		$data = $this->input->post();

		$this->db->where('ID', 1);
		$this->db->update('tblaboutus', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function addImage() {
		$date = time();
        $avatar = "";

		$ID = $this->input->post('ID');

        if (!empty($_FILES["Portfolio"]["name"])) {
            $config['upload_path'] = 'assets/images/resource/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['overwrite'] = true;
            $config['file_name'] = 'resource'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('Portfolio')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $avatar = $data['file_name'];
		}		
		
		$resource_data = array(
			'ID' => $ID,
			'Portfolio' => $avatar,
			'Type' => $this->input->post('Type')
		);
		
		$this->db->insert('tblresource', $resource_data);

		$returnedID = $this->db->insert_id();

		if ($returnedID == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true
			));
	}

	public function deleteImage() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblresource');
		$data = $this->db->get()->row_array();

		if ($data == null)
		{
			echo json_encode(array(
				'success' => false
			));

			return;
		}

		if (!empty($data['Portfolio']) && file_exists('assets/images/resource/'.$data['Portfolio']))
			unlink('assets/images/resource/'.$data['Portfolio']);

		$this->db->where('ID', $ID);
		$this->db->delete('tblresource');

		echo json_encode(array(
			'success' => true
		));
	}
}