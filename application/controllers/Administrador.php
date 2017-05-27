<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->layout->setLayout('/Administrador/MasterPage', false);
  }

  function Inicio()
  {
    $this->layout->view('/Administrador/Inicio');
  }

  function Productos()
  {
    $this->load->model('Productos_Model', 'Productos');
    $datos['Productos'] = $this->Productos->findAll();
    $datos['URL'] = "Productos";
    $this->layout->view('/Administrador/Productos', $datos);
  }

  function Categorias()
  {
    $this->load->model('Categorias_Model', 'Categorias');
    $datos['Categorias'] = $this->Categorias->findAll();
    $datos['URL'] = "Categorias";
    $this->layout->view('/Administrador/Categorias', $datos);
  }

  function Publicaciones()
  {
    $this->load->model('Publicaciones_Model', 'Publicaciones');
    $datos['Publicaciones'] = $this->Publicaciones->findAll();
    $datos['URL'] = "Publicaciones";
    $this->layout->view('/Administrador/Publicaciones', $datos);
  }

  function AgregarPublicacion()
  {
    $datos['URL'] = "Publicaciones";
    $this->layout->view('/Administrador/AgregarPublicacion', $datos);
  }

}
