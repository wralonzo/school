<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
	protected $helpers = ['form', 'url'];
	public $session;
	public function __construct()
	{
		// $this->db = db_connect(); // Loading database
		$this->session = session();
	}
	public function index()
	{
		return view('user/index');
	}
	public function login()
	{
		$userModel = new LoginModel();
		$email = $this->request->getVar('txtUsuario');
		$password = $this->request->getVar('txtClave');

		$data = $userModel->where('user', $email)->first();

		if ($data) {
			$pass = $data['password'];
			$authenticatePassword = password_verify($password, $pass);
			if ($authenticatePassword) {
				$ses_data = [
					'id_user' => $data['id_user'],
					'user' => $data['user'],
					'role' => $data['role'],
					'logeado' => TRUE
				];
				$this->session->set($ses_data);
				return redirect()->route('/');
			} else {
				$this->session->setFlashdata('msg', 'Usuario incorrecto');
				return redirect()->route('login');
			}
		} else {
			$this->session->setFlashdata('msg', 'Usuario incorrecto');
			return redirect()->route('login');
		}
	}

	public function registrar()
	{
		if ($this->request->getPost()) {
			$userModel = new LoginModel();
			$data = [
				'user' => $this->request->getVar('user'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'role' => $this->request->getVar('role'),
			];
			$userModel->save($data);
			return redirect()->to('/user/list');
		} else {
			return view('layer/head')
				. view('user/register')
				. view('layer/footer');
		}
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->route('/');
	}

	public function display()
	{
		$userModel = new LoginModel();
		$dataClient = $userModel->findAll();
		$data['data'] = $dataClient;
		return view('layer/head') .
			view('login/listar_usuarios_view', $data)
			. view('layer/footer');
	}

	public function editar($id)
	{
		helper(['form']);
		$userModel = new LoginModel();
		$dataClient = $userModel->where('id_user', $id)->first();
		if (!$this->request->getPost()) {
			$data['user_data'] = $dataClient;
			return view('layer/head') .
				view('login/editar', $data)
				. view('layer/footer');
		}
		$userModel->where('id_user', $id)
			->set($this->request->getPost())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/user/list');
	}

	public function borrar($id_cliente)
	{
		$userModel = new LoginModel();
		$userModel->where('id_user', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/user/list');
	}
}
