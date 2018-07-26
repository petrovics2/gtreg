<?php
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="container hatter">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center">
            <h1 class="display-3 text-danger py-3">Közgáz Gólyatábor 2018</h1>

            <div class="card mx-5">
                <div class="card-body py-5">
                    <?php
                        /* $regTime = new DateTime();
                        $regTimeStart = new DateTime('2018-07-30');
                        $regTimeEnd = new DateTime('2018-08-14');
                        if ($regTime < $regTimeStart) {
                            echo "<h3>A regisztráció még nem kezdődött el!</h3>";
                        }
                        elseif ($regTime > $regTimeEnd) {
                            echo "<h3>A regisztrációs időszak véget ért!</h3>";
                        } else {
                            
                        } */
                        echo '<a href="regisztracio.php" class="btn btn-secondary p-4 mx-5">Regisztráció</a>';
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<?php
    include('includes/footer.php');
?>