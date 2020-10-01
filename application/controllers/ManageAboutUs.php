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

		$this->db->select('*');
		$this->db->from('tblstaffs');
		$data['staffs'] = $this->db->get()->result_array();
		
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

	public function addStaff() {
		$date = time();
        $avatar = "";

        if (!empty($_FILES["Attach"]["name"])) {
            $config['upload_path'] = 'assets/images/staffs/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['overwrite'] = true;
            $config['file_name'] = 'form'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('Attach')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $avatar = $data['file_name'];
		}		
		
		$resource_data = array(
			'Name' => $this->input->post('Name'),			
			'Description' => $this->input->post('Description'),
			'Attach' => $avatar
		);
		
		$this->db->insert('tblstaffs', $resource_data);

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

	public function getStaff() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblstaffs');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		echo json_encode(array(
			'success' => true,
			'data' => $data
		));
	}

	public function updateStaff() {
		$date = time();
        $avatar = "";

		$ID = $this->input->post('ID');
		
		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblstaffs');
		$patient_data = $this->db->get()->row_array();

		if ($patient_data == null)
		{
			echo json_encode(array(
				'success' => false
			));

			return;
		}

		$resource_data = array(
			'Name' => $this->input->post('Name'),		
			'Description' => $this->input->post('Description')		
		);

        if (!empty($_FILES["Attach"]["name"])) {
            $config['upload_path'] = 'assets/images/staffs/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['overwrite'] = true;
            $config['file_name'] = 'form'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('Attach')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $avatar = $data['file_name'];
		}		
		
		if ($avatar != '') {
			if (!empty($patient_data['Attach']) && file_exists('assets/images/staffs/'.$patient_data['Attach']))
			unlink('assets/images/staffs/'.$patient_data['Attach']);

			$resource_data['Attach'] = $avatar;
		}

		
		$this->db->where('ID', $ID);
		$this->db->update('tblstaffs', $resource_data);

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

	public function deleteStaff() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblstaffs');
		$data = $this->db->get()->row_array();

		if ($data == null)
		{
			echo json_encode(array(
				'success' => false
			));

			return;
		}

		if (!empty($data['Attach']) && file_exists('assets/images/staffs/'.$data['Attach']))
			unlink('assets/images/staffs/'.$data['Attach']);

		$this->db->where('ID', $ID);
		$this->db->delete('tblstaffs');

		echo json_encode(array(
			'success' => true
		));
	}
}