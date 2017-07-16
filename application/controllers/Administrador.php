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
      $this->Usuarios->update($id, array('USU_ESTADO' => 0));
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

  function AgregarProducto()
  {
    $datos['Categorias'] = $this->Categorias->findAll();
    $this->layout->view('/Administrador/AgregarProducto', $datos);
  }

  function Mensajes()
  {
    $this->layout->view('/Administrador/Mensajes');
  }

  function NuevoProducto(){

    $this->form_validation->set_rules('PROD_NOMBRE','Nombre','trim|required|min_length[3]');
    $this->form_validation->set_rules('PROD_PRECIO','Precio','trim|required|numeric');
    $this->form_validation->set_rules('PROD_DESC','Descripcion','trim|required|min_length[3]|max_length[200]');

    if ($this->form_validation->run() == FALSE) {
      $datos['Categorias'] = $this->Categorias->findAll();
      $this->layout->view('/Administrador/AgregarProducto', $datos);
    } else {
      $config['upload_path']          = './Resources/images/Productos/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = 'PROD_';
      $config['remove_spaces']        = true;
      $config['max_size']             = 5000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('PROD_IMAGEN'))
      {
        $datos['Mensaje'] = "Hey!:(";
        $datos['Descripcion'] = "El Producto No Fue Ingresado".$this->upload->display_errors();
        $datos['Ir'] = "AgregarProducto";
        $this->layout->view('/Administrador/Mensajes', $datos );
      }
      else
      {
        $Imagen = array('upload_data' => $this->upload->data());
        $data = $this->Productos->create(array(
          'PROD_ID' => 0,
          'PROD_NOMBRE' => $_POST['PROD_NOMBRE'],
          'PROD_DESC' => $_POST['PROD_DESC'],
          'PROD_PRECIO' => $_POST['PROD_PRECIO'],
          'PROD_IMAGEN' => $Imagen['upload_data']['file_name'],
          'PROD_CAT_ID' => $_POST['PROD_CAT_ID'],
          'PROD_ESTADO' => $_POST['PROD_ESTADO']
          )
        );
        //var_dump($Imagen);die();
        $data->insert();

        $datos['Mensaje'] = "Hey!:)";
        $datos['Descripcion'] = "El Producto Fue Ingresado Exitosamente";
        $datos['Ir'] = "Productos";
        $this->layout->view('/Administrador/Mensajes', $datos);
      }
    }
  }

  function EditarProducto($id){
    $datos['Productos'] = $this->Productos->findById($id);
    $datos['Categorias'] = $this->Categorias->findAll();
    $this->layout->view('/Administrador/EditarProducto', $datos);
  }

  function ActualizarProducto($id){
    $data = array(
      'PROD_ID' => 0,
      'PROD_NOMBRE' => $_POST['PROD_NOMBRE'],
      'PROD_DESC' => $_POST['PROD_DESC'],
      'PROD_PRECIO' => $_POST['PROD_PRECIO'],
      'PROD_CAT_ID' => $_POST['PROD_CAT_ID'],
      'PROD_ESTADO' => $_POST['PROD_ESTADO']
    );
    //var_dump($Imagen);die();
    $data->update();
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
    $datos['Usuarios'] = $this->Usuarios->findAll();
    $this->layout->view('/Administrador/AgregarPublicacion', $datos);
  }

  function NuevaPublicacion(){

    $this->form_validation->set_rules('PUB_TITULO','TITULO','trim|required|min_length[3]');
    $this->form_validation->set_rules('PUB_FECHA','FECHA','required');
    $this->form_validation->set_rules('PUB_UBICACION','UBICACION','trim|required');
    $this->form_validation->set_rules('PUB_DESC_C','DESCRIPCION CORTA','trim|required');
    $this->form_validation->set_rules('PUB_DESC_L','DESCRIPCION LARGA','trim|required');
    //$this->form_validation->set_rules('PUB_USU_ID','AUTOR','trim|required');
    $this->form_validation->set_rules('PUB_ESTADO','ESTADO','required');

    if ($this->form_validation->run() == FALSE) {
      $this->layout->view('/Administrador/AgregarPublicacion');
    } else {
      $config['upload_path']          = './Resources/images/Publicaciones/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = 'PUB_';
      $config['remove_spaces']        = true;
      $config['max_size']             = 5000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('PUB_IMAGEN'))
      {
        $datos['Mensaje'] = "Hey!:(";
        $datos['Descripcion'] = "La Publicacion No Fue Ingresada".$this->upload->display_errors();
        $datos['Ir'] = "AgregarPublicacion";
        $this->layout->view('/Administrador/Mensajes', $datos );
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
          'PUB_USU_ID' => $_POST['PUB_USU_ID'],
          'PUB_IMAGEN' => $Imagen['upload_data']['file_name'],
          'PUB_ESTADO' => $_POST['PUB_ESTADO']
          )
        );
        $data->insert();

        $datos['Mensaje'] = "Hey!:)";
        $datos['Descripcion'] = "La Publicacion Fue Ingresada Exitosamente";
        $datos['Ir'] = "Publicaciones";
        $this->layout->view('/Administrador/Mensajes', $datos);
      }
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

  function AgregarUsuario()
  {
    $datos['URL'] = "Usuarios";
    $this->layout->view('/Administrador/AgregarUsuario', $datos);
  }

  function NuevoUsuario(){

    $this->form_validation->set_rules('USU_RUT','RUT','trim|required|min_length[7]|max_length[8]');
    $this->form_validation->set_rules('USU_DV','DV','required|exact_length[1]');
    $this->form_validation->set_rules('USU_TIPO','TIPO DE USUARIO','required');
    $this->form_validation->set_rules('USU_NOMBRES','NOMBRES','trim|required');
    $this->form_validation->set_rules('USU_APELLIDOS','APELLIDOS','trim|required');
    $this->form_validation->set_rules('USU_BIO','BIOGRAFIA','trim');
    $this->form_validation->set_rules('USU_EMAIL','CORREO ELECTRÓNICO','trim|required|valid_email');
    $this->form_validation->set_rules('USU_TELEFONO','TELEFONO CONTACTO','trim|required');
    $this->form_validation->set_rules('USU_CLAVE','CONTRASEÑA','trim|required');
    $this->form_validation->set_rules('USU_CLAVE_2','CONFIRMAR CONTRASEÑA','trim|required|matches[USU_CLAVE]');
    $this->form_validation->set_rules('USU_ESTADO','ESTADO','trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->layout->view('/Administrador/AgregarUsuario');
    } else {
        $data = $this->Usuarios->create(array(
          'USU_ID' => 0,
          'USU_RUT' => $_POST['USU_RUT'],
          'USU_DV' => $_POST['USU_DV'],
          'USU_TIPO' => $_POST['USU_TIPO'],
          'USU_NOMBRES' => $_POST['USU_NOMBRES'],
          'USU_APELLIDOS' => $_POST['USU_APELLIDOS'],
          'USU_BIO' => $_POST['USU_BIO'],
          'USU_EMAIL' => $_POST['USU_EMAIL'],
          'USU_TELEFONO' => $_POST['USU_TELEFONO'],
          'USU_CLAVE' => $_POST['USU_CLAVE_2'],
          'USU_ESTADO' => $_POST['USU_ESTADO']
          )
        );
        $data->insert();

        $datos['Mensaje'] = "Hey!:)";
        $datos['Descripcion'] = "El Usuario Fue Ingresado Exitosamente";
        $datos['Ir'] = "Usuarios";
        $this->layout->view('/Administrador/Mensajes', $datos);
    }
  }

  function VerPerfil($ID)
  {
    $datos['Usuarios'] = $this->Usuarios->findById($ID);
    $datos['URL'] = "Usuarios";
    $this->layout->view('/Administrador/Perfil', $datos);
  }

  function ActualizarPerfil($ID)
  {
    $this->Usuarios->update($ID, $_POST['PERFIL']);
    var_dump($_POST['PERFIL']);
    redirect('/Administrador/Usuarios');
  }
  //Fin Usuarios

}
