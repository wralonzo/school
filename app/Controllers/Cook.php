<?php

namespace App\Controllers;

use App\Models\AttendanceCookModel;
use App\Models\CookModel;
use App\Models\StudentModel;

class Cook extends BaseController
{
	protected $helpers = ['form', 'url'];
	public $session;
	private $db;
	public function __construct()
	{
		$this->db = db_connect();
		$this->session = session();
	}

	public function display()
	{
		$CookModel = new CookModel();
		$dataClient = $CookModel->findAll();
		$data['data'] = $dataClient;
		return view('layer/head') .
			view('cook/display', $data)
			. view('layer/footer');
	}

	public function registrar()
	{
		if ($this->request->getPost()) {
			$CookModel = new CookModel();
			$dataPost = $this->request->getPost();
			$CookModel->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('/cook');
		} else {
			return view('layer/head')
				. view('cook/register')
				. view('layer/footer');
		}
	}

	public function editar($id)
	{
		helper(['form']);
		$CookModel = new CookModel();
		$dataClient = $CookModel->where('id_cook', $id)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			return view('layer/head') .
				view('cook/editar', $data)
				. view('layer/footer');
		}
		$CookModel->where('id_cook', $id)
			->set($this->request->getPost())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/cook');
	}

	public function borrar($id_cliente)
	{
		$CookModel = new CookModel();
		$CookModel->where('id_cook', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/cook');
	}

	public function attendance(){		
		if ($this->request->getPost()) {
			$modelAttendace = new AttendanceCookModel();
			$dataPost = $this->request->getPost();
			$modelAttendace->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('cook/attendance/list');
		} else {
			$modelAttendace = new CookModel();
			$studentModel = new StudentModel();
			$events = $modelAttendace->findAll();
			$students = $studentModel->findAll();
			$data['cooks'] = $events;
			$data['students'] = $students;
			return view('layer/head')
				. view('cook/attendance', $data)
				. view('layer/footer');
		}		
	}

	public function list()
	{
		$list = $this->db->table("cook_children as at")
		->select('at.id_children_cook, cla.name as class, chi.name as children, at.datecreated, at.type')
		->join('cook as cla', 'cla.id_cook = at.cook')
		->join('children as chi', 'chi.id_children = at.children')
		// ->orderBy('hr.id_horario', 'desc')
		->get()->getResultArray();
		$data['data'] = $list;
		return view('layer/head') .
			view('cook/list', $data)
			. view('layer/footer');
	}

	public function listborrar($id_cliente)
	{
		$CookModel = new AttendanceCookModel();
		$CookModel->where('id_children_cook', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('cook/attendance/list');
	}
}
