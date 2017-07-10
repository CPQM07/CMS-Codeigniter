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
      $config['base_url'] = base_url('index.php/Zicaro/Catalogo/');
      $config['total_rows'] = $this->Productos->Count_All();
      $config['per_page'] = 6;
      $config['uri_segment'] = 3;
      $config['num_links'] = 5;
      //ESTILOS
      $config['full_tag_open'] = '<ul class="pagination">';
      $config['full_tag_close'] = '</ul>';
      $config['first_link'] = false;
      $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';
      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="prev">';
      $config['prev_tag_close'] = '</li>';
      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li class="active"><a href="#">';
      $config['cur_tag_close'] = '</a></li>';
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      //FIN ESTILOS
      $this->pagination->initialize($config);

      $datos['Productos'] = $this->Productos->Get_Pagination($config['per_page']);
      $datos['Categorias'] = $this->Categorias->findAll();
      $datos['Paginacion'] = $this->pagination->create_links();
      $datos['TipeView'] = "NOTICE";
      $datos['Enunciado'] = "CATÁLOGO";

      $this->layout->view('/Zicaro/Catalogo', $datos, false);
  }

  function Categorias($id)
  {
      $config['base_url'] = base_url('index.php/Zicaro/Catalogo/');
      $config['total_rows'] = $this->Productos->Count_All();
      $config['per_page'] = 6;
      $config['uri_segment'] = 3;
      $config['num_links'] = 5;
      //ESTILOS
      $config['full_tag_open'] = '<ul class="pagination">';
      $config['full_tag_close'] = '</ul>';
      $config['first_link'] = false;
      $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';
      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="prev">';
      $config['prev_tag_close'] = '</li>';
      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li class="active"><a href="#">';
      $config['cur_tag_close'] = '</a></li>';
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      //FIN ESTILOS
      $this->pagination->initialize($config);

      $datos['Productos'] = $this->Productos->findByCat($id);
      $datos['Categorias'] = $this->Categorias->findAll();
      $datos['Paginacion'] = $this->pagination->create_links();
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
