<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->db->where('ID', 1);
		$this->db->from('tblhome');
		$data = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->from('tblblogs');
		$this->db->where('Enable', 'YES');
		$this->db->limit(2);
		$this->db->order_by('CreatedDate', 'desc');
		$data['blogs'] = $this->db->get()->result_array();

		$this->load->view('fe/home', $data);
    }
    
    public function pulmonary_medicine() {
		$this->db->select('*');
		$this->db->where('ID', 1);
		$this->db->from('tblservices');
		$data = $this->db->get()->row_array();

		$this->load->view('fe/pulmonary-medicine', $data);
	}

	public function sleep_medicine() {
		$this->db->select('*');
		$this->db->where('ID', 2);
		$this->db->from('tblservices');
		$data = $this->db->get()->row_array();

		$this->load->view('fe/sleep-medicine', $data);
	}

	public function critical_medicine() {
		$this->db->select('*');
		$this->db->where('ID', 3);
		$this->db->from('tblservices');
		$data = $this->db->get()->row_array();

		$this->load->view('fe/critical-care-medicine', $data);
	}

	public function sevice_fees() {
		$this->db->select('*');
		$this->db->from('tblservicefees');
		$data['fees'] = $this->db->get()->result_array();
		
		$this->load->view('fe/service-fees', $data);
	}

	public function additional_services() {
		$this->db->select('*');
		$this->db->from('tbladditionalservices');
		$data['services'] = $this->db->get()->result_array();

		$this->load->view('fe/additional-service', $data);
	}

	public function insurance() {
		$this->db->select('*');
		$this->db->where('Type', 'Insurance');
		$this->db->from('tblresource');
		$data['insurances'] = $this->db->get()->result_array();

		$this->load->view('fe/insurance', $data);
	}

	public function patient_forms() {
		$type_array = array('Medical', 'Instruction', 'Sleep', 'Other');

		foreach ($type_array as $type) {
			$this->db->select('*');
			$this->db->where('Type', $type);
			$this->db->from('tblpatientform');
			$data[$type.'s'] = $this->db->get()->result_array();
		}

		$this->load->view('fe/patient-form', $data);
	}

	public function instructional_medical_videos() {
		$this->db->select('*');
		$this->db->from('tblmedicalvideos');
		$data['videos'] = $this->db->get()->result_array();

		$this->load->view('fe/medical-videos', $data);
	}

	public function blogs() {
		$this->db->select('*');
		$this->db->from('tblblogs');
		$data['blogs'] = $this->db->get()->result_array();

		$this->load->view('fe/blogs', $data);
	}

	public function blogView($id) {
		$this->db->select('*');
		$this->db->from('tblblogs');
		$this->db->where('ID', $id);
		$data = $this->db->get()->row_array();
		
		$this->load->view('fe/blogView', $data);
	}

	public function aboutUs() {
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

		$this->load->view('fe/aboutUs', $data);
	}

	public function contactUs() {
		$this->db->select('*');
		$this->db->from('tblcontact');
		$this->db->where('ID', 1);

		$data = $this->db->get()->row_array();
		$this->load->view('fe/contactUs', $data);
	}
}
