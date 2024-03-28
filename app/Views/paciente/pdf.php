<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>

    <style>
        .box {
            display: flex;
            flex-direction: column;
        }

        table {
            border-collapse: collapse;
            border: 1.5px solid black;

        }

        table td {
            border: 1px dotted #121312c7;

            padding: 10px;
        }

        table td:first-child {
            border-left: 0px solid #000000;
        }

        table tr:first-child {
            border: 1.5px solid black;
            padding: 5px;

        }

        table th {
            border: 0px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <center>
        <table border="1" style="font-size: 10;" class="border-collapse border border-slate-400 border-color red ">
            <h3 style="text-align: center;">Paciente</h3>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Lugar</th>
                    <th>Fecha nacimiento</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Lugar</th>
                    <th>Ocupacion</th>
                    <th>Observaciones</th>
                    <th>Escolaridad</th>
                    <th>Estado Civil</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-300"><?= $user_data['nombre'] ?></td>
                    <td><?= $user_data['lugar'] ?></td>
                    <td><?= $user_data['fecha_nacimiento'] ?></td>
                    <td><?= $user_data['edad'] ?></td>
                    <td><?= $user_data['sexo'] ?></td>
                    <td><?= $user_data['lugar_familia'] ?></td>
                    <td><?= $user_data['ocupacion'] ?></td>
                    <td><?= $user_data['observaciones'] ?></td>
                    <td><?= $user_data['escolaridad'] ?></td>
                    <td><?= $user_data['estado_civil'] ?></td>
                    <td><?= $user_data['estado'] ?></td>
                </tr>
            </tbody>
        </table>
    </center>

    <center>
        <table border="1" style="font-size: 10;">
            <h3 style="text-align: center;">Estudiante</h3>
            <thead>
                <tr>
                    <th>carnet</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>semestre</th>
                    <th>edad</th>
                    <th>Lugar</th>
                    <th>genero</th>
                    <th>estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $estudiante['carnet'] ?></td>
                    <td><?= $estudiante['nombre'] ?></td>
                    <td><?= $estudiante['apellido'] ?></td>
                    <td><?= $estudiante['semestre'] ?></td>
                    <td><?= $estudiante['edad'] ?></td>
                    <td><?= $estudiante['lugar'] ?></td>
                    <td><?= $estudiante['genero'] ?></td>
                    <td><?= $estudiante['estado'] ?></td>
                </tr>
            </tbody>
        </table>
    </center>

    <center>
        <table border="1" style="font-size: 10;">
            <h3 style="text-align: center;">Conyugue</h3>
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>ocupacion</th>
                    <th>observacion</th>
                    <th>escolaridad</th>
                    <th>edad</th>
                    <th>Lugar</th>
                    <th>direccion</th>
                    <th>telefono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $conyugue['nombre'] ?></td>
                    <td><?= $conyugue['ocupacion'] ?></td>
                    <td><?= $conyugue['observacion'] ?></td>
                    <td><?= $conyugue['escolaridad'] ?></td>
                    <td><?= $conyugue['edad'] ?></td>
                    <td><?= $conyugue['lugar_familia'] ?></td>
                    <td><?= $conyugue['direccion'] ?></td>
                    <td><?= $conyugue['telefono'] ?></td>
                </tr>
            </tbody>
        </table>
    </center>

    <center>
        <table border="1" style="font-size: 10;">
            <h3 style="text-align: center;">Ficha</h3>
            <thead>
                <tr>
                    <th>carnet</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>semestre</th>
                    <th>edad</th>
                    <th>Lugar</th>
                    <th>genero</th>
                    <th>estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $estudiante['carnet'] ?></td>
                    <td><?= $estudiante['nombre'] ?></td>
                    <td><?= $estudiante['apellido'] ?></td>
                    <td><?= $estudiante['semestre'] ?></td>
                    <td><?= $estudiante['edad'] ?></td>
                    <td><?= $estudiante['lugar'] ?></td>
                    <td><?= $estudiante['genero'] ?></td>
                    <td><?= $estudiante['estado'] ?></td>
                </tr>
            </tbody>
        </table>
    </center>

    <center>
        <table border="1" style="font-size: 10;">
            <h3 style="text-align: center;">Situacion familiar</h3>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>nombre</th>
                    <th>sexo</th>
                    <th>escolaridad</th>
                    <th>observacion</th>
                    <th>edad</th>
                </tr>
            </thead>
            <tbody>
                <?php $contado = 1;
                foreach ($situacion as $sit) : ?>
                    <tr>

                        <td><?= $contado ?></td>
                        <td><?= $sit['nombre'] ?></td>
                        <td><?= $sit['sexo'] ?></td>
                        <td><?= $sit['escolaridad'] ?></td>
                        <td><?= $sit['observacion'] ?></td>
                        <td><?= $sit['edad'] ?></td>
                    </tr>
                <?php $contado = $contado + 1;
                endforeach ?>
            </tbody>
        </table>
    </center>

    <center>
        <table border="1" style="font-size: 10;">
            <h3 style="text-align: center;">Evaluacion DSM</h3>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>nombre</th>
                    <th>hallazgo</th>
                </tr>
            </thead>
            <tbody>
                <?php $contado = 1;
                foreach ($dsm as $sit) : ?>
                    <tr>

                        <td><?= $contado ?></td>
                        <td><?= $sit['nombre'] ?></td>
                        <td><?= $sit['hallazgo'] ?></td>
                    </tr>
                <?php $contado = $contado + 1;
                endforeach ?>
            </tbody>
        </table>
    </center>

    <center>
        <table border="1" style="font-size: 10;">
            <h3 style="text-align: center;">Plan terapeutico</h3>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>fecha</th>
                    <th>actividad</th>
                    <th>detalle</th>
                </tr>
            </thead>
            <tbody>
                <?php $contado = 1;
                foreach ($plan as $sit) : ?>
                    <tr>

                        <td><?= $contado ?></td>
                        <td><?= $sit['fecha'] ?></td>
                        <td><?= $sit['actividad'] ?></td>
                        <td><?= $sit['detalle'] ?></td>
                    </tr>
                <?php $contado = $contado + 1;
                endforeach ?>
            </tbody>
        </table>
    </center>
    <center>

        <div class="relative w-full mb-2 px-5">
            <br>
            <br>
            <strong class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Examen mental</strong>
        </div>

    </center>
    <div class="box relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">

        <table>
            <tr>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Apariencia personal</strong>
                    <div id="main" class="grid grid-rows-3 grid-flow-col">
                        <?php $customFields = getFields('apariencia');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-2 relative w-full mb-2 px-8">Actitud y conducta</strong>
                    <div id="main" class="grid grid-rows-2 grid-flow-col">
                        <?php $customFields = getFields('conducta');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Actitud motora</strong>
                    <div id="main" class="grid grid-rows-4 grid-flow-col">
                        <?php $customFields = getFields('motora');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Conciencia</strong>
                    <div id="main" class="grid grid-rows-1 grid-flow-col">
                        <?php $customFields = getFields('conciencia');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Animo</strong>
                    <div id="main" class="grid grid-rows-2 grid-flow-col">
                        <?php $customFields = getFields('animo');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Contenido</strong>
                    <div id="main" class="grid grid-rows-2 grid-flow-col">
                        <?php $customFields = getFields('contenido');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Pensamiento</strong>
                    <div id="main" class="grid grid-rows-1 grid-flow-col">
                        <?php $customFields = getFields('pensamiento');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
                <td>
                    <strong class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Memoria</strong>
                    <div id="main" class="grid grid-rows-1 grid-flow-col">
                        <?php $customFields = getFields('memoria');
                        foreach ($customFields as $field) :
                            $value = getFieldsValue($field->id_campo, $idPaciente);
                            echo inputType($field->tipo, $field->id_campo, $field->nombre, isset($value) ? $value->valor : '');
                        endforeach;
                        ?>
                    </div>
                </td>
            </tr>
        </table>
        <div>
            <br><br><br>
            <table width="100%">
                <tr>
                    <th align="left" width="40%">
                        <p>
                            Nombre de la psicóloga
                        <p>
                            <hr width=50% align="right">
                        <p>
                    </th>
                    <th align="left" width="40%">
                        <p>
                            colegiado
                        <p>
                            <hr width=80% align="right">
                        <p>
                    </th>
                </tr>
            </table>
        </div>

        <script>
            window.addEventListener('load', function() {
                window.print();
            });
        </script>
</body>

</html>