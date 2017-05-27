<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zicaro extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Publicaciones_Model', 'Publicaciones');
    $this->load->model('Productos_Model', 'Productos');
    $this->load->model('Categorias_Model', 'Categorias');
    $this->layout->setLayout('/Zicaro/MasterPage', false);
  }

  function Inicio()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "AL RECICLAJE DE PAPEL EN ARTE";
    $this->layout->view('/Zicaro/Inicio', $datos, false);
  }

  function QuienesSomos()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "QUIENES SOMOS";
    $this->layout->view('/Zicaro/QuienesSomos', $datos, false);
  }

  function Contacto()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "CONTACTO";
    $this->layout->view('/Zicaro/Contacto', $datos, false);
  }

  function Catalogo()
  {
    $datos['Productos'] = $this->Productos->findAll();
    $datos['Categorias'] = $this->Categorias->findAll();
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "CATALOGO";
    $this->layout->view('/Zicaro/Catalogo', $datos, false);
  }

  function Publicaciones()
  {
    $datos['Publicaciones'] = $this->Publicaciones->findAll();
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "PUBLICACIONES";
    $this->layout->view('/Zicaro/Publicaciones', $datos, false);
  }

  function PublicacionDetalle($ID)
  {
    $datos['Detalles'] = $this->Publicaciones->findById($ID);
    $datos['TipeView'] = "NOTICE";
    $datos['Imagen'] = "Publicacion1";
    $datos['Enunciado'] = $datos['Detalles']->get('PUB_TITULO');
    $this->layout->view('/Zicaro/PublicacionDetalle', $datos, false);
  }
}
