<?php

/**
 * Created by PhpStorm.
 * User: GARCIA
 * Date: 29/09/2018
 * Time: 19:22
 */
class Model_user  extends CI_Model
{
  public  function __construct(){
        parent::__construct();
        $this->load->database();

    }
public function datos(){
   $query = $this->db->query("SELECT * FROM roles");
   return $query->result();
}
public function guardar($user){
    $campos=array(
        'nombre'=>$user['nombre'],
        'Apellido_Mater'=>$user['Apellido_Mater'],
        'Apellido_Pater'=>$user['Apellido_Pater'],
        'Telefono'=>$user['Telefono'],
        'dni'=>$user['dni'],
        'fecha_Naci'=>$user['fecha_Naci'],
        'Roles_idRoles'=>$user['Roles_idRoles'],



    );
    $this->db->insert('persona',$campos);
}
public function listar()
{
$query=$this->db->query('SELECT per.nombre,per.idPersona,per.Apellido_Pater,per.Apellido_Mater,
per.dni,per.Telefono,per.fecha_Naci,r.Nombre_rol FROM persona as per INNER JOIN 
roles as r WHERE per.Roles_idRoles=r.idRoles');

return $query->result();

}
public function delete($id){

    $this->db->where('idPersona',$id);
    $this->db->delete('persona');

}

}