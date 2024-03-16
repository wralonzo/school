<?php

namespace App\Controllers;

use App\Models\Cita_model;
use App\Models\Estudiante_model;
use App\Models\Paciente_model;

class Cita extends BaseController
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
		$userModel = new Cita_model();

		$dataClient = $userModel
			->select('citas.id_cita as cita, citas.fecha, citas.jornada, citas.hora,
		 citas.estado_cita, hr.nombre as paciente, cli.carnet, cli.nombre')
			->join('estudiante as cli', 'cli.id_estudiante = citas.estudiante')
			->join('paciente as hr', 'hr.id_paciente = citas.paciente')
			->findAll();

		$data['citas'] = $dataClient;
		return    view('capas/cabecera')
			. view('cita/display', $data)
			. view('capas/footer');
	}

	public function registrar()
	{
		helper(['form']);
		if ($this->request->getPost()) {
			$userModel = new Cita_model();
			$userModel->save($this->request->getVar());
			return redirect()->to('/cita/display');
		} else {
			$data['validation'] = $this->validator;
			$userModel = new Estudiante_model();
			$dataDb = $userModel->findAll();
			$paciente = new Paciente_model();
			$pacientes = $paciente->findAll();
			$data['estudiantes'] = $dataDb;
			$data['pacientes'] = $pacientes;
			return view('capas/cabecera')
				. view('cita/registrar', $data)
				. view('capas/footer');
		}
	}

	public function editar($id_cliente)
	{
		$userModel = new Cita_model();

		helper(['form']);
		$dataClient = $userModel->where('id_cita', $id_cliente)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			$userModel = new Estudiante_model();
			$dataDb = $userModel->findAll();
			$paciente = new Paciente_model();
			$pacientes = $paciente->findAll();
			$data['estudiantes'] = $dataDb;
			$data['pacientes'] = $pacientes;
			return view('capas/cabecera')
				. view('cita/editar', $data)
				. view('capas/footer');
		}
		$userModel->where('id_cita', $id_cliente)
			->set($this->request->getVar())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');

		return redirect()->to('/cita/display');
	}

	public function borrar($id_cliente)
	{
		$userModel = new Cita_model();
		$userModel->where('id_cita', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'Registro eliminado');
		return redirect()->to('/cita/display');
	}
}
