<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_Model', 'USUARIO');
	}
	public function Login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$datos =array();
		$datos;
		if(isset($_REQUEST['usuario']) && isset($_REQUEST['clave']))
		{
			$usuario     =  $_REQUEST['usuario'];
			$contraseña =	 $_REQUEST['clave'];
		   $this->form_validation->set_rules('usuario', 'usuario', 'trim|required|xss_clean');
		   $this->form_validation->set_rules('clave', 'clave', 'trim|required|xss_clean|callback_check_database');
		   if($this->form_validation->run())
		   {
		   	 $usuario = $this->session->userdata('logged_in');
				 redirect('/Administrador/Productos', 'refresh');
		   }else
		   {
	   	   $datos['error'] = "Usuario y/o contraseña incorrecta";
		   }

		}
    $this->load->view('/Administrador/Login', $datos);
	}

	function logout(){
	   session_destroy();
	   $this->session->unset_userdata('logged_in');
	   redirect('/Login/Login', 'refresh');
	}
 	function check_database($pass)
 	{
	   $usuario = $this->input->post('usuario');
	   if($this->valida_rut($usuario)){
		   	$rut = explode("-",$usuario);
		   	$usuario = $this->USUARIO->login($rut[0], $pass);
	   }else{
	   		$usuario = null;
	   }
	   $existe = false;
	   if(!is_null($usuario)){
	     	$sess_array = array();
				$sess_array = array(
				  'rut' => $usuario->get('USU_RUT'),
				  'dv' => $usuario->get('USU_DV'),
					'tipo' => $usuario->get('USU_TIPO'),
				  'nombres' => $usuario->get('USU_NOMBRES'),
				  'apellidos' => $usuario->get('USU_APELLIDOS'),
				  'correo' => $usuario->get('USU_EMAIL'),
				  'telefono' => $usuario->get('USU_TELEFONO')
				);
	       $this->session->set_userdata('logged_in', $sess_array);
				 $existe = true;
	   }
	   return $existe;
	}

	function valida_rut($rut)
	{
	    $rut = preg_replace('/[^k0-9]/i', '', $rut);
	    $dv  = substr($rut, -1);
	    $numero = substr($rut, 0, strlen($rut)-1);
	    $i = 2;
	    $suma = 0;
	    foreach(array_reverse(str_split($numero)) as $v)
	    {
	        if($i==8)
	            $i = 2;
	        $suma += $v * $i;
	        ++$i;
	    }
	    $dvr = 11 - ($suma % 11);

	    if($dvr == 11)
	        $dvr = 0;
	    if($dvr == 10)
	        $dvr = 'K';
	    if($dvr == strtoupper($dv))
	        return true;
	    else
	        return false;
	}
}
