<?php

namespace App\Models;

use CodeIgniter\Model;

class Ficha_Paciente_model extends Model
{
    protected $table = 'ficha_clinica';

    protected $allowedFields = [
        'id_ficha_clinica',
        'datos_generales',
        'situacion_familiar',
        'motivo_consulta',
        'historia_problema',
        'historia_patologica',
        'situacion_ambiente',
        'historia_personal',
        'situacion_laboral',
        'examen_mental',
        'apariencia_personal',
        'actitud_conducta',
        'actitud_motora',
        'conciencia',
        'animo',
        'pensamiento',
        'pruebas_auxiliares',
        'criterios_diagnostico',
        'evaluacion_dsm',
        'plan_terapeutico',
        'metas_alcanzadas',
        'estado',
        'created_at',
        'update_at',
        'paciente',
        'nombre',
    ];
}
