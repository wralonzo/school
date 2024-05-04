<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrar estudiante</h5>
                    <form method="POST" action="<?= base_url() ?>student/registrar">
                        <input name="user" type="hidden" value="<?= session()->get('id_user') ?>" />

                        <div class="form-outline" data-mdb-input-init>
                            <input name="name" type="text" id="formControlLg" class="form-control form-control-lg" required />
                            <label class="form-label" for="formControlLg">Nombre</label>
                        </div>
                        <div class="form-outline mt-3" data-mdb-input-init>
                            <div class="content-select">
                                <select name="father">
                                    <option>Seleccione un padre de familia</option>
                                    <?php
                                    if (count($fathers) > 0) :
                                        foreach ($fathers as $item) :

                                    ?>
                                            <option value="<?= $item['id_father'] ?>"><?= $item['name'] ?></option>

                                    <?php endforeach;
                                    endif; ?>
                                </select>
                                <i></i>
                            </div>
                        </div>
                        <div class="form-outline mt-4" data-mdb-input-init>
                            <input name="alert_cook" type="color" id="formControlLg" class="form-control form-control-lg" required />
                            <label class="form-label" for="formControlLg">Alerta</label>
                        </div>
                        <div class="form-outline mt-4" data-mdb-input-init>
                            <input name="alert" type="text" id="formControlLg" class="form-control form-control-lg" required />
                            <label class="form-label" for="formControlLg">Alerta</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-4">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>