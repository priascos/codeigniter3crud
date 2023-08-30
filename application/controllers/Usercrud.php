<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercrud extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('User');
	}//end __construct

	public function index() {
		$datos['users'] = $this->User->seleccionar_todo();
		$datos['mensaje'] = $this->session->flashdata('mensaje');
		var_dump($this->session->flashdata('mensaje'));
		$this->load->view('welcome_message', $datos);
		
	}//end insex

	public function agregar() {
		$user['FIRST_NAME'] = $this->input->post('FIRST_NAME');
		$user['LAST_NAME'] = $this->input->post('LAST_NAME');
		$user['EMAIL'] = $this->input->post('EMAIL');
		$user['GENDER'] = $this->input->post('GENDER');
		$user['TELEPHONE'] = $this->input->post('TELEPHONE');
		$user['AGE'] = $this->input->post('AGE');

		$this->User->agregar($user);
		$this->session->set_flashdata('mensaje', 'creado');
		redirect('usercrud');
	}//end agregar

	public function eliminar($id_user) {
		$this->User->eliminar($id_user);
		$this->session->set_flashdata('mensaje', 'eliminado');
		redirect('usercrud');
		
	}//end eliminar

	public function editar($id_user) {
		$user['FIRST_NAME'] = $this->input->post('FIRST_NAME');
		$user['LAST_NAME'] = $this->input->post('LAST_NAME');
		$user['EMAIL'] = $this->input->post('EMAIL');
		$user['GENDER'] = $this->input->post('GENDER');
		$user['TELEPHONE'] = $this->input->post('TELEPHONE');
		$user['AGE'] = $this->input->post('AGE');

		$this->User->actualizar($user, $id_user);
		$this->session->set_flashdata('mensaje', 'actualizado');
		redirect('usercrud');
	}//end editar

}//end Class Welcome
