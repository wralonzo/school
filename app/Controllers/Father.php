<?php

namespace App\Controllers;

use App\Models\FatherModel;
use App\Models\LoginModel;

class Father extends BaseController
{
	protected $helpers = ['form', 'url'];
	public $session;
	public function __construct()
	{
		// $this->db = db_connect(); // Loading database
		$this->session = session();
	}

	public function display()
	{
		$fatherModel = new FatherModel();
		$dataClient = $fatherModel->findAll();
		$data['data'] = $dataClient;
		return view('layer/head') .
			view('father/display', $data)
			. view('layer/footer');
	}

	public function registrar()
	{
		if ($this->request->getPost()) {
			$fatherModel = new FatherModel();
			$userModel = new LoginModel();
			$dataPost = $this->request->getPost();
			$data = [
				'user' => $this->request->getVar('user'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'role' => 'Padre',
			];			
			$userModel->save($data);
			$user_id = $userModel->getInsertID();

			unset($dataPost['password']);
			$dataPost['user'] = $user_id;
			$fatherModel->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('/father');
		} else {
			return view('layer/head')
				. view('father/register')
				. view('layer/footer');
		}
	}

	public function editar($id)
	{
		helper(['form']);
		$fatherModel = new FatherModel();
		$dataClient = $fatherModel->where('id_father', $id)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			return view('layer/head') .
				view('father/editar', $data)
				. view('layer/footer');
		}
		$fatherModel->where('id_father', $id)
			->set($this->request->getPost())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/father');
	}

	public function borrar($id_cliente)
	{
		$fatherModel = new FatherModel();
		$fatherModel->where('id_father', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/father');
	}
}
