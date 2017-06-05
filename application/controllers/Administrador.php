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
              'PROD_DESC_C' => $_POST['PROD_DESC_C'],
              'PROD_DESC_L' => $_POST['PROD_DESC_L'],
              'PROD_PRECIO' => $_POST['PROD_PRECIO'],
              'PROD_IMAGEN' => $Imagen['upload_data']['raw_name'],
              'PROD_CAT_ID' => $_POST['PROD_CAT_ID'],
              'PROD_ESTADO' => $_POST['PROD_ESTADO']
              )
            );
            $data->insert();
            $data = array('upload_data' => $this->upload->data());
            $this->layout->view('/Administrador/Productos', $data);
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

  function NuevaPublicacion(){
    if (isset($_POST['PUB'])) {
      $NuevaPublicacion = $this->Publicaciones->create($_POST['PUB']);
      $NuevaPublicacion->insert();
      redirect('/Administrador/Publicaciones');
    } else {
      echo "NO AGRAGADO";
    }
  }
  //Fin Publicaciones

}
