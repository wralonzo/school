<?php

namespace App\Controllers;

use App\Models\FatherModel;
use App\Models\StudentModel;

class Student extends BaseController
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
		$CookModel = new StudentModel();
		$dataClient = $CookModel->findAll();
		$data['data'] = $dataClient;
		return view('layer/head') .
			view('student/display', $data)
			. view('layer/footer');
	}

	public function registrar()
	{
		if ($this->request->getPost()) {
			$CookModel = new StudentModel();
			$dataPost = $this->request->getPost();
			$CookModel->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('/student');
		} else {
			$modelFather = new FatherModel();
			$fathers = $modelFather->findAll();
			$data['fathers'] = $fathers;
			return view('layer/head')
				. view('student/register', $data)
				. view('layer/footer');
		}
	}

	public function editar($id)
	{
		helper(['form']);
		$CookModel = new StudentModel();
		$dataClient = $CookModel->where('id_children', $id)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			$modelFather = new FatherModel();
			$fathers = $modelFather->findAll();
			$data['fathers'] = $fathers;
			return view('layer/head') .
				view('student/editar', $data)
				. view('layer/footer');
		}
		$CookModel->where('id_children', $id)
			->set($this->request->getPost())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/student');
	}

	public function borrar($id_cliente)
	{
		$CookModel = new StudentModel();
		$CookModel->where('id_children', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/student');
	}
}
