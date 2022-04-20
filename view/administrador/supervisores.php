<?php

    if(isset($_GET['est'])){
        $estado = $_GET['est'];
    }
?>

<div class="header align-items-center mb-4" style="height: 185px;">
    <!-- Mask -->
    <span class="mask bg-gradient-default"></span>
    <!-- Header container -->
    <div class="container align-items-center">
        <div class="row">
            <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <h1 class="display-2 text-white mt-3 ml-3">Supervisores en <?php echo ucfirst($estado) ?></h1>
        
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row" id="resultado"></div>
        <?php 
            $admin->getSupByState($estado); 
        ?>
    </div>
</div>