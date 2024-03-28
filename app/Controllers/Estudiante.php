<?php

namespace App\Controllers;

use App\Models\Estudiante_model;
use App\Models\LoginModel;
use App\Models\Paciente_model;

class Estudiante extends BaseController
{
	protected $helpers = ['form'];
	private $db;

	public $session;
	public function __construct()
	{
		// $this->db = db_connect(); // Loading database
		$this->db = \Config\Database::connect();
		$this->session = session();
	}

	public function display()
	{
		$userModel = new Estudiante_model();
		$dataDb = $userModel->findAll();
		$data['pacientes'] = $dataDb;
		return    view('capas/cabecera')
			. view('estudiante/display', $data)
			. view('capas/footer');
	}

	public function registrar()
	{
		helper(['form']);
		if ($this->request->getPost()) {
			$userModel = new Estudiante_model();
			$data = array(
				'correo' => $this->request->getVar('correo'),
				'nombres' => $this->request->getVar('nombre'),
				'apellidos' => $this->request->getVar('apellido'),
				'contacto' => $this->request->getVar('lugar'),
				'clave' => password_hash($this->request->getVar('clave'), PASSWORD_DEFAULT),
				'role' => $this->request->getVar('role'),
				'estado' => 1
			);
			$loginSave = new LoginModel();
			$loginSave->save($data);
			$user_id = $loginSave->getInsertID();

			$data = [
				'carnet' => $this->request->getVar('carnet'),
				'nombre' => $this->request->getVar('nombre'),
				'apellido' => $this->request->getVar('apellido'),
				'semestre' => $this->request->getVar('semestre'),
				'edad' => $this->request->getVar('edad'),
				'lugar' => $this->request->getVar('lugar'),
				'genero' => $this->request->getVar('genero'),
				'estado' => $this->request->getVar('estado'),
				'id_usuario' => $user_id
			];
			$userModel->save($data);
			return redirect()->to('/estudiante/display');
		} else {
			$estudiante = new Estudiante_model();
			$dataE = $estudiante->findAll();
			$data['estudiantes'] = $dataE;
			return view('capas/cabecera')
				. view('estudiante/registrar', $data)
				. view('capas/footer');
		}
	}

	public function editar($id_cliente)
	{
		$dataModel = new Estudiante_model();

		helper(['form']);
		$dataOne = $dataModel->where('estado', 'Activo')->where('id_estudiante', $id_cliente)->first();
		if (!$this->request->getPost()) {
			$data['user_data'] = $dataOne;
			return view('capas/cabecera')
				. view('estudiante/editar', $data)
				. view('capas/footer');
		}
		$dataModel->where('id_estudiante', $id_cliente)
			->set($this->request->getVar())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/estudiante/display');
	}

	public function borrar($id_cliente)
	{

		$estudiante = new Estudiante_model();
		$dataOne = $estudiante->where('estado', 'Activo')->where('id_estudiante', $id_cliente)->first();

		$userModel = new LoginModel();
		$estudiante->where('id_estudiante', $id_cliente)
			->delete();

		$userModel->where('id', $dataOne['id_usuario'])
			->delete();


		return json_encode(true);
	}
}
