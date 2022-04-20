<div class="header align-items-center mb-4" style="height: 145px;">
    <!-- Mask -->
    <span class="mask bg-gradient-default"></span>
    <!-- Header container -->
    <div class="container align-items-center">
        <div class="row" id="success">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                <h1 class="display-2 text-white mt-3 ml-3">Regalos 2020</h1>
        
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-3 ml-md-0 align-self-center text-left text-md-right mb-3 mb-md-0">
                <h4 class="text-white font-weight-bold mt-4">Pulse el botón para exportar los datos de este apartado a excel.</h4>
                <form action="../../controller/exports/exportPresents.php" method="post">
                    <input type="submit" name="export" class="btn btn-success rounded-pill text-uppercase" value="Exportar"></input>
                </form>
                
            </div>
        </div>
    </div>


    <div class="container pt-4 mt-3">
        <div class="mt-4" id="data"></div>
    </div>
</div>