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
    $datos['TipeView'] = "NOTICE";
    $datos['Enunciado'] = "QUIENES SOMOS";
    $this->layout->view('/Zicaro/QuienesSomos', $datos, false);
  }

  function Enviar(){

    $this->form_validation->set_rules('Nombre','Nombre','trim|required|min_length[3]|alpha');
    $this->form_validation->set_rules('Correo','Correo Electrónico','trim|required|valid_email');
    $this->form_validation->set_rules('Asunto','Asunto','trim|required|min_length[3]|alpha');
    $this->form_validation->set_rules('Mensaje','Mensaje','trim|required|min_length[10]');

    if ($this->form_validation->run() == FALSE) {
      $datos['TipeView'] = "NOTICE";
      $datos['Enunciado'] = "CONTACTO";
      $this->layout->view('/Zicaro/Contacto', $datos, false);
    } else {

      $datos['Usuario'] = $_POST['Nombre'];
      $this->email->from($_POST['Correo']);
      $this->email->to('lmaximo@zicaropapel.cl');
      $this->email->cc('cpqm07@gmail.com');
      $this->email->subject($_POST['Asunto']);
      $this->email->message($_POST['Mensaje']);
      $this->email->send();

      $datos['TipeView'] = "NOTICE";
      $datos['Enunciado'] = "GRACIAS!";
      $this->layout->view('/Zicaro/Gracias', $datos);
    }
  }

  function Gracias(){
    $datos['TipeView'] = "NOTICE";
    $datos['Enunciado'] = "Correo Enviado";
    $this->layout->view('/Zicaro/Gracias', $datos, false);
  }

  function Contacto()
  {
    $datos['TipeView'] = "NOTICE";
    $datos['Enunciado'] = "CONTACTO";
    $this->layout->view('/Zicaro/Contacto', $datos, false);
  }

  function Catalogo()
  {
      $datos['Productos'] = $this->Productos->findAll();
      $datos['Categorias'] = $this->Categorias->findAll();
      $datos['TipeView'] = "NOTICE";
      $datos['Enunciado'] = "CATÁLOGO";

      $this->layout->view('/Zicaro/Catalogo', $datos, false);
  }

  function Producto($ID)
  {
      $datos['Producto'] = $this->Productos->findById($ID);
      $datos['Interes'] = $this->Productos->findInterested();
      $datos['Categoria'] = $this->Categorias->findAll();
      $datos['TipeView'] = "NOTICE";
      $datos['Enunciado'] = $datos['Producto']->get('PROD_NOMBRE');

      $this->layout->view('/Zicaro/Producto', $datos, false);
  }

  function Categorias($ID)
  {
      $datos['Productos'] = $this->Productos->findByCat($ID);
      $datos['Categorias'] = $this->Categorias->findAll();
      $datos['TipeView'] = "NOTICE";
      $datos['Enunciado'] = "CATÁLOGO";

      $this->layout->view('/Zicaro/Catalogo', $datos, false);
  }

  function Publicaciones()
  {
    $datos['Publicaciones'] = $this->Publicaciones->findAll();
    $datos['TipeView'] = "NOTICE";
    $datos['Enunciado'] = "PUBLICACIONES";
    $this->layout->view('/Zicaro/Publicaciones', $datos, false);
  }

  function PublicacionDetalle($ID)
  {
    $datos['Detalles'] = $this->Publicaciones->findById($ID);
    $datos['TipeView'] = "PUB";
    $datos['Titulo'] = $datos['Detalles']->get('PUB_TITULO');
    $datos['Ubicacion'] = $datos['Detalles']->get('PUB_UBICACION');
    $datos['Fecha'] = $datos['Detalles']->get('PUB_FECHA');
    $this->layout->view('/Zicaro/PublicacionDetalle', $datos, false);
  }
}
