<!-- Header -->
<?php
if (!isset($_GET['info_supervisores'])) {
  header('Location: dashboard.php');
}
?>

<div class="header align-items-center mb-4" style="height: 185px;">
  <!-- Mask -->
  <span class="mask bg-gradient-default"></span>
  <!-- Header container -->
  <div class="container align-items-center">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
        <h1 class="display-3 text-white mt-3 ml-3">
          <?php
          print_r($admin->getSupInformation($_GET['info_supervisores'])['nombre'] . ' ' . $admin->getSupInformation($_GET['info_supervisores'])['apellido']);
          ?>
        </h1>
        <p class="text-white ml-3">
          <?php
          print_r($admin->getSupInformation($_GET['info_supervisores'])['tecnologico']);
          ?>
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-3 ml-md-0 align-self-center text-left text-md-right mb-3 mb-md-0">
        <?php
        if ($admin->getSupInformation($_GET['info_supervisores'])['suspendido']) {
          echo '
              <h4 class="text-white font-weight-bold mt-4">Esta cuenta se encuentra suspendida!. Pulse el botón para desbloquear.</h4>
              <button id="unlockBtn" class="btn btn-danger btn-semi-rounded text-uppercase">Desbloquear</button>
            ';
        }
        ?>
      </div>
    </div>
    <div class="row">
      <!-- Regitros Totales -->
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="border-radius: 1rem;">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Registros</h5>
                <span class="h2 font-weight-bold mt-4"><?php print_r($admin->getAllCounters('ID_checador', 'checadores', $_GET['info_promotores'])['tenderos']) ?></span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                  <i class="fas fa-user-friends"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Registro de Mujeres -->
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="border-radius: 1rem;">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Mujeres</h5>
                <span class="h2 font-weight-bold mt-4"><?php print_r($admin->getWomenByRol('ID_checador', 'checadores', $_GET['info_promotores'])['mujeres']) ?></span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                  <i class="fas fa-female"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Registro de Hombres -->
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="border-radius: 1rem;">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Hombres</h5>
                <span class="h2 font-weight-bold mt-4"><?php print_r($admin->getMenByRol('ID_checador', 'checadores', $_GET['info_promotores'])['hombres']) ?></span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                  <i class="fas fa-male"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      $reports = array();
      foreach ($admin->getReportFiles('NA', $admin->getSupInformation($_GET['info_supervisores'])['id']) as $value) {
        //array_push($reports, $value[0]);
        array_push($reports, $value);
      }
      ?>
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="border-radius: 1rem;">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Evidencia 1</h5>
                <?php echo empty($reports[0]) ? "<span class='text-danger font-weight-bold mt-5'>Sin evidencia</span>" : "<a class='text-success font-weight-bold mt-5' target='_blank' href='https://prod-015845-mexicococacola-cloudfronts3content-12ei93trh58xd.s3-us-west-1.amazonaws.com/5by20-bucket/evidences/" . $reports[0] . "'><i class='fas fa-eye'></i> Ver evidencia</a>"; ?>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                  <i class="fas fa-file"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="border-radius: 1rem;">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Evidencia 2</h5>
                <?php echo empty($reports[1]) ? "<span class='text-danger font-weight-bold mt-5'>Sin evidencia</span>" : "<a class='text-success font-weight-bold mt-5' target='_blank' href='https://prod-015845-mexicococacola-cloudfronts3content-12ei93trh58xd.s3-us-west-1.amazonaws.com/5by20-bucket/evidences/" . $reports[1] . "'><i class='fas fa-eye'></i> Ver evidencia</a>"; ?>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                  <i class="fas fa-file"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="border-radius: 1rem;">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Evidencia 3</h5>
                <?php echo empty($reports[2]) ? "<span class='text-danger font-weight-bold mt-5'>Sin evidencia</span>" : "<a class='text-success font-weight-bold mt-5' target='_blank' href='https://prod-015845-mexicococacola-cloudfronts3content-12ei93trh58xd.s3-us-west-1.amazonaws.com/5by20-bucket/evidences/" . $reports[2] . "'><i class='fas fa-eye'></i> Ver evidencia</a>"; ?>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                  <i class="fas fa-file"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
        <div class="card">
          <div class="card-body">
            <h3>Datos del supervisor</h3>
            <div class="text-center">
              <h2 class="text-muted">Código de referencia</h2>
              <h1 class="font-weight-bold"><?php print_r($admin->getSupInformation($_GET['info_supervisores'])['id']); ?></h1>
            </div>

            <br>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input-username">Nombre</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['nombre']); ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="input-last-name">Apellido</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-last-name" placeholder="Apellidos" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['apellido']); ?>">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input-email">Correo</label>
                  <input type="email" class="form-control input-rounded shadow" id="input-email" placeholder="Correo Electrónico" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['correo']); ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="input-phone">Telefono</label>
                  <input type="number" class="form-control input-rounded shadow" id="input-phone" placeholder="Número de telefono" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['telefono']); ?>" readonly>
                </div>

                <div class="form-group col-md-4">
                  <label for="input-study">Licenciatura</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-study" placeholder="Número de telefono" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['licenciatura']); ?>">
                </div>
                <div class="form-group col-md-4">
                  <label for="input-area">Área</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-area" placeholder="Número de control/matricula" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['area']); ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="input-reference">Contraseña</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-password" placeholder="Escribe para cambiar la contraseña">
                </div>
                <!-- Token anti CSFR -->
                <input type="hidden" id="input-token" name="token" value="<?php echo $_SESSION['token']; ?>">


                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                  <a class="btn bg-danger btn-block btn-semi-rounded text-white text-uppercase" data-toggle="modal" data-target="#eliminarSupervisor">
                    Eliminar supervisor
                  </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                  <input type="button" id="updateTeach" value="Actualizar" name="updateTeach" class="btn btn-block bg-danger btn-semi-rounded text-white text-uppercase"></input>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>
    <div class="row" id="resultado"></div>
    <h3 class="ml-3">Asesores registrados de <?php echo $admin->getSupInformation($_GET['info_supervisores'])['nombre'] ?></h3>
    <?php
    print($admin->getCheckers($_GET['info_supervisores']));
    ?>
    <h3 class="ml-3">Capacitados registrados de <?php echo $admin->getSupInformation($_GET['info_supervisores'])['nombre'] ?></h3>
    <div id="data"></div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="eliminarSupervisor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-12">
            <label for="numberBusiness">Se eliminará el siguiente capacitado: </label>
            <input type="text" class="form-control input-rounded shadow" id="numberBusiness" placeholder="Número de telefono" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['nombre'] . " " . $admin->getSupInformation($_GET['info_supervisores'])['apellido']); ?>" readonly>
            <br>
            <input type="text" name="idSupervisor" class="form-control input-rounded shadow d-none" value="<?php print_r($admin->getSupInformation($_GET['info_supervisores'])['id']); ?>" readonly>
          </div>
        </div>
        <a class="btn btn-block btn-danger" href="../../controller/dropUsersData.php?userType=supervisor&user=<?php echo $admin->getSupInformation($_GET['info_supervisores'])['id']; ?>&token=<?php echo $_SESSION['token']; ?>">Eliminar</a>
      </div>
    </div>
  </div>
</div>