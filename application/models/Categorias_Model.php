<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_Model extends CI_Model {

public function __construct()
{
parent::__construct();
}

private  $_columns  =  array(
'CAT_ID' => 0,
'CAT_NOMBRE' => '',
'CAT_DESC' => '',
'CAT_ESTADO' => 0,

);

public function get($attr){
  return $this->_columns[$attr];
}

public function create($row){
  $CATEGORIAS =  new Categorias_Model();
  foreach ($row as $key => $value)
    {
      $CATEGORIAS->_columns[$key] = $value;
    }
  return $CATEGORIAS;
}

public function insert(){
$this->db->insert('CATEGORIAS',$this->_columns);
}

public function update($id, $data) {
  $CATEGORIAS = $this->db->get_where('CATEGORIAS',array('CAT_ID'=>$id));
  if($CATEGORIAS->num_rows() > 0){
    $this->db->where('CAT_ID', $id);
    return $this->db->update('CATEGORIAS', $data);
    }else{
  $data['CAT_ID'] = $id;
  return $this->db->insert('CATEGORIAS',$data);
  }
}

public function delete($id){
  $this->db->where('CAT_ID',$id);
  return $this->db->delete('CATEGORIAS');
}

public function findAll(){
  $result=array();
  $bit = null;
  $consulta = $this->db->get('CATEGORIAS');
    foreach ($consulta->result() as $row) {
    $result[] = $this->create($row);
  }
  return $result;
}

public function findById($id){
   $result = null;
   $this->db->where('CAT_ID',$id);
   $consulta = $this->db->get('CATEGORIAS');
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
