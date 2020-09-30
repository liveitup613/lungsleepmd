<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageServices extends CI_Controller {

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
		$this->db->from('tblwhatwedo');
		$data['services'] = $this->db->get()->result_array();
        $this->load->view('be/whatwedo/index', $data);
	}

	public function pulmonary_medicine() {
		$this->db->select('*');
		$this->db->from('tblservices');
		$this->db->where('ID', 1);
		$data = $this->db->get()->row_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/services/pulmonary_medicine', $data);
	}

	public function sleep_medicine() {
		$this->db->select('*');
		$this->db->from('tblservices');
		$this->db->where('ID', 2);
		$data = $this->db->get()->row_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/services/sleep_medicine', $data);
	}

	public function critical_care_medicine() {
		$this->db->select('*');
		$this->db->from('tblservices');
		$this->db->where('ID', 3);
		$data = $this->db->get()->row_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/services/critical_care_medicine', $data);
	}	

	public function updateService() {
		$date = time();
        $avatar = "";

		$ID = $this->input->post('ID');
        $blog_data = array(
			'Content' => $this->input->post('Content'),			
        );

        if (!empty($_FILES["Portfolio"]["name"])) {
            $config['upload_path'] = 'assets/images/services/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['overwrite'] = true;
            $config['file_name'] = 'services'.$date;
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
			$this->db->select('Portfolio');
			$this->db->from('tblservices');
			$this->db->where('ID', $ID);
			$result = $this->db->get()->row_array();

			if (!empty($result['Portfolio']) && file_exists('assets/images/services/'.$result['Portfolio']))
				unlink('assets/images/services/'.$result['Portfolio']);
			$blog_data['Portfolio'] = $avatar;
		}			

		$this->db->where('ID', $ID);
		$this->db->update('tblservices', $blog_data);

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

	public function additional() {
		$this->db->select('*');
		$this->db->from('tbladditionalservices');
		$data['services'] = $this->db->get()->result_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/services/additional', $data);
	}

	public function addAdditional() {
		$data = $this->input->post();

		$this->db->insert('tbladditionalservices', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function deleteAdditional() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tbladditionalservices');

		echo json_encode(array(
			'success' => true
		));
	}

	public function updateAdditional() {
		$ID = $this->input->post('ID');
		$Title = $this->input->post('Title');

		$this->db->where('ID', $ID);
		$this->db->update('tbladditionalservices', array('Title' => $Title));

		echo json_encode(array(
			'success' => true
		));
	}

	public function service_fees() {
		$this->db->select('*');
		$this->db->from('tblservicefees');
		$data['fees'] = $this->db->get()->result_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/services/fees', $data);
	}

	public function addFee() {
		$data = $this->input->post();

		$this->db->insert('tblservicefees', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function getFee() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblservicefees');
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

	public function updateFee() {
		$ID = $this->input->post('ID');
		$Title = $this->input->post('Title');
		$Price = $this->input->post('Price');

		$this->db->where('ID', $ID);
		$this->db->update('tblservicefees', array('Title' => $Title, 'Price' => $Price));

		echo json_encode(array(
			'success' => true
		));
	}

	public function deleteFee() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tblservicefees');

		echo json_encode(array(
			'success' => true
		));
	}
	
}