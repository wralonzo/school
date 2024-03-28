<?php

namespace App\Controllers;

use App\Models\CampoValor_model;
use App\Models\Cita_model;
use App\Models\Conyugue_model;
use App\Models\DSM_model;
use App\Models\Estudiante_model;
use App\Models\Ficha_Paciente_model;
use App\Models\Paciente_model;
use App\Models\Plan_model;
use App\Models\Situacion_model;
use App\Models\Test_Paciente_model;

class Paciente extends BaseController
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
		$userModel = new Paciente_model();
		$dataDb = $userModel->findAll();
		$data['pacientes'] = $dataDb;
		return    view('capas/cabecera')
			. view('paciente/display', $data)
			. view('capas/footer');
	}

	public function registrar()
	{
		helper(['form']);
		if ($this->request->getPost()) {
			$userModel = new Paciente_model();
			$data = [
				'nombre'     => $this->request->getVar('nombre'),
				'lugar' => $this->request->getVar('lugar'),
				'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento'),
				'edad' => $this->request->getVar('edad'),
				'sexo' => $this->request->getVar('sexo'),
				'lugar_familia' => $this->request->getVar('lugar_familia'),
				'ocupacion' => $this->request->getVar('ocupacion'),
				'observaciones' => $this->request->getVar('observaciones'),
				'escolaridad' => $this->request->getVar('escolaridad'),
				'estado_civil' => $this->request->getVar('estado_civil'),
				'estudiante' => $this->request->getVar('estudiante'),
				'nombre' => $this->request->getVar('nombre'),
			];
			$userModel->save($data);
			$idPaciente = $userModel->getInsertID();

			$conyugueModel = new Conyugue_model();
			$dataConyugue = [
				'nombre'     => $this->request->getVar('nombrec'),
				'ocupacion' => $this->request->getVar('ocupacionc'),
				'observacion' => $this->request->getVar('observacionc'),
				'edad' => $this->request->getVar('edadc'),
				'escolaridad' => $this->request->getVar('escolaridadc'),
				'lugar_familia' => $this->request->getVar('lugar_familiac'),
				'direccion' => $this->request->getVar('direccionc'),
				'direccion' => $this->request->getVar('direccionc'),
				'telefono' => $this->request->getVar('telefonoc'),
			];
			$dataConyugue['paciente'] = $idPaciente;
			$conyugueModel->save($dataConyugue);

			$dataFicha = [
				"datos_generales" => $this->request->getVar("datos_generales"),
				"situacion_familiar" => $this->request->getVar("situacion_familiar"),
				"motivo_consulta" => $this->request->getVar("motivo_consulta"),
				"historia_problema" => $this->request->getVar("historia_problema"),
				"historia_patologica" => $this->request->getVar("historia_patologica"),
				"situacion_ambiente" => $this->request->getVar("situacion_ambiente"),
				"historia_personal" => $this->request->getVar("historia_personal"),
				"situacion_laboral" => $this->request->getVar("situacion_laboral"),
				"examen_mental" => $this->request->getVar("examen_mental"),
				"apariencia_personal" => $this->request->getVar("apariencia_personal"),
				"actitud_conducta" => $this->request->getVar("actitud_conducta"),
				"actitud_motora" => $this->request->getVar("actitud_motora"),
				"conciencia" => $this->request->getVar("conciencia"),
				"animo" => $this->request->getVar("animo"),
				"pensamiento" => $this->request->getVar("pensamiento"),
				"pruebas_auxiliares" => $this->request->getVar("pruebas_auxiliares"),
				"criterios_diagnostico" => $this->request->getVar("criterios_diagnostico"),
				"evaluacion_dsm" => $this->request->getVar("evaluacion_dsm"),
				"plan_terapeutico" => $this->request->getVar("plan_terapeutico"),
				"metas_alcanzadas" => $this->request->getVar("metas_alcanzadas"),
			];
			$pacenteModel = new Ficha_Paciente_model();
			$dataFicha['paciente'] = $idPaciente;
			$pacenteModel->save($dataFicha);


			foreach ($this->request->getPost('situcion') as $field) {
				$dataField = [
					'nombre' => $field['nombref'],
					'sexo' => $field['sexof'],
					'edad' => $field['edadf'],
					'escolaridad' => $field['escolaridadf'],
					'observacion' => $field['observacionf'],
				];
				$situacionModel = new Situacion_model();
				$dataField['id_paciente'] = $idPaciente;
				$situacionModel->save($dataField);
			}

			foreach ($this->request->getPost('dsm') as $field) {
				$dataField = [
					'nombre' => $field['escalad'],
					'hallazgo' => $field['hallazgod'],
				];
				$dsmModel = new DSM_model();
				$dataField['id_paciente'] = $idPaciente;
				$dsmModel->save($dataField);
			}

			foreach ($this->request->getPost('plan') as $field) {
				$dataField = [
					'fecha' => $field['fechap'],
					'actividad' => $field['actividap'],
					'detalle' => $field['logrop'],
				];
				$plaModel = new Plan_model();
				$dataField['id_paciente'] = $idPaciente;
				$plaModel->save($dataField);
			}
			$dataCampos = $this->request->getPost('custom_fields');
			foreach ($dataCampos  as $key => $field) {
				$dataField = [
					'id_campo' => $key,
					'valor' => $field,
					'id_paciente' => $idPaciente,
				];
				$campoModel = new CampoValor_model();
				$campoModel->save($dataField);
			}
			$this->session->setFlashdata('no_access', 'El registro ha sido agregado con éxito');
			return redirect()->to('/paciente/display');
		} else {
			$estudiante = new Estudiante_model();
			$dataE = $estudiante->findAll();
			$data['estudiantes'] = $dataE;
			return view('capas/cabecera')
				. view('paciente/registrar', $data)
				. view('capas/footer');
		}
	}

	public function editar($idPaciente)
	{
		$dataModel = new Paciente_model();

		helper(['form']);
		$dataOne = $dataModel->where('id_paciente', $idPaciente)->first();
		if (!$this->request->getPost()) {
			$estudiante = new Estudiante_model();
			$dataSend = $estudiante->findAll();

			$conyugueModel = new Conyugue_model();
			$dataCon = $conyugueModel->where('paciente', $idPaciente)->first();

			$fichaModel = new Ficha_Paciente_model();
			$dataFich = $fichaModel->where('paciente', $idPaciente)->first();

			$situacionModel = new Situacion_model();
			$situacion = $situacionModel->where('id_paciente', $idPaciente)->findAll();

			$situacionModel = new Situacion_model();
			$situacion = $situacionModel->where('id_paciente', $idPaciente)->findAll();

			$dsmModel = new DSM_model();
			$sdmData = $dsmModel->where('id_paciente', $idPaciente)->findAll();

			$planModel = new Plan_model();
			$planData = $planModel->where('id_paciente', $idPaciente)->findAll();

			$data['conyugue'] = $dataCon;
			$data['ficha'] = $dataFich;
			$data['situacion'] = $situacion;
			$data['dsm'] = $sdmData;
			$data['plan'] = $planData;
			$data['user_data'] = $dataOne;
			$data['estudiantes'] = $dataSend;
			$data['idPaciente'] = $idPaciente;
			return view('capas/cabecera')
				. view('paciente/editar', $data)
				. view('capas/footer');
		}

		$data = [
			'nombre'     => $this->request->getVar('nombre'),
			'lugar' => $this->request->getVar('lugar'),
			'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento'),
			'edad' => $this->request->getVar('edad'),
			'sexo' => $this->request->getVar('sexo'),
			'lugar_familia' => $this->request->getVar('lugar_familia'),
			'ocupacion' => $this->request->getVar('ocupacion'),
			'observaciones' => $this->request->getVar('observaciones'),
			'escolaridad' => $this->request->getVar('escolaridad'),
			'estado_civil' => $this->request->getVar('estado_civil'),
			'estudiante' => $this->request->getVar('estudiante'),
			'nombre' => $this->request->getVar('nombre'),
		];
		$dataModel->where('id_paciente', $idPaciente)
			->set($data)
			->update();

		$conyugueModel = new Conyugue_model();
		$dataConyugue = [
			'nombre'     => $this->request->getVar('nombrec'),
			'ocupacion' => $this->request->getVar('ocupacionc'),
			'observacion' => $this->request->getVar('observacionc'),
			'edad' => $this->request->getVar('edadc'),
			'escolaridad' => $this->request->getVar('escolaridadc'),
			'lugar_familia' => $this->request->getVar('lugar_familiac'),
			'direccion' => $this->request->getVar('direccionc'),
			'direccion' => $this->request->getVar('direccionc'),
			'telefono' => $this->request->getVar('telefonoc'),
		];
		$conyugueModel->where('paciente', $idPaciente)
			->set($dataConyugue)
			->update();

		$dataFicha = [
			"datos_generales" => $this->request->getVar("datos_generales"),
			"situacion_familiar" => $this->request->getVar("situacion_familiar"),
			"motivo_consulta" => $this->request->getVar("motivo_consulta"),
			"historia_problema" => $this->request->getVar("historia_problema"),
			"historia_patologica" => $this->request->getVar("historia_patologica"),
			"situacion_ambiente" => $this->request->getVar("situacion_ambiente"),
			"historia_personal" => $this->request->getVar("historia_personal"),
			"situacion_laboral" => $this->request->getVar("situacion_laboral"),
			"examen_mental" => $this->request->getVar("examen_mental"),
			"apariencia_personal" => $this->request->getVar("apariencia_personal"),
			"actitud_conducta" => $this->request->getVar("actitud_conducta"),
			"actitud_motora" => $this->request->getVar("actitud_motora"),
			"conciencia" => $this->request->getVar("conciencia"),
			"animo" => $this->request->getVar("animo"),
			"pensamiento" => $this->request->getVar("pensamiento"),
			"pruebas_auxiliares" => $this->request->getVar("pruebas_auxiliares"),
			"criterios_diagnostico" => $this->request->getVar("criterios_diagnostico"),
			"evaluacion_dsm" => $this->request->getVar("evaluacion_dsm"),
			"plan_terapeutico" => $this->request->getVar("plan_terapeutico"),
			"metas_alcanzadas" => $this->request->getVar("metas_alcanzadas"),
		];
		$fichaModel = new Ficha_Paciente_model();
		$fichaModel->where('paciente', $idPaciente)
			->set($dataFicha)
			->update();

		$situacionModel = new Situacion_model();
		$sitOlds = $this->request->getPost('situcionOld');
		$sitnew = $this->request->getPost('situcion');
		if (count($sitOlds) > 0) {
			foreach ($sitOlds as $key => $item) {
				$dataField = [
					'nombre' => $item['nombref'],
					'sexo' => $item['sexof'],
					'edad' => $item['edadf'],
					'escolaridad' => $item['escolaridadf'],
					'observacion' => $item['observacionf'],
				];
				$situacionModel->where('id_situacion', $key)
					->set($dataField)
					->update();
			}
		}
		if (isset($sitnew)) {
			foreach ($sitnew as $field) {
				$dataField = [
					'nombre' => $field['nombref'],
					'sexo' => $field['sexof'],
					'edad' => $field['edadf'],
					'escolaridad' => $field['escolaridadf'],
					'observacion' => $field['observacionf'],
				];

				$dataField['id_paciente'] = $idPaciente;
				$situacionModel->save($dataField);
			}
		}


		$dsmModel = new DSM_model();
		$dsmOlds = $this->request->getPost('dsmOld');
		$dsmnew = $this->request->getPost('dsm');
		if (count($dsmOlds) > 0) {
			foreach ($dsmOlds as $key => $item) {
				$dataField = [
					'nombre' => $item['escalad'],
					'hallazgo' => $item['hallazgod'],
				];
				$dsmModel->where('id_dsm', $key)
					->set($dataField)
					->update();
			}
		}
		if (isset($dsmnew)) {
			foreach ($dsmnew as $field) {
				$dataField = [
					'nombre' => $field['escalad'],
					'hallazgo' => $field['hallazgod'],
				];
				$dataField['id_paciente'] = $idPaciente;
				$dsmModel->save($dataField);
			}
		}

		$plaModel = new Plan_model();
		$planOlds = $this->request->getPost('planOld');
		$plannew = $this->request->getPost('plan');
		if (count($planOlds) > 0) {
			foreach ($planOlds as $key => $field) {
				$dataField = [
					'fecha' => $field['fechap'],
					'actividad' => $field['actividap'],
					'detalle' => $field['logrop'],
				];
				$plaModel->where('id_plan', $key)
					->set($dataField)
					->update();
			}
		}
		if (isset($plannew)) {
			foreach ($plannew as $field) {
				$dataField = [
					'fecha' => $field['fechap'],
					'actividad' => $field['actividap'],
					'detalle' => $field['logrop'],
				];
				$plaModel = new Plan_model();
				$dataField['id_paciente'] = $idPaciente;
				$plaModel->save($dataField);
			}
		}

		$dataCampos = $this->request->getPost('custom_fields');
		foreach ($dataCampos  as $key => $field) {
			$campoModel = new CampoValor_model();
			$dataField = [
				'id_campo' => $key,
				'valor' => $field,
				'id_paciente' => $idPaciente,
			];
			$existe = getFieldsValue($key, $idPaciente);
			if (isset($existe)) {
				$campoModel->where('id_campo_valor', $existe->id_campo_valor)
					->set($dataField)
					->update();
			} else {
				$campoModel->save($dataField);
			}
		}

		$this->session->setFlashdata('no_access', 'El registro ha sido modificado con éxito');
		return redirect()->to('/paciente/display');
	}

	public function borrar($id_cliente)
	{
		$userModel = new Paciente_model();
		$conyugue = new Conyugue_model();
		$test = new Test_Paciente_model();
		$fichaModel = new Ficha_Paciente_model();
		$situacionModel = new Situacion_model();
		$dsmModel = new DSM_model();
		$planModel = new Plan_model();
		$campoModel = new CampoValor_model();
		$citaModel = new Cita_model();

		$citaModel->where('paciente', $id_cliente)
		->delete();
		$campoModel->where('id_paciente', $id_cliente)
			->delete();

		$situacionModel->where('id_paciente', $id_cliente)
			->delete();

		$planModel->where('id_paciente', $id_cliente)
			->delete();
		$dsmModel->where('id_paciente', $id_cliente)
			->delete();
		$test->where('paciente', $id_cliente)
			->delete();
		$conyugue->where('paciente', $id_cliente)
			->delete();
		$userModel->where('id_paciente', $id_cliente)
			->delete();

		$fichaModel->where('paciente', $id_cliente)
			->delete();
		
		return json_encode(true);
	}

	public function pdf($idPaciente)
	{
		$dataModel = new Paciente_model();
		$dataOne = $dataModel->where('id_paciente', $idPaciente)->first();

		$conyugueModel = new Conyugue_model();
		$dataCon = $conyugueModel->where('paciente', $idPaciente)->first();

		$estudiante = new Estudiante_model();
		$dataSend = $estudiante->where('id_estudiante', $dataOne['estudiante'])->first();

		$fichaModel = new Ficha_Paciente_model();
		$dataFich = $fichaModel->where('paciente', $idPaciente)->first();

		$situacionModel = new Situacion_model();
		$situacion = $situacionModel->where('id_paciente', $idPaciente)->findAll();

		$situacionModel = new Situacion_model();
		$situacion = $situacionModel->where('id_paciente', $idPaciente)->findAll();

		$dsmModel = new DSM_model();
		$sdmData = $dsmModel->where('id_paciente', $idPaciente)->findAll();

		$planModel = new Plan_model();
		$planData = $planModel->where('id_paciente', $idPaciente)->findAll();


		$data['conyugue'] = $dataCon;
		$data['ficha'] = $dataFich;
		$data['situacion'] = $situacion;
		$data['dsm'] = $sdmData;
		$data['plan'] = $planData;
		$data['user_data'] = $dataOne;
		$data['estudiante'] = $dataSend;
		$data['idPaciente'] = $idPaciente;
		return  view('paciente/pdf', $data);
	}
}
