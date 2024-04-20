<?php

namespace App\Controllers;

use App\Models\TeacherModel;
use App\Models\LoginModel;

class Teacher extends BaseController
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
		$teacherModel = new TeacherModel();
		$dataClient = $teacherModel->findAll();
		$data['data'] = $dataClient;
		return view('layer/head') .
			view('teacher/display', $data)
			. view('layer/footer');
	}

	public function registrar()
	{
		if ($this->request->getPost()) {
			$teacherModel = new TeacherModel();
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
			$teacherModel->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('/teacher');
		} else {
			return view('layer/head')
				. view('teacher/register')
				. view('layer/footer');
		}
	}

	public function editar($id)
	{
		helper(['form']);
		$teacherModel = new TeacherModel();
		$dataClient = $teacherModel->where('id_teacher', $id)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			return view('layer/head') .
				view('teacher/editar', $data)
				. view('layer/footer');
		}
		$teacherModel->where('id_teacher', $id)
			->set($this->request->getPost())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/teacher');
	}

	public function borrar($id_cliente)
	{
		$teacherModel = new TeacherModel();
		$teacherModel->where('id_teacher', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/teacher');
	}
}
