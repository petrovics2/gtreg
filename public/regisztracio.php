<?php
    session_start();
    include('includes/header.php');
    include('includes/navbar.php');
?>
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
                    <form action="regist.php" method="post" id="regForm">
                        <div class="form-group">
                            <label for="name">Név<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required placeholder="A neved" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail cím<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" required name="email" placeholder="valami@email.hu" id="email">
                        </div>
                        <div class="form-group">
                            <label for="gender">Nem<span class="text-danger">*</span></label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="1">Férfi</option>
                                <option value="0">Nő</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Lakcím<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required placeholder="A lakcímed" name="address" id="address">
                        </div>
                        <div class="form-group">
                            <label for="telnumber">Telefonszám<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" minlength="10" required placeholder="A telefonszámod (pl: 06201234567 vagy +36201234567)" name="telnumber" id="telnumber">
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
                            <label for="allergy">Allergia<span class="text-danger"></span></label>
                            <input type="text" class="form-control" placeholder="Ha bármire allergiás vagy ide írd be!" name="allergy" id="allergy">
                        </div>
                        <div class="form-group">
                            <label for="eating">Ételérzékenység<span class="text-danger"></span></label>
                            <input type="text" class="form-control" placeholder="Ha nem tudsz megenni valamit, esetleg vega vagy azt itt jelezheted" name="eating" id="eating">
                        </div>
                        <div class="form-group">
                            <label for="tshirt">Póló méret<span class="text-danger">*</span></label>
                            <select class="form-control" id="tshirt" name="tshirt">
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Melyik napra jössz?<span class="text-danger">*</span></label>
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
                            <label for="name">Egyéb</label>
                            <input type="text" class="form-control" placeholder="Ha bármi egyéb kérdésed/problémád van azt ide írd" name="other" id="other">
                        </div>
                        <div class="form-group">
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" required onchange="adatvedCheck()" type="checkbox" id="adatvédelem" value="true" name="gdpr">
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



