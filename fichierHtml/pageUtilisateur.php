<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>ENSAE</title>
    <meta charset="utf-8">
    <!-- Gérer les compatibiltés -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Gérer l'affichage sur tous les écran avec un zoom prédéfini -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Site ENSAE-Dakar" content="Projet programmation WEB">
    <meta name="Danis JIOGUE" content="Etudiant ITS4">
  


    <!-- Pour accéder aux classes du bootstrap -->
    <link rel="stylesheet" href="../fichierCSS/bootstrap/css/bootstrap.min.css">
    <!-- Gestion des polices-->
    <link href="../fichierCSS/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!--Icon du dessus-->
    <link rel="shortcut icon" type="image/x-icon" href="../fichierImage/logo.png" />


    <!-- Ma propre feuille de style -->
    <link rel="stylesheet" type="text/css" href="../fichierCSS/style.css">
    <link href="../fichierCSS/policePersonnalise.css" rel="stylesheet" type="text/css">
    <link href="../fichierCSS/standard_style.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top" class="index">

  <!-- Menu de navigation -->
  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Regroupement des options d'affichage -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">BIENVENUE A ENSAE-Dakar</a>
            </div>

            <!-- Collecter les liens de navigation, les formulaires et autres contenus pour le défilement -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                      <a href="#objectif">Objectif de la formation</a>
          </li>
                    <li>
                        <a class="page-scroll" href="#administration">Membres de l'administration</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#QUESTIONNAIRE">DONNER VOTRE AVIS</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Entête  >
    <header>
        <div class="container" -->
             <div class="intro-text">
                <div id="carousel-appdev" class="carousel slide" data-ride="carousel">
                  <!-- Boutton de navigation -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-appdev" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-appdev" data-slide-to="1"></li>
                    <li data-target="#carousel-appdev" data-slide-to="2"></li>
                    <li data-target="#carousel-appdev" data-slide-to="3"></li>
                    <li data-target="#carousel-appdev" data-slide-to="4"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../fichierImage/garde0.jfif" alt="garde0" style="height: 600px">
                      <div class="carousel-caption">
                        Situation géographique de l'ENSAE
                      </div>
                    </div>
                    <div class="item ">
                      <img src="../fichierImage/page0.jpg" style=" width:1500px; height: 600px" alt="Visite Ministre">
                      <div class="carousel-caption">
                        Visite du Ministre de l'économie de la coopération et du plan
                      </div>
                    </div>
                    <div class="item ">
                      <img src="../fichierImage/page2.jpg" alt="Visite Ministre">
                      <div class="carousel-caption">
                        Visite du Ministre de l'économie de la coopération et du plan
                      </div>
                    </div>
                    <div class="item ">
                      <img src="../fichierImage/page1.jpg" alt="Visite à IFPRI" style="width:1500px; height: 600px">
                      <div class="carousel-caption">
                        Rencontre en ENSAE-Dakar et IFPRI
                      </div>
                    </div>
                    <div class="item ">
                      <img src="../fichierImage/page3.JPG" alt="Remise des diplômes" style="width:1500px; height: 600px">
                      <div class="carousel-caption">
                        Cérémonie Journée d'intégration
                    </div>
                  </div>
                  <div class="item ">
                      <img src="../fichierImage/page4.JPG" alt="Remise des diplômes" style="width:1500px; height: 600px">
                      <div class="carousel-caption">
                        Cérémonie Journée d'intégration
                    </div>
                  </div>
                   <center>
                     <a href="#Description" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                  </a> 
                  </center>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-appdev" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-appdev" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                  </a>
                  
                  
                </div>  
            </div>
        </div>    
    <!-- </header> -->
    

     <section id="objectifs" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">OBJECTIF DE LA FORMATION A L'ENSAE</h2>
                    <h3 class="section-subheading text-muted" style='text-align: justify;'>L’objectif général de la formation est de la mettre à la disposition du systèmes statistiques des pays Africain des cadres compétants, capables de concevoir et réaliser des enquêtes et recensement d'envergure national, intervenir dans le calcul des agrégats macroéconomiques.</h3>
                </div>
            </div>
   
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#reference" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../fichierImage/Image/image3.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Être une référence ...</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#aide" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../fichierImage/Image/image7.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>et un outil décisionnel ...</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#resultats" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../fichierImage/Image/image1.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Une formation orientée résultat ...</h4>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section id="QUESTIONNAIRE">
        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-12 col-md-8 col-sm-offset-2 col-md-offset-2">
                    <form role="form" method = "POST" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Merci de renseigner le formulaire de connexion
                                </h3>
                            </div>

                            <div class="panel-body">
                                <!-- <div class="row"> -->
                                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                        <div class="form-group">
                                            <label>Comment connaisez-vous l'ENSAE ?</label>
                                            <input type="text" name="connait" id="connait" class="form-control input-sm" maxlength="50"placeholder="Entrer votre réponse (maximum 50 caractères)">
                                        </div> 
                                    <!-- </div> -->

                                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                        <div class="form-group">
                                            <label>La formation à l'ENSAE vous passionne t'elle ?</label>
                                            <input type="radio" name="passion_formation" value="1" onclick="interet(this)" required="required"> OUI
                                            <input type="radio" name="passion_formation" value="2" onclick="interet(this)" required="required"> NON
                                        </div> 
                                        <div class="form-group">
                                            <input type="text" name="interesse_formation" id="interesse" class="form-control input-sm" style="display: none;"placeholder="Qu'est ce qui vous intéresse en particulier (maximum 50 caractères)?">
                                        </div> 
                                        <div class="form-group">
                                            <input type="text" name="pas_interesse" id="pas_interesse" class="form-control input-sm" style="display: none;"placeholder="Pourquoi (maximum 50 caractères)?">
                                        </div> 
                                    <!-- </div> -->

                                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                        <div class="form-group">
                                            <label>Pouvez-vous la conseiller à un proche ?</label>
                                            <input type="radio" name="conseil_proche" value="1" onclick="conseiller(this)" required="required"> OUI
                                            <input type="radio" name="conseil_proche" value="2" onclick="conseiller(this)" required="required"> NON
                                        </div>
                                    <!-- </div> -->
                                         <div class="form-group">
                                            <input type="text" name="pourquoi_conseil" id="conseil" class="form-control input-sm" style="display: none;"placeholder="Pourquoi (maximum 50 caractères)?">
                                        </div> 
                                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                        <div class="form-group">
                                            <label>Que connaissez-vous de l'ENSAE ?</label>
                                            <input type="text" name="connaissance" id="connaissance" class="form-control input-sm" placeholder="Entrez votre réponse (maximum 50 caractères)">
                                        </div> 
                                    <!-- </div>   -->

                                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                        <div class="form-group">
                                            <label>Avez vous un proche à l'ENSAE ?</label>
                                            <input type="radio" name="proche" value="1" onclick="connaissanc(this);" required="required"> OUI
                                            <input type="radio" name="proche" value="2" onclick="connaissanc(this);" required="required"> NON
                                        </div> 
                                    <!-- </div> -->

                                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                        <div class="form-group">
                                            <select name="profil_proche" id="profil_connaissance" style="display: none;">
                                                <option>-----Choisissez son profil-----</option>
                                                <option>etudiant</option>
                                                <option>administration</option>
                                            </select>
                                        </div> 
                                    <!-- </div> -->

                                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                        <div class="form-group">
                                            <label>Entrez un commentaire sur l'école</label>
                                            <input type="text" name="commentaire" id="commentaire" class="form-control input-sm" placeholder="Entrez votre réponse (maximum 100 caractères)">
                                        </div> 
                                    <!-- </div>      -->
                                <!-- </div> -->
                 
                            <input type="submit" name = "questionnaire" value="Envoyer vos reponses" class="btn btn-info btn-block">
                        </div>
                    </form>

                    <?php
                        include'connexion.php';
                        global $dataBase;

                        $q_ext = $dataBase->prepare("INSERT INTO `externe` (`email_externe`, `nom_externe`, `prenom_externe`, `date_connexion`) VALUES (:email_externe, :nom_externe, :prenom_externe, :date_connexion)");
                        $q_ext->execute([
                            'email_externe' => ''.$_SESSION['email'].'',
                            'nom_externe' => ''.$_SESSION['nomUser'].'',
                            'prenom_externe' => ''.$_SESSION['prenomUser'].'',
                            'date_connexion' => date('Y-m-d H:i:s')
                        ]);
                        
                        if(isset($_POST['questionnaire'])){

                            $q = $dataBase->prepare("INSERT INTO `questionnaire` (`email_externe`, `connnaissance_ENSAE`, `passion_formation`, `interesse_formation`, `pas_interesse_formation`, `conseil_proche`, `pourquoi_conseil`,`connaissance_classique`,`proche`,`profil_proche`,`commentaire`,`date_soumission`) VALUES (:email_externe, :connnaissance_ENSAE, :passion_formation, :interesse_formation, :pas_interesse_formation, :conseil_proche, :pourquoi_conseil, :connaissance_classique, :proche, :profil_proche, :commentaire, :date_soumission)");

                                //On lie chaque marqueur à une valeur :
                                $q->execute([
                                    'email_externe' => ''.$_SESSION['email'].'',
                                    'connnaissance_ENSAE' => ''.$_POST['connait'].'',
                                    'passion_formation' => ''.$_POST['passion_formation'].'',
                                    'interesse_formation' => ''.$_POST['interesse_formation'].'',
                                    'pas_interesse_formation' => ''.$_POST['pas_interesse'].'',
                                    'conseil_proche' => ''.$_POST['conseil_proche'].'',
                                    'pourquoi_conseil' => ''.$_POST['pourquoi_conseil'].'',
                                    'connaissance_classique' => ''.$_POST['connaissance'].'',
                                    'proche' => ''.$_POST['proche'].'',
                                    'profil_proche' => ''.$_POST['profil_proche'].'',
                                    'commentaire' => ''.$_POST['commentaire'].'',
                                    'date_soumission' => date('Y-m-d H:i:s')
                                    
                                ]);

                                if ($q) {
                                    ?>
                                        <script type="text/javascript">
                                            alert("Questionnaire soumis avec succès.\nL'équipe ENSAE vous remercie de votre participation.")
                                        </script>
                                    <?php
                                }
                                else{
                                     ?>
                                        <script type="text/javascript">
                                            alert("Une erreur est survenue lors de la soumission de vos réponses.\nMerci de bienvouloir ressayer.")
                                        </script>
                                    <?php
                                }

                        }

                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section cérémonie -->

    
    <footer>
        <div class="container" style="background-color: black">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright" style="color: white">Copyright &copy; Danis JIOGUE 2020</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/danis-jiogue-88a193136/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Guide méthodologique Projet Web</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    
    
    <div class="portfolio-modal modal fade" id="reference" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Détails -->
                            <h4>Une référence en matière travail sur les données</h4>
                            <p class="item-intro text-muted">Les produits de l'Ecole Nationale de la Statistique et de l'Analyse Economique sont réputés être de très bonne qualité. Ceci s'illustre par la confiance et le nombre sans cesse croissant de partenariat que l'école a avec les strutctures natioanles, sous-régionales, internationales et des étblissements de renomé internationale.</p>
                            <!-- <img class="img-responsive" src="../fichierImage/Image/image1.jpg" alt=""> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Décisionnel -->
    <div class="portfolio-modal modal fade" id="aide" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h4>Aide à la décision</h4>
                            <p style='text-align: justify'>Mettre à la disposition des décideurs des ressources humaines capables de mener des études qui collent le plus à la réalité avec des outils modernes de télécommunications.</p>
                            <!-- <img class="img-responsive img-centered" src="../fichierImage/Image/image2.jpg" alt=""> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Résultats -->
    <div class="portfolio-modal modal fade" id="resultats" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Détails -->
                            <h4>Résultats attendus</h4>
                            <p class="item-intro text-muted">La formation à l'ENSAE devrait pemerttre aux apprenants d'être des as dans le domaines de la statistique. En effet, avec le boom démographique auquel est confronté l'Afrique il est très important d'avoir des ressources humaines de qualités pour mener des études et donner des résultats qui reflètent le plus possible la réalité des populations. Ces données statistiques sont d'avantages importantes pour :</p>
                            <ul class="fa-ul" style='text-align: left'>
                                <li><i class="fa-li fa fa-spinner fa-spin"></i>Une bonne planification des dépenses de l'Etat ;</li>
                                <br>
                                <li><i class="fa-li fa fa-spinner fa-spin"></i>Permettre au pays d'être au rendez-vous sur les programmes arrêtés au niveau international telle que le programme de développement durable 2030 : les Objectifs du Développement Durable (ODD) ;</li>
                                <br>
                                <li><i class="fa-li fa fa-spinner fa-spin"></i>Facilité la comparaison entre les pays de mêmes profil ceci dans l'optique de se donner les obectifs sur le chemin à parcourir pour au moins égaler les autres ; </li>
                                <br>
                                <li><i class="fa-li fa fa-spinner fa-spin"></i>Concourir à une meilleure image du pays à l'international, ce qui pourrait aboutir à une hausse des Investissements Direct Etrangers.</li>
                                
                            </ul>
                            <!-- <img class="img-responsive img-centered" src="../fichierImage/Image/image3.jpg" alt=""> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Lien vers le javaScript -->
    
    <script type="text/javaScript" src="../fichierCSS/bootstrap/js/jquery-3.4.1.min.js" ></script>
    <script type="text/javaScript" src="../fichierCSS/bootstrap/js/bootstrap.min.js" ></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../fichierJavaScript/classie.js"></script>
    <script src="../fichierJavaScript/cbpAnimatedHeader.js"></script>

    <script src="../fichierJavaScript/jqBootstrapValidation.js"></script-->
    <script src="../fichierJavaScript/nous_contacter.js"></script>

    <!-- Thème personnalisé JavaScript -->
    <script src="../fichierJavaScript/accueil.js"></script>

</body>
</html>