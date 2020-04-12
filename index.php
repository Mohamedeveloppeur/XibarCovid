<?php
require_once('admin/connexion.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="refresh" content="1800">
  <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="L' application pour traquer en temps réels le covid 19 au Sénégal et à travers le monde.">
    <meta name="Subject" content="track le covid 19 au Sénégal">
    <meta name="Copyright" content="NabiTech 2020">
    <meta name="Author" content="NabiTech">
    <meta name="Publisher" content="Mohamed Sarr de NabiTech">
    <meta name="Identifier-Url" content="">

  <title>Xibar-Covid-19</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/png/virus.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <header id="header">
        <div class="logo">
            <a href=""><h1 class="logo_text"><span>Xibar</span> Covid</h1></a>
        </div>
        <i class="fa fa-bars menu_toggle"></i>
        <ul class="nav">
            <li><a href="#">Acceuil</a></li>
            <li><a href="#Résumé">Résumé</a></li>
            <li><a href="#Statistiques">Statistiques</a></li>
            <li><a href="#visualiser">Visualiser</a></li>
            <li><a href="#propos">A propos</a></li>
        </ul>
    </header>
</div>
        <section class="start_sec">
            <!--<h1 class="titre">Xibar-Covid-19</h1>-->
            <div></div>
            <div>
               <img class="rotate_03" id="covid_ico" src="/img/png/virus.png" alt="" >
            </div>
               
            <div class="ico_2">
                <img class="img" src="/img/png/watching-tv.png" alt="">
                <img class="img" src="/img/png/hand-wash.png" alt="">
                <img class="img" src="/img/png/medical-mask.png" alt="">
                <img class="img" src="/img/png/quarantine.png" alt="">
                <img class="img" src="/img/png/cough.png" alt="">
            </div>
            <div>
                <p class="para_1">RESPECTONS LES CONSIGNES</p> 
                <p>Nanu tenku si ndigal yi</p>
               </div>
           <div>
            <p class="para_1" id="Résumé">Suivez L'évolution du Covid-19 au Sénégal et à travers le monde en temps réels</p> 
            </div>
        </section>


         <!--Layout Global Info-->
         <section class="sec_1 "  >
        <div class="div_parent " >   
            <div class="table_container">
            <table class=" monde" cellspacing="0">
                <thead>
                    <tr>
                        <th class="tete" colspan="2"><img class="icone" src="img\png\world_1.png" > Le Monde</th>
                    </tr>
                    <tr>
                        <th>Total Cas</th>
                        <th id="cas_global">0</th>
                    </tr>
                    <tr>
                        <th>Déces :</th>
                        <th id="cas_deces">0</th>
                    </tr>
                    <tr>
                        <th>Guéris :</th>
                        <th id="cas_guerris">0</th>
                    </tr>
                    <tr>
                        <th>Taux de guérison :</th>
                        <th id="taux_cas_guerris">0</th>
                    </tr>
                </thead>
            </table>
        </div>

  <!--Senegal datas-->
  <div class="table_container">
  <table  class=" monde" cellspacing="0">
    <thead>
        <tr>
            <th class="tete" colspan="2"> <img class="icone" src="img\png\senegal-round.png" > Sénégal</th>
        </tr>
        <tr>
            <th>Total Cas :</th>
            <th id="cas_global_sn">0</th>
        </tr>
        <tr>
            <th>Cas Aujourd'hui:</th>
            <th id="cas_actuel_sn" class='todayCases'>0</th>
        </tr>
        <tr>
            <th>Guéris :</th>
            <th id="cas_guerris_sn" class="recovered">0</th>
        </tr>
        <tr>
            <th>Sous-traitement :</th>
            <th id="cas_traitement_sn" class="death">0</th>
        </tr>
        <tr>
            <th>Décés :</th>
            <th id="cas_mort_actuel_n" class="death">2</th>
        </tr>
        <tr>
            <th>Décés Aujourd'hui :</th>
            <th id="cas_deces_sn" class="todayDeath">0</th>
        </tr>
        <tr>
            <th>Taux de guérison :</th>
            <th id="GuerisEnPourcent"></th>
        </tr>
    </thead>
</table>

</div> 
</section>
  <!--faire des données d'informations de transmission-->
<section class="sec_2 " id="Statistiques" style="display:flex;">
    <h2 style="text-transform:uppercase ;">Toutes les données du covid-19 en Temps Réels</h2>
  <input type="text" placeholder=' &nbsp;Recherches un pays....' class="" name="" id="myInput" value="">
  <div class="table_box"  id="container">

    <table class="données" id="myTable" cellpadding="0">
         <thead>
            <tr class="f">
              <th>No.</th>
              <th>Pays</th>
              <th>Cas</th>
              <th>Cas ce jour</th>
              <th>Sous-Traitement</th>
              <th>Décés</th>
              <th>Décés ce jour</th>
              <th>Guéris</th>
            </tr>
         </thead>
         <tbody id="liste_pays" >

         </tbody>
     </table>
     <div id="visualiser"></div>
    </div>
</section>
<h2 style="text-transform:uppercase;">Visualiser</h2>
<section class="sec_1 frame" style="height: 80vh;   @media only screen and (max-width:780px) {height: 50vh;}">

    <iframe src="https://www.google.com/maps/d/embed?mid=1xXGIzv_k85EhioV44C5zkwhZcgoKfD2z" frameborder="0" width="80%" height="100%"></iframe>
  
</section>

    <div class="footer_container" id="propos">
        <h2 style="text-transform:uppercase ;">à Propos</h2>
        <div class="about">
            <p><span class="uligne">Source des données:CSSEGISandData-Ministère de la Santé et l’Action sociale  </span></p>
            
            <p>NB: Toutefois l'inexactitude des données
            est due en raison du temps de collecte des 
            données qui est différent pour chaque pays
            aussi il faut noter que l'application se  
            rafraichie plusieurs fois par jour pour assurer 
            l'information en temps réels</p>
        </div>
        <div class="about">
            <h4 style="font-size: 1.4em; text-transform:uppercase ;">concepteur</h4>
        </div>
        <div class="about plus">
                <img class="card" src="img/jpg/momocc.jpg" alt="">
                <p class="para_1">Mohamed Sarr</p>
                <h5>Software engineering student</h5>
                <h6>Founder & CEO of Nabitech</h6>
                <p> “ En tant qu'acteur du digital je 
                    ne pouvais rester les bras croisés 
                    sur cette crise sanitaire mondiale 
                    alors j'ai pu apporter ma pierre à 
                    l'édifice dans ce combat contre le 
                    covid-19 .<br> Xibar-covid une simple application web conçue pour suivre l'évolution du corona-virus au Sénégal et
                    à travers le monde en temps réels .”</p>
                    <div class="ico">
                        <ul>
                            <li><a href="https://github.com/Mohamedeveloppeur" target="_blank"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCpO1DYa_rwknX0VqDLqo33Q" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/mohamed-sarr-232b0a168?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BIdUefTeoTVaC97QV23rskw%3D%3D"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!--https://www.linkedin.com/in/mohamed-sarr-232b0a168?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BIdUefTeoTVaC97QV23rskw%3D%3D-->
        </div>
        <div class="footer">
        <p> - mohasarr8@gmail.com - &COPY; Nabitech 2020 -</p>
      </div>
    </div>
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>

  <!-- End your project here-->
    <script src="js/jquery.easypiechart.js"></script>
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!--Own scripr-->
  <script src="js/corona.js"></script>
  <!--word-->
  <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>

  <script src="">
      window.onload = function () {
    setTimeout(function () {
        //assigning the same url to the location to refresh
        location.href = location.href;
    }, 2000);
};
  </script>

</body>
</html>