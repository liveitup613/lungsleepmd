<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageContact extends CI_Controller {

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
		$this->db->from('tblcontact');
		$this->db->where('ID', 1);
		$data = $this->db->get()->row_array();

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

        $this->load->view('be/contactus/index', $data);
	}
	
	public function update() {
		$data = $this->input->post();

		$this->db->where('ID', 1);
		$this->db->update('tblcontact', $data);

		echo json_encode(array(
			'success' => true
		));
	}
}