<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Model extends CI_Model {

public function __construct()
{
parent::__construct();
}

private  $_columns  =  array(
'USU_RUT' => 0,
'USU_DV' => 0,
'USU_NOMBRES' => '',
'USU_APELLIDOS' => '',
'USU_PERFIL_ID' => 0,
'USU_EMAIL' => '',
'USU_TELEFONO' => 0,
'USU_CLAVE' => '',
'USU_IMAGEN' => '',
'USU_ESTADO' => 0
);

public function get($attr){
  return $this->_columns[$attr];
}

public function create($row){
  $USUARIO =  new Usuario_Model();
  foreach ($row as $key => $value)
    {
      $USUARIO->_columns[$key] = $value;
    }
  return $USUARIO;
}

public function insert(){
$this->db->insert('USUARIO',$this->_columns);
}

public function update($id, $data) {
  $USUARIO = $this->db->get_where('USUARIO',array('USU_RUT'=>$id));
  if($USUARIO->num_rows() > 0){
    $this->db->where('USU_RUT', $id);
    return $this->db->update('USUARIO', $data);
    }else{
  $data['USU_RUT'] = $id;
  return $this->db->insert('USUARIO',$data);
  }
}

public function delete($id){
  $sql="update USUARIO set USU_ESTADO =0 WHERE USU_RUT=".$id;
  $query = $this->db->query($sql);
  return 1;
}


public function findAll(){
  $result=array();
  $bit = null;
  $consulta = $this->db->get('USUARIO');
    foreach ($consulta->result() as $row) {
    $result[] = $this->create($row);
  }
  return $result;
}

 public function findById($id){
    $result = null;
    $this->db->where('USU_RUT',$id);
    $consulta = $this->db->get('USUARIO');
    if($consulta->num_rows() == 1){
      $result = $this->create($consulta->row());
    }

    return $result;
  }

  public function setColumns ($row = null){
    foreach ($row as $key => $value) {
      $this->columns[$key] = $value;
      }
    }

    public function getPermisos()
    {
      $result = $this->db->get_where("PERMISO",array('PERMISO_USU_RUT  '=>$this->_columns['USU_RUT']));
      $permisos = array();
      if($result->num_rows() > 0){
        foreach ($result->result()  as $key => $value) {
          $permisos[] = $value->PERMISO_PERFIL_ID;
        }
      }
      return $permisos;
    }

    public function findByArray($myarray = null){
        $this->load->database();
        $res = $this->db->get_where('USUARIO',$myarray);
        $result = array();
           foreach ($res->result() as $row) {
            $result[] = $this->create($row);
            }
          return $result;
     }


    function login($rut, $clave){
      $datos=array();
      $user = null;

      $result = $this->db->get_where('USUARIO',array('USU_RUT'=>$rut));
      if ($result->num_rows() > 0) {
        $row = $result->row_object();
        if($row->USU_CLAVE == $clave){
          $user = $this->create($row);
        }
      }
      return $user;
    }
}
