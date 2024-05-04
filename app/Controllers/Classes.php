<?php

namespace App\Controllers;

use App\Models\AttendanceClassModel;
use App\Models\ClassModel;
use App\Models\StudentModel;

class Classes extends BaseController
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
		$CookModel = new ClassModel();
		$dataClient = $CookModel->findAll();
		$data['data'] = $dataClient;
		return view('layer/head') .
			view('class/display', $data)
			. view('layer/footer');
	}

	public function registrar()
	{
		if ($this->request->getPost()) {
			$CookModel = new ClassModel();
			$dataPost = $this->request->getPost();
			$CookModel->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('/class');
		} else {
			return view('layer/head')
				. view('class/register')
				. view('layer/footer');
		}
	}

	public function editar($id)
	{
		helper(['form']);
		$CookModel = new ClassModel();
		$dataClient = $CookModel->where('id_class', $id)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			return view('layer/head') .
				view('class/editar', $data)
				. view('layer/footer');
		}
		$CookModel->where('id_class', $id)
			->set($this->request->getPost())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/class');
	}

	public function borrar($id_cliente)
	{
		$CookModel = new ClassModel();
		$CookModel->where('id_class', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/class');
	}


	public function attendance(){		
		if ($this->request->getPost()) {
			$modelAttendace = new AttendanceClassModel();
			$dataPost = $this->request->getPost();
			$modelAttendace->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('/event');
		} else {
			$modelAttendace = new ClassModel();
			$studentModel = new StudentModel();
			$events = $modelAttendace->findAll();
			$students = $studentModel->findAll();
			$data['class'] = $events;
			$data['students'] = $students;
			return view('layer/head')
				. view('class/attendance', $data)
				. view('layer/footer');
		}		
	}
}
