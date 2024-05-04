<div class="w-full mb-12 px-4">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-4xl text-blueGray-700 text-center">
                        Listado de estudiantes
                    </h3>
                    <a href="<?php echo base_url(); ?>student/registrar">
                        <div class="">
                            <i class="fa fa-plus fa-2x"></i>
                        </div>
                    </a>
                    <?php if (session()->get('no_access')) : ?>
                        <h5 style="color: red"><?php echo session()->get('no_access'); ?></h5>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="mx-4">
            <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Padre
                        </th>
                        <th>
                            Alerta
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data as $item) : ?>
                        <tr class="center-text">
                            <td>
                                <span class="ml-3 font-bold text-blueGray-600">
                                    <?= $item['name'] ?>
                                </span>
                            </td>
                            <td>
                                <span class="ml-3 font-bold text-blueGray-600">
                                    <?= $item['name'] ?>
                                </span>
                            </td>
                            <td>
                                <span class="ml-3 font-bold text-blueGray-600" style="background-color: <?= $item['alert_cook'] ?>; color: white">
                                    <?= $item['alert'] ?>
                                </span>
                            </td>
                            <td>
                                <a class="py-6" href="<?= base_url() ?>student/editar/<?= $item['id_children'] ?>">
                                    <i class="fas fa-edit fa-fw me-3 text-primary"></i><span class="text-primary">
                                </a>
                                <a class="py-6" href="<?= base_url() ?>student/borrar/<?= $item['id_children'] ?>">
                                    <i class="fas fa-trash fa-fw me-3 text-danger"></i><span class="text-red">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
        },
        style: {
            th: {
                'text-align': 'center'
            },
            td: {
                'text-align': 'center'
            },
        }
    });
</script>