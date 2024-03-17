<?php

namespace App\Controllers;

use App\Models\Test_model;
use App\Models\Test_Paciente_model;

class Test extends BaseController
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
		$userModel = new Test_model();

		$dataClient = $userModel->findAll();
		$data['tests'] = $dataClient;
		return    view('capas/cabecera')
			. view('test/display', $data)
			. view('capas/footer');
	}

	public function registrar()
	{
		helper(['form']);
		if ($this->request->getPost()) {
			$userModel = new Test_model();
			$userModel->save($this->request->getVar());
			return redirect()->to('/test/display');
		} else {
			$data['validation'] = $this->validator;
			return view('capas/cabecera')
				. view('test/registrar', $data)
				. view('capas/footer');
		}
	}

	public function editar($id_cliente)
	{
		$userModel = new Test_model();

		helper(['form']);
		$dataClient = $userModel->where('id_test', $id_cliente)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			return view('capas/cabecera')
				. view('test/editar', $data)
				. view('capas/footer');
		}
		$userModel->where('id_test', $id_cliente)
			->set($this->request->getVar())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');

		return redirect()->to('/test/display');
	}

	public function borrar($id_cliente)
	{
		$userModel = new Test_model();
		$userModel->where('id_test', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'Registro eliminado');
		return redirect()->to('/test/display');
	}

	public function testdisplay()
	{
		$userModel = new Test_Paciente_model();
		$dataClient = $userModel->findAll();
		$data['tests'] = $dataClient;
		return    view('capas/cabecera')
			. view('test/testdisplay', $data)
			. view('capas/footer');
	}

	public function registrartest($idPaciente)
	{
		helper(['form']);
		if ($this->request->getPost()) {
			$userModel = new Test_Paciente_model();
			$data = $this->request->getVar();
			$data['paciente'] = $idPaciente;
			$userModel->save($data);
			$this->session->setFlashdata('no_access', 'El registro ha sido agregado con éxito');
			return redirect()->to('/paciente/display');
		} else {
			$testModel = new Test_model();
			$data['id'] = $idPaciente;
			$data['test'] = $testModel->findAll();
			return view('capas/cabecera')
				. view('test/registrartest', $data)
				. view('capas/footer');
		}
	}

	public function editartest($id_cliente)
	{
		$dataModel = new Test_Paciente_model();

		helper(['form']);
		$dataOne = $dataModel->where('paciente', $id_cliente)->first();
		if ($dataOne == NULL) {
			return redirect()->to('/conyugue/registrar/' . $id_cliente);
		}
		if (!$this->request->getPost()) {
			$testModel = new Test_model();
			$data['test'] = $testModel->findAll();
			$data['user_data'] = $dataOne;
			return view('capas/cabecera')
				. view('test/editartest', $data)
				. view('capas/footer');
		}
		$dataModel->where('paciente', $id_cliente)
			->set($this->request->getVar())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/paciente/display');
	}
}
