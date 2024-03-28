<div class="w-full mb-12 px-4">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-center text-4xl text-blueGray-700">
                        Listado de Pacientes
                    </h3>
                    <div class="grid gap-5">
                        <a href="<?php echo base_url(); ?>paciente/registrar">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-green-500">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                    <?php if (session()->get('no_access')) : ?>
                        <h5 style="color: red"><?php echo session()->get('no_access'); ?></h5>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="block w-full overflow-x-auto">
            <!-- Projects table -->
            <table id="example" class="items-center w-full bg-transparent border-collapse" align="center">
                <thead>
                    <tr>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Nombre
                        </th>
                        <th>
                            Lugar
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Fecha nacimiento
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            estudiante
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            estado
                        </th>
                        <th class="" align="center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php if (count($pacientes) > 0) : foreach ($pacientes as $usuario) : ?>
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">

                                    <span class="ml-3 font-bold text-blueGray-600">
                                        <?= $usuario['nombre'] ?>
                                    </span>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <i class="fas fa-circle text-orange-500 mr-2"></i>
                                    <?= $usuario['lugar'] ?>

                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $usuario['fecha_nacimiento'] ?>

                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $usuario['estudiante'] ?>

                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $usuario['estado'] ?>

                                </td>

                                <td class="text-center" align="center">
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded" href="<?= base_url() ?>paciente/editar/<?= $usuario['id_paciente'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                    <!-- <a class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" href="<?= base_url() ?>conyugue/editar/<?= $usuario['id_paciente'] ?>">Conyugue</a> -->
                                    <a class="bg-green-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" target="_blank" href="<?= base_url() ?>paciente/pdf/<?= $usuario['id_paciente'] ?>"><i class="fa fa-print"></i></a>
                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="deletePass(<?= $usuario['id_paciente'] ?>)"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                    <?php endforeach;
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script>
    $("table#example").Grid({
        pagination: {
            enabled: true,
            limit: 5,
            summary: false
        },
        search: {
            enabled: true
        }
    });

    function deletePass(id) {
        Swal.fire({
            title: "Quiere eliminar el registro?",
            text: "Eliminar paciente!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Eliminar el registro!"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('<?=  base_url() ?>paciente/borrar/'+id, {
                        method: 'GET',
                        headers: {
                            "Content-Type": "application/json",
                        },
                    })
                    .then(res => res.json())
                    .then(res => {
                        Swal.fire({
                            title: "Eliminado!",
                            text: "Registro eliminado.",
                            icon: "success"
                        });
                        location.reload();
                    });

            }
        });
    }
</script>