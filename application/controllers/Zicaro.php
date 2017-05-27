<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zicaro extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
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
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "CATALOGO";
    $this->layout->view('/Zicaro/Catalogo', $datos, false);
  }

  function Publicaciones()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "PUBLICACIONES";
    $this->layout->view('/Zicaro/Publicaciones', $datos, false);
  }

  function PublicacionDetalle()
  {
    $datos['TipeView'] = "NOTICE";
    $datos['Imagen'] = "Publicacion1";
    $datos['Enunciado'] = "TITULO PUBLICACION";
    $this->layout->view('/Zicaro/PublicacionDetalle', $datos, false);
  }
}
