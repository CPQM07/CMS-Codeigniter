<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ZicaroES extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->layout->setLayout('/ZicaroES/MasterPage', false);
  }

  function index()
  {
    $this->layout->view('/ZicaroES/Inicio');
  }

  function proyecto()
  {
    $this->layout->view('/ZicaroES/Proyecto');
  }

}
