<div class="w-full mb-12 px-4">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-4xl text-blueGray-700 text-center">
                        Listado de reservaciones
                    </h3>
                    <div class="grid gap-5">
                        <a href="<?php echo base_url(); ?>cita/registrar" >
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
            <table id="example" class="items-center w-full bg-transparent border-collapse">
                <thead>
                    <tr>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Fecha
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Hora
                        </th>
                        <th class="">
                            Estudiante
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Jornada
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Estado
                        </th>

                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Paciente
                        </th>
                        <th class="">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php if (count($citas) > 0) : foreach ($citas as $cita) : ?>
                            <tr style="background-color: goldenrod;">
                                <td style="background-color: goldenrod;" class="border-t-0 px-6 align-middle border-l-0 border-r-0 bg-red text-xs whitespace-nowrap p-4 text-left flex items-center">

                                    <span class="ml-3 font-bold text-blueGray-600">
                                        <?= $cita['fecha'] ?>
                                    </span>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $cita['hora'] ?>

                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $cita['carnet'] ?> <?= $cita['nombre'] ?>

                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $cita['jornada'] ?>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $cita['estado_cita']  ?>
                                    <i class="fas fa-circle text-<?= $cita['estado_cita'] == 'Reservada' ? 'green' : 'red' ?>-500 mr-2"></i>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?= $cita['paciente'] ?>
                                </td>

                                <td class="text-center">
                                    <a class="py-6" href="<?= base_url() ?>cita/editar/<?= $cita['cita'] ?>">
                                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                    </a>
                                    <a class="py-6" href="<?= base_url() ?>cita/borrar/<?= $cita['cita'] ?>">
                                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                            <i class="fas fa-trash-alt"></i>
                                        </div>
                                    </a>
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
</script>