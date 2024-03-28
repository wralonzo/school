<?php

namespace App\Controllers;

use App\Models\Paciente_model;
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
		return json_encode(true);
	}

	public function testdisplay()
	{
		$userModel = new Test_Paciente_model();
		$dataClient = $userModel->select('test.nombre as test, paciente.nombre, test_paciente.observaciones, test_paciente.id_test_paciente')
			->join('test', 'test_paciente.test = test.id_test')
			->join('paciente', 'paciente.id_paciente = test_paciente.paciente')
			->findAll();
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

	public function registrartestpaciente()
	{
		helper(['form']);
		if ($this->request->getPost()) {
			var_dump($this->request->getVar());
			$userModel = new Test_Paciente_model();
			$data = $this->request->getVar();
			$userModel->save($data);
			$this->session->setFlashdata('no_access', 'El registro ha sido agregado con éxito');
			return redirect()->to('/test/testdisplay');
		} else {
			$testModel = new Test_model();
			$pacientes = new Paciente_model();
			$data['tests'] = $testModel->findAll();
			$data['pacientes'] = $pacientes->findAll();
			return view('capas/cabecera')
				. view('test/registrartest', $data)
				. view('capas/footer');
		}
	}

	public function editartest($id_cliente)
	{
		$dataModel = new Test_Paciente_model();

		helper(['form']);
		$dataOne = $dataModel->where('id_test_paciente', $id_cliente)->first();
		if (!$this->request->getPost()) {
			$testModel = new Test_model();
			$pacientes = new Paciente_model();
			$data['tests'] = $testModel->findAll();
			$data['pacientes'] = $pacientes->findAll();
			$data['user_data'] = $dataOne;
			return view('capas/cabecera')
				. view('test/editartest', $data)
				. view('capas/footer');
		}
		$dataModel->where('id_test_paciente', $id_cliente)
			->set($this->request->getVar())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/test/testdisplay');
	}

	public function borrartest($id_cliente)
	{
		$userModel = new Test_Paciente_model();
		$userModel->where('id_test_paciente', $id_cliente)
			->delete();
		return json_encode(true);
	}
}
