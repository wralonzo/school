<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Editar Usuario</h5>
          <form method="POST" action="<?= base_url() ?>user/editar/<?= $user_data['id_user'] ?>">
            <div class="form-outline" data-mdb-input-init>
              <input name="user" value="<?= $user_data['user'] ?>" type="text" id="formControlLg" class="form-control form-control-lg" />
              <label class="form-label" for="formControlLg">Usuario</label>
            </div>

            <div class="form-outline  mt-3" data-mdb-input-init>
              <div class="content-select">
                <select name="role">
                  <option>Seleccione un tipo de usuario</option>
                  <option <?= $user_data['role'] == 'Administrador' ? 'selected' : '' ?> value="Administrador">Administrador</option>
                  <option <?= $user_data['role'] == 'Maestro' ? 'selected' : '' ?> value="Maestro">Maestro</option>
                  <option <?= $user_data['role'] == 'Alumno' ? 'selected' : '' ?> value="Alumno">Alumno</option>
                  <option <?= $user_data['role'] == 'Padre' ? 'selected' : '' ?> value="Padre">Padre</option>
                </select>
                <i></i>
              </div>
            </div>

            <div class="form-outline  mt-3" data-mdb-input-init>
              <div class="content-select">
                <select name="estado">
                  <option>Estado del usuario</option>
                  <option <?= $user_data['estado'] == 1 ? 'selected' : '' ?> value="1">Activo</option>
                  <option <?= $user_data['estado'] == 0 ? 'selected' : '' ?>  value="0">Inactivo</option>
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