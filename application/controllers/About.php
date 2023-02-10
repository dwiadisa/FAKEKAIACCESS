<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => "About",


        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/about');
        $this->load->view('templates/footer');
    }
}


    

/* End of file About.php and path \application\controllers\About.php */
