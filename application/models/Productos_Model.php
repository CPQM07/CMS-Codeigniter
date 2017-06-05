<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_Model extends CI_Model {

public function __construct()
{
parent::__construct();
}

private  $_columns  =  array(
'PROD_ID' => 0,
'PROD_NOMBRE' => '',
'PROD_DESC_C' => '',
'PROD_DESC_L' => '',
'PROD_PRECIO' => 0,
'PROD_IMAGEN' => '',
'PROD_CAT_ID' => 0,
'PROD_ESTADO' => 0
);

public function get($attr){
  return $this->_columns[$attr];
}

public function create($row){
  $PRODUCTOS =  new Productos_Model();
  foreach ($row as $key => $value)
    {
      $PRODUCTOS->_columns[$key] = $value;
    }
  return $PRODUCTOS;
}

public function insert(){
  $this->db->insert('PRODUCTOS',$this->_columns);
}

public function update($id, $data) {
  $PRODUCTOS = $this->db->get_where('PRODUCTOS',array('PROD_ID'=>$id));
  if($PRODUCTOS->num_rows() > 0){
    $this->db->where('PROD_ID', $id);
    return $this->db->update('PRODUCTOS', $data);
    }else{
  $data['PROD_ID'] = $id;
  return $this->db->insert('PRODUCTOS',$data);
  }
}

public function delete($id){
  $this->db->where('PROD_ID',$id);
  return $this->db->delete('PRODUCTOS');
}


public function findAll(){
  $result=array();
  $bit = null;
  $consulta = $this->db->join('CATEGORIAS', 'CATEGORIAS.CAT_ID = PRODUCTOS.PROD_CAT_ID');
  $consulta = $this->db->get('PRODUCTOS');
    foreach ($consulta->result() as $row) {
    $result[] = $this->create($row);
  }
  return $result;
}

public function findById($id){
   $result = null;
   $this->db->where('PROD_ID',$id);
   $consulta = $this->db->get('usuario');
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
