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
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "AL RECICLAJE DE PAPEL EN ARTE";
    $this->layout->view('/ZicaroES/Inicio', $datos, false);
  }

  function QuienesSomos()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "QUIENES SOMOS";
    $this->layout->view('/ZicaroES/QuienesSomos', $datos, false);
  }

  function Contacto()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "CONTACTO";
    $this->layout->view('/ZicaroES/Contacto', $datos, false);
  }

  function Catalogo()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "CATALOGO";
    $this->layout->view('/ZicaroES/Catalogo', $datos, false);
  }

  function Publicaciones()
  {
    $datos['TipeView'] = "DEFAULT";
    $datos['Enunciado'] = "PUBLICACIONES";
    $this->layout->view('/ZicaroES/Publicaciones', $datos, false);
  }

  function PublicacionDetalle()
  {
    $datos['TipeView'] = "NOTICE";
    $datos['Imagen'] = "Publicacion1";
    $datos['Enunciado'] = "TITULO PUBLICACION";
    $this->layout->view('/ZicaroES/PublicacionDetalle', $datos, false);
  }

  function ZicaroAmigos()
  {
    $datos['TipeView'] = "ZicaroAMIGOS";
    $datos['Enunciado'] = "ZICARO AMIGOS";
    $this->layout->view('/ZicaroES/ZicaroAmigos', $datos, false);
  }

}
