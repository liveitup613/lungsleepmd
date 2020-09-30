<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageQuickLinks extends CI_Controller {

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
	
	public function insurance() {
		$this->db->select('*');
		$this->db->where('Type', 'Insurance');
		$this->db->from('tblresource');
		$data['insurances'] = $this->db->get()->result_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/links/insurance', $data);
	}

	public function patient_form() {
		$type_array = array('Medical', 'Instruction', 'Sleep', 'Other');

		foreach ($type_array as $type) {
			$this->db->select('*');
			$this->db->where('Type', $type);
			$this->db->from('tblpatientform');
			$data[$type.'s'] = $this->db->get()->result_array();
		}

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/links/patient-form', $data);
	}

	public function addPatientForm() {
		$date = time();
        $avatar = "";

		$ID = $this->input->post('ID');

        if (!empty($_FILES["Attach"]["name"])) {
            $config['upload_path'] = 'assets/forms/';
            $config['allowed_types'] = 'pdf|doc|docx';
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
			'ID' => $ID,
			'Title' => $this->input->post('Title'),			
			'Type' => $this->input->post('Type'),
			'Attach' => $avatar
		);
		
		$this->db->insert('tblpatientform', $resource_data);

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

	public function getPatientForm() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblpatientform');
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

	public function updatePatientForm() {
		$date = time();
        $avatar = "";

		$ID = $this->input->post('ID');
		
		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblpatientform');
		$patient_data = $this->db->get()->row_array();

		if ($patient_data == null)
		{
			echo json_encode(array(
				'success' => false
			));

			return;
		}

		$resource_data = array(
			'Title' => $this->input->post('Title'),				
		);

        if (!empty($_FILES["Attach"]["name"])) {
            $config['upload_path'] = 'assets/forms/';
            $config['allowed_types'] = 'pdf|doc|docx';
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
			if (!empty($patient_data['Attach']) && file_exists('assets/forms/'.$patient_data['Attach']))
			unlink('assets/forms/'.$patient_data['Attach']);

			$resource_data['Attach'] = $avatar;
		}

		
		$this->db->where('ID', $ID);
		$this->db->update('tblpatientform', $resource_data);

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

	public function deletePatientForm() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblpatientform');
		$data = $this->db->get()->row_array();

		if ($data == null)
		{
			echo json_encode(array(
				'success' => false
			));

			return;
		}

		if (!empty($data['Attach']) && file_exists('assets/forms/'.$data['Attach']))
			unlink('assets/forms/'.$data['Attach']);

		$this->db->where('ID', $ID);
		$this->db->delete('tblpatientform');

		echo json_encode(array(
			'success' => true
		));
	}

	public function medical_videos() {
		$this->db->select('*');
		$this->db->from('tblmedicalvideos');
		$data['videos'] = $this->db->get()->result_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

		$this->load->view('be/links/instructional-videos', $data);
	}

	public function addMedicalVideo() {
		$data = $this->input->post();

		$this->db->insert('tblmedicalvideos', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function getMedicalVideo() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblmedicalvideos');
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

	public function deleteMedicalVideo() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tblmedicalvideos');

		echo json_encode(array(
			'success' => true
		));
	}

	public function updateMedicalVideo() {
		$ID = $this->input->post('ID');
		$Title = $this->input->post('Title');
		$YoutubeID = $this->input->post('YoutubeID');

		$this->db->where('ID', $ID);
		$this->db->update('tblmedicalvideos', array('Title' => $Title, 'YoutubeID' => $YoutubeID));

		echo json_encode(array(
			'success' => true
		));
	}

	public function blogs()
	{		
		$this->db->select('*');
		$this->db->from('tblblogs');
		$data['blogs'] = $this->db->get()->result_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();
		
        $this->load->view('be/blog/index', $data);
	}


    public function editBlog($id) {
		
		if ($id != 0) {
			$this->db->select('*');
			$this->db->where('ID', $id);
			$this->db->from('tblblogs');
			$blog = $this->db->get()->row_array();
			$blog['ID'] = $id;
		}
		else {
			$blog['Title'] ='';
			$blog['Content'] = '';
			$blog['Portfolio'] = '';
			$blog['Enable'] = 'YES';
			$blog['ID'] = 0;
		}
		
        $this->load->view('be/blog/edit', $blog);
	}
	
	public function deleteBlog() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$result = $this->db->get('tblblogs')->row_array();

		if (!empty($result['Portfolio']) && file_exists('assets/images/blogs/'.$result['Portfolio']))
			unlink('assets/images/blogs/'.$result['Portfolio']);

		$this->db->where('ID', $ID);
		$this->db->delete('tblblogs');

		echo json_encode(array(
			'success' => true
		));
	}

	public function updateBlog() {
		$date = time();
        $avatar = "";

		$ID = $this->input->post('ID');

        $blog_data = array(
            'Title' => $this->input->post('Title'),
			'Content' => $this->input->post('Content'),
			'Enable' => $this->input->post('Enable'),			
        );

        if (!empty($_FILES["Portfolio"]["name"])) {
            $config['upload_path'] = 'assets/images/blogs/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['overwrite'] = true;
            $config['file_name'] = 'portfolio'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('Portfolio')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $avatar = $data['file_name'];
        }
		
		$returnedID = 0;

		if ($ID == '0') {
			$blog_data['Portfolio'] = $avatar;
			$blog_data['CreatedDate'] = date('Y-m-d H:i:s');
			$this->db->set($blog_data);
			$returnedID = $this->db->insert('tblblogs');
		}
		else {
			if ($avatar !== '') {
				$this->db->select('Portfolio');
				$this->db->from('tblblogs');
				$this->db->where('ID', $ID);
				$result = $this->db->get()->row_array();

				if (!empty($result['Portfolio']) && file_exists('assets/images/blogs/'.$result['Portfolio']))
					unlink('assets/images/blogs/'.$result['Portfolio']);
				$blog_data['Portfolio'] = $avatar;
			}			

			$this->db->where('ID', $ID);
			$this->db->update('tblblogs', $blog_data);

			$returnedID = $this->db->affected_rows();
		}

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