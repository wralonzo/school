<?php

namespace App\Controllers;

use App\Models\Estudiante_model;
use App\Models\Conyugue_model;

class Conyugue extends BaseController
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

	public function registrar($idPaciente)
	{
		helper(['form']);


		if ($this->request->getPost()) {
			$userModel = new Conyugue_model();
			$data = $this->request->getVar();
			$data['paciente'] = $idPaciente;
			$userModel->save($data);
			$this->session->setFlashdata('no_access', 'El registro ha sido agregado con éxito');
			return redirect()->to('/paciente/display');
		} else {
			$data['id'] = $idPaciente;
			return view('capas/cabecera')
				. view('conyugue/registrar', $data)
				. view('capas/footer');
		}
	}

	public function editar($id_cliente)
	{
		$dataModel = new Conyugue_model();

		helper(['form']);
		$dataOne = $dataModel->where('paciente', $id_cliente)->first();
		if($dataOne == NULL){
			return redirect()->to('/conyugue/registrar/'.$id_cliente);
		}
		if (!$this->request->getPost()) {
			$data['user_data'] = $dataOne;
			return view('capas/cabecera')
				. view('conyugue/editar', $data)
				. view('capas/footer');
		}
		$dataModel->where('paciente', $id_cliente)
			->set($this->request->getVar())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/paciente/display');
	}

	public function borrar($id_cliente)
	{
		$userModel = new Conyugue_model();
		$userModel->where('id_paciente', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'Registro eliminado');
		return redirect()->to('/conyugue/display');
	}
}
