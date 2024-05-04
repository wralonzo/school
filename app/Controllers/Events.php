<?php

namespace App\Controllers;

use App\Models\EventAttandanceModel;
use App\Models\EventsModel;
use App\Models\StudentModel;

class Events extends BaseController
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
		$CookModel = new EventsModel();
		$dataClient = $CookModel->findAll();
		$data['data'] = $dataClient;
		return view('layer/head') .
			view('event/display', $data)
			. view('layer/footer');
	}

	public function registrar()
	{
		if ($this->request->getPost()) {
			$CookModel = new EventsModel();
			$dataPost = $this->request->getPost();
			$CookModel->save($dataPost);
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('/event');
		} else {
			return view('layer/head')
				. view('event/register')
				. view('layer/footer');
		}
	}

	public function editar($id)
	{
		helper(['form']);
		$CookModel = new EventsModel();
		$dataClient = $CookModel->where('id_event', $id)->first();
		if (!$this->request->getPost()) {
			$data['data'] = $dataClient;
			return view('layer/head') .
				view('event/editar', $data)
				. view('layer/footer');
		}
		$CookModel->where('id_event', $id)
			->set($this->request->getPost())
			->update();
		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/event');
	}

	public function borrar($id_cliente)
	{
		$CookModel = new EventsModel();
		$CookModel->where('id_event', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/event');
	}

	public function attendance(){		
		if ($this->request->getPost()) {
			$modelAttendace = new EventAttandanceModel();
			$modelAttendace->save($this->request->getPost());
			$this->session->setFlashdata('no_access', 'El registro ha sido creado con éxito');
			return redirect()->to('event/attendance/list');
		} else {
			$modelAttendace = new EventAttandanceModel();
			$eventModel = new EventsModel();
			$studentModel = new StudentModel();
			$events = $eventModel->findAll();
			$students = $studentModel->findAll();
			$data['events'] = $events;
			$data['students'] = $students;
			return view('layer/head')
				. view('event/attendance', $data)
				. view('layer/footer');
		}		
	}

	public function list()
	{
		$list = $this->db->table("attendance_event as at")
		->select('at.id_att_event, eve.name as event, chi.name as children, at.createdat')
		->join('event as eve', 'eve.id_event = at.event')
		->join('children as chi', 'chi.id_children = at.children')
		// ->orderBy('hr.id_horario', 'desc')
		->get()->getResultArray();
		$data['data'] = $list;
		return view('layer/head') .
			view('event/list', $data)
			. view('layer/footer');
	}

	public function listborrar($id_cliente)
	{
		$CookModel = new EventAttandanceModel();
		$CookModel->where('id_att_event', $id_cliente)
			->delete();
		$this->session->setFlashdata('no_access', 'El registro ha sido eliminado con éxito');
		return redirect()->to('/event/attendance/list');
	}
}
