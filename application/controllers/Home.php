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
		$this->load->view('fe/home');
    }
    
    public function pulmonary_medicine() {
		$this->load->view('fe/pulmonary-medicine');
	}

	public function sleep_medicine() {
		$this->load->view('fe/sleep-medicine');
	}

	public function critical_medicine() {
		$this->load->view('fe/critical-care-medicine');
	}

	public function sevice_fees() {
		$this->load->view('fe/service-fees');
	}

	public function additional_services() {
		$this->load->view('fe/additional-service');
	}

	public function insurance() {
		$this->load->view('fe/insurance');
	}

	public function patient_forms() {
		$this->load->view('fe/patient-form');
	}

	public function instructional_medical_videos() {
		$this->load->view('fe/medical-videos');
	}

	public function blogs() {
		$this->load->view('fe/blogs');
	}

	public function blogView($id) {
		$this->load->view('fe/blogView');
	}

	public function aboutUs() {
		$this->load->view('fe/aboutUs');
	}

	public function contactUs() {
		$this->load->view('fe/contactUs');
	}
}
