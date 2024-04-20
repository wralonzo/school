<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrar Maestro</h5>
                    <form method="POST" action="<?= base_url() ?>teacher/registrar">
                        <div class="form-outline" data-mdb-input-init>
                            <input name="name" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Nombres y Apellidos</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="address" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Dirección</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="mobile" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Télefono</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="user" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Usuario</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="password" type="text" id="formControlLg" class="form-control form-control-lg" required/>
                            <label class="form-label" for="formControlLg">Contraseña</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-4">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>