<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->layout->setLayout('/BackOffice/MasterPage', false);
    $this->load->model('Zapatillas_Model', 'Zapatillas');
    $this->load->model('Categorias_Model', 'Categorias');
    $this->load->model('Usuarios_Model', 'Usuarios');
    $this->load->model('Marcas_Model', 'Marcas');
  }

  function shoes()
  {
    $datos['Zapatillas'] = $this->Zapatillas->findAll();
    $datos['AddActive'] = "Zapatillas";
    $this->layout->view('/BackOffice/Zapatillas', $datos);
  }

  function showByCategory($Categoria)
  {
    $datos['Categorias'] = $this->Zapatillas->findByCategory($Categoria);
    $datos['AddActive'] = "Categorias";
    $this->layout->view('/BackOffice/VerPorCategoria', $datos);
  }

  function category()
  {
    $datos['Categorias'] = $this->Categorias->findAll();
    $datos['AddActive'] = "Categorias";
    $this->layout->view('/BackOffice/Categorias', $datos);
  }

  function showByBrands($Marca)
  {
    $datos['Marcas'] = $this->Zapatillas->findByBrand($Marca);
    $datos['AddActive'] = "Marcas";
    $this->layout->view('/BackOffice/VerPorMarca', $datos);
  }

  function brands()
  {
    $datos['Marcas'] = $this->Marcas->findAll();
    $datos['AddActive'] = "Marcas";
    $this->layout->view('/BackOffice/Marcas', $datos);
  }

  function newShoes()
  {
    $datos['AddActive'] = "Zapatillas";
    $this->layout->view('/BackOffice/RegistroZapatilla', $datos);
  }

  function newCategory()
  {
    $datos['AddActive'] = "Categorias";
    $this->layout->view('/BackOffice/RegistroCategoria', $datos);
  }

  function newBrand()
  {
    $datos['AddActive'] = "Marcas";
    $this->layout->view('/BackOffice/RegistroMarca', $datos);
  }

  function login(){
  	$this->load->helper('form');
  	$this->load->library('form_validation');
  	$datos =array();
  	$datos;
  	if(isset($_REQUEST['correo']) && isset($_REQUEST['contrasena'])) {
  		$correo     =  $_REQUEST['correo'];
  		$contrasena =	 $_REQUEST['contrasena'];
  		//se fijan las rreglas de validación
  		$this->form_validation->set_rules('correo', 'correo', 'trim|required|xss_clean');
  		$this->form_validation->set_rules('contrasena', 'contrasena', 'trim|required|xss_clean|callback_check_database'); //valida el form y checkea la bd
  		//var_dump($this->form_validation->_error_array); exit();
  		if($this->form_validation->run()) { //si la validación falla se envía al form de nuevo
  			$correo = $this->session->userdata('logged_in');
  			redirect('BackOffice/shoes','refresh');
  	  } else {
  			session_destroy();
  			$this->session->unset_userdata('logged_in');
  			$datos['error'] = 'Usted no tiene privilegios suficientes para ingresar al sistema';
  		}
  	} else { $datos['error'] = "Usuario y/o contraseña incorrecta"; }
  	$this->load->view('/BackOffice/Login', $datos);
  }

  function logout(){
  	session_destroy();
  	$this->session->unset_userdata('logged_in');
  	//session_destroy(); //destruye la sesión, o sea el arreglo de sesión logged_in
  	redirect('/BackOffice/Login', 'refresh');
  }

  function check_database($contrasena) {
  	//Field validation succeeded.&nbsp; Validate against database
  	$correo = $this->input->post('correo'); //extrae el dato post que viene del formulario y la guarda en una variable
  	//query the database
  	$correo = $this->Usuarios->login($correo, $contrasena); // trae verdadero si encuentra los datos correo y pass en la bd
  	$existe = false;
  	if(!is_null($correo)){ //si hay resultado de la consulta en la bd
  		$sess_array = array();
  		$sess_array = array( //guarda los datos traidos de la bd en un array
  		'id' => $correo->get('usuario_id'),
  		'correo' => $correo->get('usuario_correo'),
  		'nombre' => $correo->get('usuario_nombre').' '.$correo->get('usuario_apellido')
  		);
  		$this->session->set_userdata('logged_in', $sess_array); //almacena el array $sess_array en array de sesión logged_in
  		$existe = true;
  	}
  	return $existe;
  }


}
