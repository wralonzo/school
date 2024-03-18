<?php

namespace App\Controllers;

use App\Models\Conyugue_model;
use App\Models\Ficha_Paciente_model;

class Ficha extends BaseController
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
			$userModel = new Ficha_Paciente_model();
			$data = $this->request->getVar();
			$data['paciente'] = $idPaciente;
			$userModel->save($data);
			$this->session->setFlashdata('no_access', 'El registro ha sido agregado con éxito');
			return redirect()->to('/paciente/display');
		} else {
			$data['id'] = $idPaciente;
			return view('capas/cabecera')
				. view('ficha/registrar', $data)
				. view('capas/footer');
		}
	}

	public function editar($id_cliente)
	{
		$dataModel = new Ficha_Paciente_model();

		helper(['form']);
		$dataOne = $dataModel->where('paciente', $id_cliente)->first();
		if($dataOne == NULL){
			return redirect()->to('/ficha/registrar/'.$id_cliente);
		}
		if (!$this->request->getPost()) {
			$data['data'] = $dataOne;
			$data['id'] = $id_cliente;
			return view('capas/cabecera')
				. view('ficha/editar', $data)
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
