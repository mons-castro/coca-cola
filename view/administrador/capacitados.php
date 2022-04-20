<?php
    if(isset($_GET['est'])){
        $state = $_GET['est'];
    }

?>
<div class="header align-items-center mb-4" style="height: 185px;">
    <!-- Mask -->
    <span class="mask bg-gradient-default"></span>
    <!-- Header container -->
    <div class="container align-items-center">
        <div class="row" id="success">
            <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <h1 id="stateTitle" class="display-2 text-white mt-3 ml-3"></h1>
        
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats" style="border-radius: 1rem;">
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">avance promedio</h5>
                        <span class="h2 font-weight-bold mt-4"><?php $admin->getWatchPromedyByState($state) ?> %</span>
                    </div>

                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="fas fa-chart-line"></i>
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
                        <h5 class="card-title text-uppercase text-muted mb-0">finalizados</h5>
                        <span class="h2 font-weight-bold mt-4"><?php print_r($admin->getFinishedCoursesByState($state)['finished']) ?></span>
                    </div>

                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    
                    </div>
                    
                </div>
                </div>
            </div>

             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-3 ml-md-0 text-left text-md-right mb-3 mt-md--3">
                <h4 class="text-white font-weight-bold mt-4">Pulse el botón para exportar los datos de este apartado a excel.</h4>
                <form action="../../controller/exports/exportDataByState.php" method="post">
                    <input class="d-none" name="estado" value="<?php print_r($state) ?>"/>
                    <input type="submit" name="export" class="btn btn-success rounded-pill text-uppercase" value="Exportar a excel"></input>
                </form>
                
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row" id="resultado"></div>
        
        <div class="my-4" id="data"></div>
    </div>
</div>