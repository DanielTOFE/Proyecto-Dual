<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Registrate</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Información de Registro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <!--Registro -->

                      <form method="GET" action="./funciones/registro.php">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Usuario:</label>
                          <input name="usuario" type="text" class="form-control" id="recipient-name">
                          <label for="recipient-name" class="col-form-label">Contraseña:</label>
                          <input name="contrasenya" type="password" type="text" class="form-control" id="recipient-name">
                          <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                          <input name="correo_electronico" type="text" class="form-control" id="recipient-name">
                          <label for="recipient-name" class="col-form-label">DNI:</label>
                          <input name="dni" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          
                        </div>
                        <div class="modal-footer">
                          <input type="submit" name="Submit" value="Registrarse" />

                         <!-- <button type="button" class="btn btn-success">Registrarse</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
  </div>