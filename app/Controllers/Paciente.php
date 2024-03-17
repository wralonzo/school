<?php

namespace App\Controllers;

use App\Models\Conyugue_model;
use App\Models\Estudiante_model;
use App\Models\Paciente_model;
use App\Models\Test_Paciente_model;

class Paciente extends BaseController
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
		$userModel = new Paciente_model();
		$dataDb = $userModel->findAll();
		$data['pacientes'] = $dataDb;
		return    view('capas/cabecera')
			. view('paciente/display', $data)
			. view('capas/footer');
	}

	public function registrar()
	{
		helper(['form']);


		if ($this->request->getPost()) {
			$userModel = new Paciente_model();
			$data = [
				'nombre'     => $this->request->getVar('nombre'),
				'lugar' => $this->request->getVar('lugar'),
				'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento'),
				'edad' => $this->request->getVar('edad'),
				'sexo' => $this->request->getVar('sexo'),
				'lugar_familia' => $this->request->getVar('lugar_familia'),
				'ocupacion' => $this->request->getVar('ocupacion'),
				'observaciones' => $this->request->getVar('observaciones'),
				'escolaridad' => $this->request->getVar('escolaridad'),
				'estado_civil' => $this->request->getVar('estado_civil'),
				'estudiante' => $this->request->getVar('estudiante'),
				'nombre' => $this->request->getVar('nombre'),
			];
			$userModel->save($data);
			$user_id = $userModel->getInsertID();
			return redirect()->to('/conyugue/registrar/'.$user_id);
		} else {
			$estudiante = new Estudiante_model();
			$dataE = $estudiante->findAll();
			$data['estudiantes'] = $dataE;
			return view('capas/cabecera')
				. view('paciente/registrar', $data)
				. view('capas/footer');
		}
	}

	public function editar($id_cliente)
	{
		$dataModel = new Paciente_model();

		helper(['form']);
		$dataOne = $dataModel->where('estado', 'Activo')->where('id_paciente', $id_cliente)->first();
		if (!$this->request->getPost()) {
			$data['user_data'] = $dataOne;
			$estudiante = new Estudiante_model();
			$dataSend = $estudiante->findAll();
			$data['estudiantes'] = $dataSend;
			return view('capas/cabecera')
				. view('paciente/editar', $data)
				. view('capas/footer');
		}
		$dataModel->where('id_paciente', $id_cliente)
			->set($this->request->getVar())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/paciente/display');
	}

	public function borrar($id_cliente)
	{
		$userModel = new Paciente_model();
		$conyugue = new Conyugue_model();
		$test = new Test_Paciente_model();
		$test->where('paciente', $id_cliente)
			->delete();
		$conyugue->where('paciente', $id_cliente)
			->delete();
		$userModel->where('id_paciente', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'Registro eliminado');
		return redirect()->to('/paciente/display');
	}
}
