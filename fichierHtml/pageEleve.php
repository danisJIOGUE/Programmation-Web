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
  <!-- Menu de navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Regroupement des options d'affichage -->
            <div class="navbar-header">
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information ENSAE<b class="caret"> </b></a>
                        <ul class="dropdown-menu">
                            <li ><a id="styledropdown" href="#objectifs" >Objectif de la formation</a></li>
                            <li><a href="#administration" id="styledropdown">Membres de l'administration</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Statistiques sur les utilisateurs externes<b class="caret"> </b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#stat_desc" id="styledropdown">Statistique Descriptives</a></li>
                            <li><a href="#stat_desc" id="styledropdown">Exporter au format csv</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informations personnelles<b class="caret"> </b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#informations_personnelle" id="styledropdown">Gérer ses informations</a></li>
                            <li><a href="#deconnexion" id="styledropdown">Se déconnecter</a></li>
                        </ul>
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

    <section id="administration">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Présentation du personnel de l'ENSAE</h2>
                    <h3 class="section-subheading text-muted">L'ENSAE ancienement reconnu sous l'appelation ENSA, à vu le jour en Octobre 2008. Cette école a des étudiants provenant d'origines diverses. Pour le compte de l'anné scolaire 2019 - 2020, 15 nationalités Africaines sont représentées au sein de l'ENSAE.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive fa-2x" src="" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Directeur</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted" style='text-align: justify'>M. Abdou DIOUF : directeur de l'ENSAE. Il est entré en service depuis octobre 2017. </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <!-- <img class="img-circle img-responsive" src="" alt=""> -->
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Cordinateur des études</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted" style='text-align: justify'>Ce poste est assuré depuis 2008 par M. Mamadou DANSHOKHO. Qui est un ancien des écoles du RESA</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <!-- <img class="img-circle img-responsive" src="" alt=""> -->
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Dr Souleymane FOFANA</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted" style='text-align: justify'>Responsable de la filière des Ingénieurs des Travaux Statistiques (ITS). Il a obtenu son Doctorat en 2005 spécialité des probabilités appliqué.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <!-- <img class="img-circle img-responsive" src="Images/jus.jpg" alt=""> -->
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">M. Idrissa DIAGNE</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted" style='text-align: justify'>Responsable de la formation des Ingénieurs des Statiscien Economistes. Il est un ressortissant de l'ENSAE promotion 2011 et actuellement en parallèle avec ses activités à l'ENSAE, il poursuit un programme de Doctorat à l'université de LAVAL.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <!-- <img class="img-circle img-responsive" src="Images/logisticm.jpg" alt=""> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Informations personnelles -->
    <section id="stat_desc">
        <div class="container">
            <?php
                include'connexion.php';
                global $dataBase;
                // $info = $dataBase->prepare("SELECT * FROM `etudiant` WHERE `matricule_etudiant`=:matricule");
                // $info->execute([
                //     'matricule' => $_SESSION['matricule_etudiant']
                // ]);

                // $info_et = $info->fetch();
                // var_dump($_SESSION);
                // var_dump($info_et);
                // die;
                $res_qstat = $dataBase->query("SELECT COUNT(*), COUNT(DISTINCT `email_externe`) FROM `questionnaire`");
                while ($stat = $res_qstat->fetch()) {
                    $questionnaire = $stat['0'];
                    $questionnaire_unique = $stat['1'];
                }

                $res_stat = $dataBase->query("SELECT COUNT(*), COUNT(DISTINCT `email_externe`) FROM `externe`");
                while ($stat_ext = $res_stat->fetch()) {
                    $questionnaire_ext = $stat_ext['0'];
                    $questionnaire_unique_ext = $stat_ext['1'];
                }
            ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> Appréhension des usagers à propos de l'ENSAE-Dakar</h2>
                    <h3 class="section-subheading text-muted">Avoir une information sur les résultat de enquête web sur le niveau de connaisance et l'intérêt que les usagers accordent à l'ENSAE-Dakar</h3>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <strong><h3>Statisques sur les soumissions de questionnaires et utilisateurs externes</h3></strong>
                      <!-- <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Nombre d'utilisateurs externe dépuis la mise en ligne du site</th>
                      <td><?=$questionnaire_ext?></td> 
                    </tr>
                    <tr>
                      <th scope="row">Nombre unique d'utilisateurs externe dépuis la mise en ligne du site</th>
                      <td><?=$questionnaire_unique_ext?></td> 
                    </tr>
                    <tr>
                      <th scope="row">Nombre de questionnaire soumis </th>
                      <td><?=$questionnaire?></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Nombre de questionnaire unique soumis</th>
                      <td><?=$questionnaire_unique?></td>
                    </tr>
                  </tbody>
                </table>
                <form cmethod="POST" action="export.php">
                    <acronym title="Exporter les résultats de l'enquête web au format csv"><input type="submit" name="export_csv" value="Exporter CSV" style="background-color: lightgreen; border:solid 3px; border-radius:5px"></acronym>
                </form>
            </div>
        </div>
    </section>

    <section id="informations_personnelle">
        <div class="container">
          <?php

              $q_information = $dataBase->prepare("SELECT * FROM `etudiant` WHERE `matricule_etudiant` = :matricule_etudiant");
              $q_information->execute([
                  'matricule_etudiant' => $_SESSION['matriculeEtudiant'],
              ]);
              $result_info = $q_information->fetch();
              if (empty($result_info['date_connexion']) || $result_info['password_etd'] == '12345') {
                ?>
                    <script type="text/javascript">
                        alert("Merci de bienvouloir vous rendre dans la section Informations personnelles pour mettre à jour vos informations. En l'occurence votre mot de passe. \nLe cas écheant, vos prochaines connexion ne seront pas valides.");
                    </script>
                <?php
              }
                
          ?>
          <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Vos informations personnelles</h2>
                    <h3 class="section-subheading text-muted">Vous avez la possibilité de mettre à jour vos informations strictement personnelles. Ceux relatives à l'aspect académiques sont du ressort de l'administration. Toutes fois, vous avez la possibilité de savoir quel membre de l'administration à modifier vos informations.</h3>
                </div>
          <form method="POST" action="">
              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <?php
                      echo "<img src='../fichierImage/photoEleve/".$result_info['photo_etudiant']."' style='width:200px;height:150px; padding-left:50px'>";
                  ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="nom">Nom</label>
                  <input type="Nom" class="form-control"  name="nom" id="nom" value="<?=$result_info['nom_etudiant']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="prenom">Prénom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom" value="<?=$result_info['prenom_etudiant']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="mail">Adresse email</label>
                  <input type="email" class="form-control" id="mail" name="mail" value="<?=$result_info['email_etudiant']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="matricule">Matricule</label>
                  <input type="text" class="form-control" name="matricule" readonly="true" id="matricule" value="<?=$result_info['matricule_etudiant']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="naissance">Date de naissance</label>
                  <input type="text" class="form-control" name="naissance" id="naissance" value="<?=$result_info['date_naissance_etud']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="nationalite">Nationalité</label>
                  <input type="text" class="form-control" name="nationalite" id="nationalite" value="<?=$result_info['nationalite_etud']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="classe">Classe</label>
                  <input type="text" class="form-control" name="classe" readonly="true" id="classe" value="<?=$result_info['classe_etudiant']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="aes">Poste au sein de l'Amicale des étudiants</label>
                  <input type="text" class="form-control" name="aes" id="aes" value="<?=$result_info['poste_etudiant_amicale']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="statutClasse">Statut de l'étudiant en classe</label>
                  <input type="text" class="form-control" name="statutClasse" id="statutClasse" value="<?=$result_info['statut_etudiant_classe']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="connexion">Date & heure de dernière connexion</label>
                  <input type="text" class="form-control" id="statut_classe" readonly="true" name="statut_classe" value="<?=$result_info['date_connexion']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="modif">Date & heure de la dernière modification</label>
                  <input type="text" class="form-control" name="modif" id="modif" readonly="true" value="<?=$result_info['date_modification']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="personne">l'identifiant de la dernière personne à modifier vos informations</label>
                  <input type="text" class="form-control" id="personne" name="personne" readonly="true" value="<?=$result_info['id_user']?>">
                </div>
                <div class="form-group col-md-6">
                  <acronym title="Entrer le mot de passe normal"><label for="pwd">Votre mot de passe</label></acronym>
                  <input type="text" class="form-control" name="pwd" id="pwd" value="<?=$result_info['password_etd']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="tel">Votre numéro de téléphone</label>
                  <input type="number" class="form-control" id="tel" name="tel" value="<?=$result_info['tel_etudiant']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="supprime">Vous avez été supprimé de la liste des élèves</label>
                  <input type="text" class="form-control" id="supprime" name="supprime" readonly="true" value="<?=$result_info['est_supprime']?>">
                </div>
                
              </div>

              <div class="form-group">
                  <label for="adresse">votre adresse à Dakar</label>
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="1234 Main St" value="<?=$result_info['adresse_etud']?>">
                
              </div>
              
              <input type="submit" name="modifie_info" onclick="modifie_infos()" class="btn btn-primary" value="Valider la modification">
              <!-- <button type="submit" name="modifie_info" onclick="modifie_infos"  class="btn btn-primary"></button> -->
            </form>

            <?php
                if(isset($_POST['modifie_info'])){
                  //Hashage ddu mot de passe
                  $options = [
                      'cost' => 12,
                  ];
                  $pwd_etd = password_hash($_POST['pwd'], PASSWORD_BCRYPT, $options);

                  //Sauvegarde du mot de passe hahé dans la table connexion
                  $q_conn = $dataBase->prepare("UPDATE  `connexion2` SET `password_2`=:pass WHERE `matricule` = :matricule");
                  $q_conn->execute([
                    'pass' => ''.$pwd_etd.'',
                    'matricule'=> $_SESSION['matriculeEtudiant']]);

                  //Sauvegarde des infos de l'étudiant
                  $q_sauv = $dataBase->prepare("UPDATE `etudiant` SET `nom_etudiant`=:nom_etudiant, `prenom_etudiant`=:prenom_etudiant, `date_naissance_etud`=:date_naissance_etud, `nationalite_etud`=:nationalite_etud, `poste_etudiant_amicale` = :poste, `statut_etudiant_classe`=:statut, `date_connexion`=:date_connexion, `password_etd`=:password_etd, `email_etudiant`=:email_etudiant, `tel_etudiant`=:tel_etudiant, `adresse_etud`=:adresse_etud WHERE `matricule_etudiant`=:matricule_etudiant");

                        $q_sauv->execute([
                              'nom_etudiant' => ''.$_POST['nom'].'',
                              'prenom_etudiant' => ''.$_POST['prenom'].'',
                              'date_naissance_etud' => ''.$_POST['naissance'].'',
                              'nationalite_etud'=> ''.$_POST['nationalite'].'',
                              'statut' => ''.$_POST['statutClasse'].'',
                              'poste' => ''.$_POST['aes'].'',
                              'date_connexion' => date('Y-m-d H:i:s'),
                              'password_etd' => ''.$pwd_etd.'',
                              'email_etudiant' => ''.$_POST['mail'].'',
                              'tel_etudiant' => $_POST['tel'],
                              'adresse_etud' => ''.$_POST['adresse'].'',
                              'matricule_etudiant' => $_SESSION['matriculeEtudiant']
                          ]);
                        if ($q_conn) {
                          if($q_sauv){
                            ?>
                                 <script type="text/javascript">
                                     alert("Informations update avec succès");
                                 </script>
                            <?php
                          }
                          else{
                            ?>
                                 <script type="text/javascript">
                                     alert("Une erreur est survenue lors du hashage de votre mot de passe. \n Merci de ressayer l'opération.");
                                 </script>
                            <?php
                          }   
                        }
                }
            ?>

          
        </div>
    </section>

    

   

    <!-- Section cérémonie -->
    <form method="POST" id="deconnexion">
            <div class="row">
                <div class=" col-sm-6">
                    <input type="submit" name="deconnexion" class="btn  btn-primary  btn-lg" value="Se déconnecter">    
                </div>
                
            </div>
             

            <?php
                if(isset($_POST['deconnexion'])){

                    session_destroy();
                    ?>
                        <script>
                            window.location.href=('../index.php');
                        </script>
                    <?php
                }
            ?>           
        </form>
    
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