<?php
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="container hatter">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center">
            <h1 class= "text-danger py-2">Közgáz Gólyatábor 2018</h1>

            <div class="card mx-5 text-left">
                <div class="card-body py-3">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="email">E-mail cím:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="jelszo">Jelszó:</label>
                            <input type="password" class="form-control" name="jelszo" id="jelszo">
                        </div>  
                        <div class="form-group">
                            <input type="submit" value="Bejelentkezés" class="btn btn-secondary">
                        </div>                      
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<?php
    include('includes/footer.php');
?>