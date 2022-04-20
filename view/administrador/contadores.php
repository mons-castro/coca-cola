<!-- Card stats -->

<div class="row">
  <?php
  $cont = 0;
  foreach ($admin->getNewUsers() as $value) {
    echo '
            <div class="col-xl-3 col-md-6">
            <div class="card card-stats" style="border-radius: 1rem;">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">';

    if ($cont == 0) {
      echo '<h5 class="card-title text-uppercase text-muted mb-0">Capacitados Registrados';
    } else if ($cont == 1) {
      echo '<h5 class="card-title text-uppercase text-muted mb-0">Supervisores Registrados';
    } else if ($cont == 2) {
      echo '<h5 class="card-title text-uppercase text-muted mb-0">Asesores Registrados';
    }

    echo '</h5>
            <span class="h1 font-weight-bold mb-0">' . $value . '</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-nowrap">Incremento de usuarios</span>
                    </p>
                </div>
            </div>
        </div>';
    $cont += 1;
  }
  ?>
  <div class="col-xl-3 col-md-6">
    <div class="card card-stats" style="border-radius: 1rem;">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Buscar por institución</h5>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="fas fa-map"></i>
            </div>
          </div>

        </div>
        <p class="mt-4 mb-0 text-sm">
          <a href="?map" class="stretched-link text-uppercase"><i class="fas fa-map-marker-alt"></i> Ver mapa</a>
        </p>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6">
    <div class="card card-stats" style="border-radius: 1rem;">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Capacitaciones Finalizadas</h5>
            <span class="h1 font-weight-bold mb-0"><?php print_r($admin->getAllFinished()); ?></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="fas fa-check"></i>
            </div>
          </div>

        </div>
        <p class="mt-4 mb-0 text-sm">
          <a href="dashboard.php?finalizados" class="stretched-link text-uppercase"><i class="fas fa-eye"></i> Ver finalizados</a>
        </p>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6">
    <div class="card card-stats" style="border-radius: 1rem;">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Números de Cliente <br> Coca-Cola</h5>
            <span class="h1 font-weight-bold mb-0"><?php print_r($admin->getPresentsCount()); ?></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="fas fa-gift"></i>
            </div>
          </div>

        </div>
        <p class="mt-4 mb-0 text-sm">
          <a href="dashboard.php?presents" class="stretched-link text-uppercase"><i class="fas fa-eye"></i> Ver números de cliente</a>
        </p>
      </div>
    </div>
  </div>
</div>