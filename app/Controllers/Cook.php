<?php

namespace App\Controllers;

use App\Models\CookModel;

class Cook extends BaseController
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
}
