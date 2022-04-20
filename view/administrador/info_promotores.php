<?php
if (!isset($_GET['info_promotores'])) {
  header('Location: dashboard.php');
}
?>

<!-- Header -->
<div class="header align-items-center mb-4" style="height: 200px;">
  <span class="mask bg-gradient-default"></span>
  <div class="container align-items-center">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
        <h1 class="display-3 text-white mt-3 ml-3">
          <?php
          print_r($admin->getCheckerInformation($_GET['info_promotores'])[3] . ' ' . $admin->getCheckerInformation($_GET['info_promotores'])[4]);
          ?>
        </h1>
        <p class="text-white ml-3">
          <?php
          print_r($admin->getCheckerInformation($_GET['info_promotores'])[10]);
          ?>
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-3 ml-md-0 align-self-center text-left text-md-right mb-3 mb-md-0">
        <?php
        if ($admin->getCheckerInformation($_GET['info_promotores'])[13]) {
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
      foreach ($admin->getReportFiles($admin->getUserInformation($_GET['info_promotores'])['id'], $admin->getUserInformation($_GET['info_promotores'])['id_supervisor']) as $value) {
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

  <!-- User Data -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
        <div class="card">
          <div class="card-body">
            <h3>Datos del Asesor</h3>
            <div class="text-center">
              <h2 class="text-muted">Código de referencia</h2>
              <h1 class="font-weight-bold"><?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[0]); ?></h1>
              <h4 class="text-muted">Supervisor: <?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[15]); ?></h4>
            </div>
            <br>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input-username">Nombre</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-username" placeholder="Nombre" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[3]); ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="input-last-name">Apellido</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-last-name" placeholder="Apellidos" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[4]); ?>">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input-email">Correo</label>
                  <input type="email" class="form-control input-rounded shadow" id="input-email" placeholder="Correo Electrónico" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[5]); ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="input-phone">Telefono</label>
                  <input type="number" class="form-control input-rounded shadow" id="input-phone" placeholder="Número de telefono" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[6]); ?>" readonly>
                </div>

                <div class="form-group col-md-6">
                  <label for="input-study">Licenciatura</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-study" placeholder="Número de telefono" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[11]); ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="input-control">Número de control/Matrícula</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-control" placeholder="Número de control/matricula" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[9]); ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="input-reference">Contraseña</label>
                  <input type="text" class="form-control input-rounded shadow" id="input-password" placeholder="Escribe para cambiar la contraseña">
                </div>

                <!-- Token anti CSFR -->
                <input type="hidden" id="input-token" name="token" value="<?php echo $_SESSION['token']; ?>">
                <!-- 
                  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                  <a class="btn bg-danger btn-block btn-semi-rounded text-white text-uppercase" data-toggle="modal" data-target="#eliminarPromotor">
                    Eliminar Promotor
                  </a>
                </div>
                -->

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2 align-self-center">
                  <input type="button" id="updateCoach" value="Actualizar" name="updateCoach" class="btn btn-block bg-danger btn-semi-rounded text-white text-uppercase"></input>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>


    </div>
    <div class="ml-3 mb-3">
      <h3>Capacitados registrados de <?php echo $admin->getUserInformation($_GET['info_promotores'])['nombre'] ?></h3>
      <a href="../../controller/exports/exportDataByPromoter.php?promoter=<?php echo $_GET['info_promotores']; ?>" class="btn btn-success rounded-pill text-uppercase">Exportar a Excel</a>
    </div>
    <div id="data"></div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="eliminarPromotor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <div class="form-group col-12 d-none">
            <label for="emailBusiness">Correo</label>
            <input type="email" class="form-control input-rounded shadow" id="emailBusiness" placeholder="Correo Electrónico" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[5]); ?>" readonly>
          </div>
          <div class="form-group col-12">
            <label for="numberBusiness">Se eliminará el siguiente asesor: </label>
            <input type="text" class="form-control input-rounded shadow" id="numberBusiness" placeholder="Número de telefono" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[3] . ' ' . $admin->getCheckerInformation($_GET['info_promotores'])[4]); ?>" readonly>
            <br>
            <input type="text" name="idChecker" class="form-control input-rounded shadow d-none" value="<?php print_r($admin->getCheckerInformation($_GET['info_promotores'])[0]); ?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>