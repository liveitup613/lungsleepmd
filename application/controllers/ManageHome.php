<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageHome extends CI_Controller {

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

		$this->db->select('Avatar');
		$this->db->where('ID', 1);
		$this->db->from('tbluser');
		$data['user'] = $this->db->get()->row_array();

        $this->load->view('be/home/index', $data);
    }	

	public function updateContnet() {
		$data = $this->input->post();

		$this->db->where('ID', 1);
		$this->db->update('tblhome', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function addNewService() {
		$date = time();
        $avatar = "";

        $service_data = array(
            'Title' => $this->input->post('Title'),
			'Content' => $this->input->post('Content'),
			'Enable' => 'YES'            
        );

        if (!empty($_FILES["Portfolio"]["name"])) {
            $config['upload_path'] = 'assets/images/whoweserve/';
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

        $service_data['Portfolio'] = $avatar;

		$this->db->set($service_data);
		$Id = $this->db->insert('tblwhoweserve');

		if ($Id == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true
			));
	}
}
