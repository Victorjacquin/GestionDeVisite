<html>

<head>
    <!--Unicode transformation format -->
    <meta charset="utf-8" /> <!-- Spécifiez l'encodage des caractères -->
    <title>Gestion de visite</title>

    <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/themes/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">

</head>

<div class="mt-4 border-top pt-4"></div>

<br>

<form class="form-control" action="../controller/medecin_controller.php" method="post" name="formUserData" >
    <h6> Informations du visiteur :</h6>
    <br>
    <br>

    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Nom : </label>
        <div class="col-sm-10">
            <label>
                <input name="nom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $VisiteurData[0]["nom"]?>">
            </label>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Prénom : </label>
        <div class="col-sm-10">
            <label>
                <input name="prenom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $VisiteurData[0]["prenom"]?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered scrollable modal -->
    <div class="modal-dialog modal-lg" id="voirRapportNedecin">

    </div>

</form>

<form action="../controller/visiteur_controller.php" name="back">
    <button type="submit" class="btn btn-warning" name="back" >BACK</button>
</form>
</html>




