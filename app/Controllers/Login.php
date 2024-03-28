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
		return view('capas/header_login')
			. view('login/login_view');
	}
	public function login()
	{

		$userModel = new LoginModel();
		$email = $this->request->getVar('txtUsuario');
		$password = $this->request->getVar('txtClave');

		$data = $userModel->where('correo', $email)->orderBy('id', 'desc')->first();

		if ($data) {
			$pass = $data['clave'];
			$authenticatePassword = password_verify($password, $pass);
			if ($authenticatePassword) {
				$ses_data = [
					'id' => $data['id'],
					'role' => $data['role'],
					'logeado' => TRUE
				];
				$this->session->set($ses_data);
				return redirect()->route('/');
			} else {
				$this->session->setFlashdata('msg', 'Password is incorrect.');
				return redirect()->route('login');
			}
		} else {
			$this->session->setFlashdata('msg', 'Email does not exist.');
			return redirect()->route('login');
		}
	}

	public function registrar()
	{
		helper(['form']);
		$rules = [
			'nombres'          => 'required|min_length[2]|max_length[50]',
			'apellidos'          => 'required|min_length[2]|max_length[50]',
			'contacto'          => 'required|min_length[2]|max_length[50]',
			'correo'          => 'required|min_length[2]|max_length[50]',
			'clave'          => 'required|min_length[2]|max_length[50]',
			'role'          => 'required|min_length[2]|max_length[50]',
		];

		if ($this->validate($rules)) {
			$userModel = new LoginModel();
			$data = [
				'nombres'     => $this->request->getVar('nombres'),
				'apellidos'     => $this->request->getVar('apellidos'),
				'correo'     => $this->request->getVar('correo'),
				'role'     => $this->request->getVar('role'),
				'contacto'     => $this->request->getVar('contacto'),
				'clave' => password_hash($this->request->getVar('clave'), PASSWORD_DEFAULT)
			];
			$userModel->save($data);
			return redirect()->to('/user/list');
		} else {
			$data['validation'] = $this->validator;
			return view('capas/cabecera')
				. view('login/registrar')
				. view('capas/footer');
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
		$dataClient = $userModel->where('estado', 1)->orderBy('id', 'desc')->findAll();
		$data['data'] = $dataClient;
		return view('capas/cabecera') .
			view('login/listar_usuarios_view', $data)
			. view('capas/footer');
	}

	public function editar($id)
	{
		helper(['form']);
		$userModel = new LoginModel();
		$dataClient = $userModel->where('estado', 1)->where('id', $id)->first();
		if (!$this->request->getPost()) {
			$data['user_data'] = $dataClient;
			return view('capas/cabecera') .
				view('login/editar', $data)
				. view('capas/footer');
		}
		$dataUpdate = [
			'nombres'     => $this->request->getVar('nombres'),
			'apellidos'     => $this->request->getVar('apellidos'),
			'correo'     => $this->request->getVar('correo'),
			'role'     => $this->request->getVar('role'),
			'contacto'     => $this->request->getVar('contacto'),
			'clave' => password_hash($this->request->getVar('clave'), PASSWORD_DEFAULT)
		];
		$userModel->where('id', $id)
			->set($dataUpdate)
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/user/list');
	}

	public function borrar($id_cliente)
	{
		$userModel = new LoginModel();
		$userModel->where('id', $id_cliente)
			->delete();
		return json_encode(true);
	}
}
