<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Categorias_Model', 'Categorias');
    $this->load->model('Productos_Model', 'Productos');
    $this->load->model('Publicaciones_Model', 'Publicaciones');
    $this->layout->setLayout('/Administrador/MasterPage', false);
  }

  function Inicio()
  {
    $this->layout->view('/Administrador/Inicio');
  }

  function Productos()
  {
    $datos['Productos'] = $this->Productos->findAll();
    $datos['URL'] = "Productos";
    $this->layout->view('/Administrador/Productos', $datos);
  }

  function AgregarProducto()
  {
    $datos['URL'] = "Productos";
    $datos['Categorias'] = $this->Categorias->findAll();
    $this->layout->view('/Administrador/AgregarProducto', $datos);
  }

  public function NuevoProducto(){
    if (isset($_POST['PROD'])) {
      $NuevoProducto = $this->Productos->create($_POST['PROD']);
      $NuevoProducto->insert();
      redirect('/Administrador/Productos');
    } else {
      echo "NO AGRAGADO";
    }
  }

  function Categorias()
  {
    $datos['Categorias'] = $this->Categorias->findAll();
    $datos['URL'] = "Categorias";
    $this->layout->view('/Administrador/Categorias', $datos);
  }

  function AgregarCategoria()
  {
    $datos['URL'] = "Categorias";
    $this->layout->view('/Administrador/AgregarCategoria', $datos);
  }

  public function NuevaCategoria(){
    if (isset($_POST['CAT'])) {
      $NuevaCategoria = $this->Categorias->create($_POST['CAT']);
      $NuevaCategoria->insert();
      redirect('/Administrador/Categorias');
    } else {
      echo "NO AGRAGADO";
    }
  }

  function Publicaciones()
  {
    $datos['Publicaciones'] = $this->Publicaciones->findAll();
    $datos['URL'] = "Publicaciones";
    $this->layout->view('/Administrador/Publicaciones', $datos);
  }

  function AgregarPublicacion()
  {
    $datos['URL'] = "Publicaciones";
    $this->layout->view('/Administrador/AgregarPublicacion', $datos);
  }

  public function NuevaPublicacion(){
    if (isset($_POST['PUB'])) {
      $NuevaPublicacion = $this->Publicaciones->create($_POST['PUB']);
      $NuevaPublicacion->insert();
      redirect('/Administrador/Publicaciones');
    } else {
      echo "NO AGRAGADO";
    }
  }

}
