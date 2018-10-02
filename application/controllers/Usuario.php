<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: GARCIA
 * Date: 29/09/2018
 * Time: 3:42
 */
class Usuario extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_user');
    }


    function index(){

         $data ['contenido']="Usuario/bienvenido";
        $data['rol']= $this->Model_user->datos();
        $data['listar']=$this->Model_user->listar();
         $this->load->view('Layaouts/admin',$data);
    }
    public function guardar(){
        $user['nombre']=$this->input->post('nombre');
        $user['Apellido_Mater']=$this->input->post('apellido_ma');
        $user['Apellido_Pater']=$this->input->post('apellido_pa');
        $user['Telefono']=$this->input->post('telefono');
        $user['dni']=$this->input->post('dni');
        $user['fecha_Naci']=$this->input->post('Fecha_cumple');
        $user['Roles_idRoles']=$this->input->post('rol');

        $this->Model_user->guardar($user);
        redirect('');
    }
public function delete($id=null){
    if($id!=null){
        $this->Model_user->delete($id);
        redirect('');
    } else{
        echo 'id no existe';
    }


}

}
