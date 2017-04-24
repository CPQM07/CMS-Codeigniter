<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ZICARO extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->layout->setLayout('/BackOffice/MasterPage', false);
  }

  function index()
  {
    $this->layout->view('/BackOffice/Inicio');
  }

}
