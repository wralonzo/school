<div class="w-full mb-12 px-4">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-4xl text-blueGray-700 text-center">
                        Listado de tests por paciente
                    </h3>
                    <div class="grid gap-5">
                        <a href="<?php echo base_url(); ?>test/registrartestpaciente">
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
                            Id
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Observaciones
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                            Test
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

                    <?php if (count($tests) > 0) : foreach ($tests as $test) : ?>
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">

                                    <span class="ml-3 font-bold text-blueGray-600">
                                        <?= $test['id_test_paciente'] ?>
                                    </span>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <i class="fas fa-circle text-orange-500 mr-2"></i>
                                    <?= $test['observaciones'] ?>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <i class="fas fa-circle text-orange-500 mr-2"></i>
                                    <?= $test['test'] ?>
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <i class="fas fa-circle text-orange-500 mr-2"></i>
                                    <?= $test['nombre'] ?>
                                </td>

                                <td class="text-center">
                                    <a class="py-6" href="<?= base_url() ?>test/testeditar/<?= $test['id_test_paciente'] ?>">
                                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                    </a>
                                    <a class="py-6" onclick="deletePass(<?= $test['id_test_paciente'] ?>)">
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


    function deletePass(id) {
        Swal.fire({
            title: "Quiere eliminar el registro?",
            text: "Eliminar!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Eliminar el registro!"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('<?=  base_url() ?>test/testborrar/borrar/'+id, {
                        method: 'GET',
                        headers: {
                            "Content-Type": "application/json",
                        },
                    })
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