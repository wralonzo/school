<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Editar alumno</h5>
                    <form method="POST" action="<?= base_url() ?>student/editar/<?= $data['id_children'] ?>">
                        <div class="form-outline" data-mdb-input-init>
                            <input name="name" value="<?= $data['name'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Nombre</label>
                        </div>

                        <div class="form-outline mt-3" data-mdb-input-init>
                            <div class="content-select">
                                <select name="father">
                                    <option>Seleccione un padre de familia</option>
                                    <?php
                                    if (count($fathers) > 0) :
                                        $selected = '';
                                        foreach ($fathers as $item) :
                                            if($data['father'] == $item['id_father']):
                                                $selected = 'selected';
                                            endif;

                                    ?>
                                            <option <?= $selected ?> value="<?= $item['id_father'] ?>"><?= $item['name'] ?></option>

                                    <?php endforeach;
                                    endif; ?>
                                </select>
                                <i></i>
                            </div>
                        </div>

                        <div class="form-outline mt-3" data-mdb-input-init>
                            <input name="alert_cook" value="<?= $data['alert_cook'] ?>" type="color" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Alerta</label>
                        </div>

                        <div class="form-outline mt-3" data-mdb-input-init>
                            <input name="alert" value="<?= $data['alert'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Alerta</label>
                        </div>

                        <button type="submit" class="btn btn-success btn-block mt-4">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>