<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct() {
parent::__construct();

$this->load->database();


$this->load->helper('url');

$this->load->library('image_CRUD');
}

/**
 * Index Page for this controller.
 *
 * Maps to the following URL
 * 		http://example.com/index.php/welcome
 * 	- or -
 * 		http://example.com/index.php/welcome/index
 * 	- or -
 * Since this controller is set as the default controller in
 * config/routes.php, it's displayed at http://example.com/
 *
 * So any other public methods not prefixed with an underscore will
 * map to /index.php/welcome/<method_name>
 * @see https://codeigniter.com/user_guide/general/urls.html
 */
function _example_output($output = null)
{
$this->load->view('example.php', $output);
}

function index()
{
$this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
}

function example1()
{
$image_crud = new image_CRUD();

$image_crud->set_primary_key_field('id');
$image_crud->set_url_field('url');
$image_crud->set_table('example_1')
->set_image_path('assets/uploads');

$output = $image_crud->render();

$this->_example_output($output);
}

function example2()
{
$image_crud = new image_CRUD();

$image_crud->set_primary_key_field('id');
$image_crud->set_url_field('url');
$image_crud->set_table('example_2')
->set_ordering_field('priority')
->set_image_path('assets/uploads');


$output = $image_crud->render();

$this->_example_output($output);
}

function example3()
{
$image_crud = new image_CRUD();

$image_crud->set_primary_key_field('id');
$image_crud->set_url_field('url');
$image_crud->set_table('example_3')
->set_relation_field('category_id')
->set_ordering_field('priority')
->set_image_path('assets/uploads');

$output = $image_crud->render();

//$this->_example_output($output);

$this->load->view('example.php', $output);
}

function example4()
{
$image_crud = new image_CRUD();

$image_crud->set_primary_key_field('id');
$image_crud->set_url_field('url');
$image_crud->set_title_field('title');
$image_crud->set_table('example_4')
->set_ordering_field('priority')
->set_image_path('assets/uploads');

$output = $image_crud->render();

$this->_example_output($output);
}

function simple_photo_gallery()
{
$image_crud = new image_CRUD();

$image_crud->set_table('example_3');

$image_crud->set_primary_key_field('id');
$image_crud->set_url_field('url');

$image_crud->set_relation_field('category_id')
->set_ordering_field('priority')
->set_image_path('assets/uploads');

$output = $image_crud->render();

print_r($image_crud);

//$this->_example_output($output);
}


}
