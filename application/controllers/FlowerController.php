<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FlowerController extends CI_Controller {
 
function __Construct(){
  parent::__Construct ();
   $this->load->model('FlowerModel','f'); // load model; 
//the model will be further referred with the letter f 
}
 
public function index() {
    $this->load->view('flowers_view');
}
public function view($id=NULL){
    $row=$this->f->getFlower($id);
    $data['r']=$row;
    $this->load->view('single_flower_view',$data);
}
}

