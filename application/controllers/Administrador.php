<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in')) {
    $this->load->model('Categorias_Model', 'Categorias');
    $this->load->model('Productos_Model', 'Productos');
    $this->load->model('Publicaciones_Model', 'Publicaciones');
    $this->load->model('Usuario_Model', 'Usuarios');
    $this->layout->setLayout('/Administrador/MasterPage', false);
  } else {
    redirect("/Login/Login");
  }
  }

  function Inicio()
  {
    $this->layout->view('/Administrador/Inicio');
  }

  function CambiarEstado($tipo, $id){
    if ($tipo == 1) {
      $this->session->set_flashdata('Deshabilitar', 'Se Deshabilitó Correctamente');
      $this->Productos->update($id, array('PROD_ESTADO' => 2));
      redirect('/Administrador/Productos');
    } elseif ($tipo == 2) {
      $this->session->set_flashdata('Habilitar', 'Se Habilitó Correctamente');
      $this->Productos->update($id, array('PROD_ESTADO' => 1));
      redirect('/Administrador/Productos');
    } elseif ($tipo == 3) {
      $this->session->set_flashdata('Deshabilitar', 'Se Deshabilitó Correctamente');
      $this->Categorias->update($id, array('CAT_ESTADO' => 2));
      redirect('/Administrador/Categorias');
    } elseif ($tipo == 4) {
      $this->session->set_flashdata('Habilitar', 'Se Habilitó Correctamente');
      $this->Categorias->update($id, array('CAT_ESTADO' => 1));
      redirect('/Administrador/Categorias');
    } elseif ($tipo == 5) {
      $this->session->set_flashdata('Deshabilitar', 'Se Deshabilitó Correctamente');
      $this->Publicaciones->update($id, array('PUB_ESTADO' => 2));
      redirect('/Administrador/Publicaciones');
    } elseif ($tipo == 6) {
      $this->session->set_flashdata('Habilitar', 'Se Habilitó Correctamente');
      $this->Publicaciones->update($id, array('PUB_ESTADO' => 1));
      redirect('/Administrador/Publicaciones');
    } elseif ($tipo == 7) {
      $this->session->set_flashdata('Deshabilitar', 'Se Deshabilitó Correctamente');
      $this->Usuarios->update($id, array('USU_ESTADO' => 2));
      redirect('/Administrador/Usuarios');
    } elseif ($tipo == 8) {
      $this->session->set_flashdata('Habilitar', 'Se Habilitó Correctamente');
      $this->Usuarios->update($id, array('USU_ESTADO' => 1));
      redirect('/Administrador/Usuarios');
    }
  }

  //Inicio Productos
  function Productos()
  {
    $datos['Productos'] = $this->Productos->findAll();
    $datos['Categorias'] = $this->Categorias->findAll();
    $datos['URL'] = "Productos";
    $this->layout->view('/Administrador/Productos', $datos);
  }

  public function NuevoProducto(){
          $config['upload_path']          = './Resources/images/Productos/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['file_name']            = 'PROD_';
          $config['remove_spaces']        = true;
          $config['max_size']             = 3000;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('PROD_IMAGEN'))
          {
            $error = array('error' => $this->upload->display_errors());
            $this->layout->view('/Administrador/Productos', $error );
          }
          else
          {
            $Imagen = array('upload_data' => $this->upload->data());
            $data = $this->Productos->create(array(
              'PROD_ID' => 0,
              'PROD_NOMBRE' => $_POST['PROD_NOMBRE'],
              'PROD_DESC' => $_POST['PROD_DESC'],
              'PROD_PRECIO' => $_POST['PROD_PRECIO'],
              'PROD_IMAGEN' => $Imagen['upload_data']['raw_name'],
              'PROD_CAT_ID' => $_POST['PROD_CAT_ID'],
              'PROD_ESTADO' => $_POST['PROD_ESTADO']
              )
            );
            $data->insert();
            $this->layout->view('/Administrador/Productos');
          }
  }
  //Fin Productos

  //Inicio Categorias
  function Categorias()
  {
    $datos['Categorias'] = $this->Categorias->findAll();
    $datos['URL'] = "Categorias";
    $this->layout->view('/Administrador/Categorias', $datos);
  }

  function NuevaCategoria(){
    if (isset($_POST['CAT'])) {
      $NuevaCategoria = $this->Categorias->create($_POST['CAT']);
      $NuevaCategoria->insert();
      redirect('/Administrador/Categorias');
    } else {
      echo "NO AGRAGADO";
    }
  }
  //Fin Categorias

  //Inicio Publicaciones
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
          $config['upload_path']          = './Resources/images/Publicaciones/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['file_name']            = 'PUB_';
          $config['remove_spaces']        = true;
          $config['max_size']             = 3000;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('PUB_IMAGEN'))
          {
            $error = array('error' => $this->upload->display_errors());
            $this->layout->view('/Administrador/Publicaciones', $error );
          }
          else
          {
            $Imagen = array('upload_data' => $this->upload->data());
            $data = $this->Publicaciones->create(array(
              'PUB_ID' => 0,
              'PUB_TITULO' => $_POST['PUB_TITULO'],
              'PUB_FECHA' => $_POST['PUB_FECHA'],
              'PUB_UBICACION' => $_POST['PUB_UBICACION'],
              'PUB_DESC_C' => $_POST['PUB_DESC_C'],
              'PUB_DESC_L' => $_POST['PUB_DESC_L'],
              'PUB_AUTOR' => $_POST['PUB_AUTOR'],
              'PUB_IMAGEN' => $Imagen['upload_data']['raw_name'],
              'PUB_ESTADO' => $_POST['PUB_ESTADO']
              )
            );
            $data->insert();
            $this->layout->view('/Administrador/Publicaciones');
          }
  }
  //Fin Publicaciones

  // Inicio Usuarios
  function Usuarios()
  {
    $datos['Usuarios'] = $this->Usuarios->findAll();
    $datos['URL'] = "Usuarios";
    $this->layout->view('/Administrador/Usuarios', $datos);
  }
  //Fin Usuarios

}
