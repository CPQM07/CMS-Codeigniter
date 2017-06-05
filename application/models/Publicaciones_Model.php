<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones_Model extends CI_Model {

public function __construct()
{
parent::__construct();
}

private  $_columns  =  array(
'PUB_ID' => 0,
'PUB_TITULO' => '',
'PUB_FECHA' => '',
'PUB_UBICACION' => '',
'PUB_DESC_C' => '',
'PUB_DESC_L' => '',
'PUB_AUTOR' => '',
'PUB_IMAGEN' => '',
'PUB_ESTADO' => ''
);

public function get($attr){
  return $this->_columns[$attr];
}

public function create($row){
  $PUBLICACIONES =  new Publicaciones_Model();
  foreach ($row as $key => $value)
    {
      $PUBLICACIONES->_columns[$key] = $value;
    }
  return $PUBLICACIONES;
}

public function insert(){
$this->db->insert('PUBLICACIONES',$this->_columns);
}

public function update($id, $data) {
  $PUBLICACIONES = $this->db->get_where('PUBLICACIONES',array('PUB_ID'=>$id));
  if($PUBLICACIONES->num_rows() > 0){
    $this->db->where('PUB_ID', $id);
    return $this->db->update('PUBLICACIONES', $data);
    }else{
  $data['PUB_ID'] = $id;
  return $this->db->insert('PUBLICACIONES',$data);
  }
}

public function delete($id){
  $this->db->where('PUB_ID',$id);
  return $this->db->delete('PUBLICACIONES');
}


public function findAll(){
  $result=array();
  $bit = null;
  $consulta = $this->db->get('PUBLICACIONES');
    foreach ($consulta->result() as $row) {
    $result[] = $this->create($row);
  }
  return $result;
}

public function findById($ID){
   $result = null;
   $this->db->where('PUB_ID',$ID);
     $consulta = $this->db->get('PUBLICACIONES');
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
}
