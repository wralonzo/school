<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Registro de Usuario</h5>
                    <form method="POST" action="<?= base_url() ?>login/registrar">
                        <div class="form-outline" data-mdb-input-init>
                            <input name="user" type="text" id="formControlLg" class="form-control form-control-lg" />
                            <label class="form-label" for="formControlLg">Usuario</label>
                        </div>
                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <input name="password" type="text" id="formControlLg" class="form-control form-control-lg" />
                            <label class="form-label" for="formControlLg">Contraseña</label>
                        </div>

                        <div class="form-outline  mt-3" data-mdb-input-init>
                            <div class="content-select">
                                <select name="role">
                                    <option>Seleccione un tipo de usuario</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Maestro">Maestro</option>
                                    <option value="Alumno">Alumno</option>
                                    <option value="Padre">Padre</option>
                                </select>
                                <i></i>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-block mt-4">Registrarse</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>