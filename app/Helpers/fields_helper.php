<?php

function getFields($tag)
{
    $db  = \Config\Database::connect();
    $builder = $db->table('campos');
    $builder->where('seccion', $tag);
    $builder->orderBy('order asc');
    $output = $builder->get();
    return $output->getResult();
}

function inputType($type, $name, $label, $value='')
{
    if ($type == 'input') {
        return
            '<div class="relative w-full mb-3 px-5 ">
                <label class="ms-2 text-xl-1 font-medium text-gray-900 dark:text-gray-300">'.$label.'</label>
                <input required type="text" value="'.$value.'" class=" text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" placeholder="'.$label.'" name="custom_fields['.$name.']" />
            </div>';
    }
    if ($type == 'checkbox') {
        return
            '<div class="relative w-full mb-3 px-5">
                <input id="' . $name . '" name="custom_fields[' . $name . ']" type="checkbox" '.$value.' value="checked" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="' . $name . '" class="ms-2 text-xl-1 font-medium text-gray-900 dark:text-gray-300">' . $label . '</label>
            </div>';
    }
}


function getFieldsValue($idCampo, $idPaciente)
{
    $db  = \Config\Database::connect();
    $builder = $db->table('campo_valor');
    $builder->where('id_campo', $idCampo);
    $builder->where('id_paciente', $idPaciente);
    $output = $builder->get();
    return $output->getRow();
}

function getUserName($idCampo)
{
    $db  = \Config\Database::connect();
    $builder = $db->table('user');
    $builder->where('id_user', $idCampo);
    $output = $builder->get();
    return $output->getRow();
}
