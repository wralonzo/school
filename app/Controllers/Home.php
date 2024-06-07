<?php

namespace App\Controllers;

use App\Models\Cita_model;
use App\Models\ClaseModel;
use App\Models\ClientAsistenciaModel;
use App\Models\ClientModel;
use App\Models\Estudiante_model;
use App\Models\HorarioModel;
use App\Models\LoginModel;
use App\Models\MembresiaModel;
use App\Models\Paciente_model;
use App\Models\ReservacionModel;

class Home extends BaseController
{
    public function index(): string
    {
        // $productModel = new ClientModel();
        // $claseModel = new ClaseModel();
        // $login = new LoginModel();
        // $reservacion = new ReservacionModel();
        // $membresia = new MembresiaModel();
        // $horario = new HorarioModel();
        // $Asistencia = new ClientAsistenciaModel();
        // $claseModel = new ClaseModel();
		// $data['client'] = $productModel->where('estado', 1)->get()->getNumRows();
		// $data['clase'] = $claseModel->get()->getNumRows();
		// $data['login'] = $login->get()->getNumRows();
		// $data['reservacion'] = $reservacion->get()->getNumRows();
		// $data['membresia'] = $membresia->get()->getNumRows();
		// $data['horario'] = $horario->get()->getNumRows();
		// $data['asistencia'] = $Asistencia->get()->getNumRows();
        // $userModel = new  LoginModel();
        // $estudianteModel = new Estudiante_model();
        // $pacienteModel = new Paciente_model();
        // $citasModel = new Cita_model();
        // $data['usuarios'] = $userModel->get()->getNumRows();
        // $data['estudiantes'] = $estudianteModel->get()->getNumRows();
        // $data['pacientes'] = $pacienteModel->get()->getNumRows();
        // $data['citas'] = $citasModel->get()->getNumRows();
        return view('layer/head')
        .view('welcome_message')
        .view('layer/footer');
    }
}
