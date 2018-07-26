<?php
    session_start();
    include('includes/header.php');
    include('includes/navbar.php');
?>
<script>
    function validate() {
    $("#errorlist").empty();
    console.log("validate");        
    var name = checkName();
    var email = checkEmail();
    var tel = checkTel();
    var lakcim = checkLakcim();
    var gdpr = checkGdpr();
    console.log(name);
    console.log(email);
    console.log(tel);
    console.log(lakcim);
    console.log(gdpr);
    if (name & email & tel & lakcim & gdpr) {
        return true;
    } else {
        return false;
    }
}
</script>
<div class="container hatter">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center mb-5">
            <h1 class="display-3 text-danger py-3">Közgáz Gólyatábor 2018</h1>

            <div class="card mx-5 py-1 px-5 mb-5">
            <?php
                
                if (isset($_SESSION['errors'])) {
                    $errors = $_SESSION['errors'];
                    foreach ($errors as $error) {
                        echo "<p class='text-danger'>" . $error ."</p>";
                    }
                }
            ?>
            <ul class="list-unstyled mt-2 text-danger" id="errorlist">

            </ul>
                    <form action="regist.php" onsubmit="return validate()" method="post" id="regForm" name="regForm">
                        <div class="form-group">
                            <label for="nev">Név<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="A neved" name="nev" id="nev">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail cím<span class="text-danger">*</span></label>
                            <input type="email" class="form-control"  name="email" placeholder="valami@email.hu" id="email">
                        </div>
                        <div class="form-group">
                            <label for="nem">Nem<span class="text-danger">*</span></label>
                            <select class="form-control" id="nem" name="nem">
                                <option value="1">Férfi</option>
                                <option value="0">Nő</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lakcim">Lakcím<span class="text-danger">*</span></label>
                            <input type="text" class="form-control"  placeholder="A lakcímed" name="lakcim" id="lakcim">
                        </div>
                        <div class="form-group">
                            <label for="telefonszam">Telefonszám<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="A telefonszámod (pl: 06201234567 vagy +36201234567)" name="telefonszam" id="telefonszam">
                        </div>
                        <div class="form-group">
                            <label for="szak">Szak<span class="text-danger">*</span></label>
                            <select class="form-control" id="szak" name="szak">
                                <option value="emberi erőforrások">Emberi erőforrások</option>
                                <option value="gazdálkodás és menedzsment">Gazdálkodás és menedzsment</option>
                                <option value="gazdálkodás és menedzsment angol">Gazdálkodás és menedzsment (angol nyelven)</option>
                                <option value="gazdaságinformatikus">Gazdaságinformatikus</option>
                                <option value="kereskedelem és marketing">Kereskedelem és marketing</option>
                                <option value="nemzetközi gazdálkodás">Nemzetközi gazdálkodás</option>
                                <option value="nemzetközi gazdálkodás angol">Nemzetközi gazdálkodás (angol nyelven)</option>
                                <option value="pénzügy és számvitel">Pénzügy és számvitel</option>
                                <option value="turizmus-vendéglátás">Turizmus-vendéglátás</option>
                                <option value="vidékfejlesztési agrármérnök">Vidékfejlesztési agrármérnök</option>
                                <option value="alkalmazott közgazdaságtan">Alkalmazott közgazdaságtan</option>
                                <option value="alkalmazott közgazdaságtan angol">Alkalmazott közgazdaságtan (angol nyelven)</option>
                                <option value="gazdaság- és pénzügy-matematikai elemzés">Gazdaság- és pénzügy-matematikai elemzés</option>
                                <option value="kommunikáció- és médiatudomány">Kommunikáció- és médiatudomány</option>
                                <option value="kommunikáció- és médiatudomány angol">Kommunikáció- és médiatudomány (angol nyelven)</option>
                                <option value="nemzetközi tanulmányok">Nemzetközi tanulmányok</option>
                                <option value="nemzetközi tanulmányok angol">Nemzetközi tanulmányok  (angol nyelven)</option>
                                <option value="politikatudomány">Politikatudomány</option>
                                <option value="politikatudomány angol">Politikatudomány (angol nyelven)</option>
                                <option value="szociológia">Szociológia</option>                                
                                <option value="szociológia angol">Szociológia (angol nyelven)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="allergia">Allergia<span class="text-danger"></span></label>
                            <input type="text" class="form-control" placeholder="Ha bármire allergiás vagy ide írd be!" name="allergia" id="allergia">
                        </div>
                        <div class="form-group">
                            <label for="etel">Ételérzékenység<span class="text-danger"></span></label>
                            <input type="text" class="form-control" placeholder="Ha nem tudsz megenni valamit, esetleg vega vagy azt itt jelezheted" name="etel" id="etel">
                        </div>
                        <div class="form-group">
                            <label for="polomeret">Póló méret<span class="text-danger">*</span></label>
                            <select class="form-control" id="polomeret" name="polomeret">
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Melyik napra jössz?<span class="text-danger">*</span></label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="kedd" name="kedd" value="true">
                                <label class="form-check-label" for="kedd">Kedd</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="szerda" name="szerda" value="true">
                                <label class="form-check-label" for="szerda">Szerda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="csütörtök" name="csütörtök" value="true">
                                <label class="form-check-label" for="csütörtök">Csütörtök</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="péntek" name="péntek" value="true">
                                <label class="form-check-label" for="péntek">Péntek</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="szombat" value="true">
                                <label class="form-check-label" for="szombat">Szombat</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="egyeb">Egyéb</label>
                            <input type="text" class="form-control" placeholder="Ha bármi egyéb kérdésed/problémád van azt ide írd" name="egyeb" id="egyeb">
                        </div>
                        <div class="form-group">
                        <div class="form-check form-check-inline">
                                <input class="form-check-input"  onchange="adatvedCheck()" type="checkbox" id="adatvedelem" value="true" name="gdpr">
                                <label class="form-check-label" for="adatvédelem">Az <a href="#GDPRModal"  class="text-danger" data-toggle="modal">adatvédelmi szabályzatot</a> elolvastam és elfogadom<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <input type="submit" id="regButton" onclick="regForm" disabled value="Regisztráció" class="btn btn-secondary">
                        </div>                 
                    </form>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="GDPRModal" tabindex="-1" role="dialog" aria-labelledby="GDPRModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="GDPRModalTitle">Közgáz Gólyatábor 2018 Regisztráció – Regisztrációs Feltételek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
            include('includes/szerzodes.php');
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="modClose()">Bezárás</button>
        <button type="button" class="btn btn-primary" onclick="accept()">Elfogadás</button>
      </div>
    </div>
  </div>
</div>

<?php
    include('includes/footer.php');
?>



