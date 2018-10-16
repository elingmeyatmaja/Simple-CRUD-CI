<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies

    }

    // List all your items
    public function index( $offset = 0 )
    {
        $data['content'] = $this->db->get('identitas');

        $this->load->view('crud/index', $data);
    }
    
    // Add a new item
    public function add()
    {

    }

    // Update one item
    public function update( $id= NULL )
    {

    }

    // DELETE one item
    public function delete( $id= NULL )
    {

    }
}
