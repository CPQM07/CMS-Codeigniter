<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ZicaroUS extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->layout->setLayout('/ZicaroUS/MasterPage', false);
  }

  function index()
  {
    $this->layout->view('/ZicaroUS/Inicio');
  }

}
