<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">GESTION DES EUTIDIANTS DE L'ENSAE</h2>
                    <!--h3 class="section-subheading text-muted">La seule limite </h3-->
                </div>
            </div>
            <div class="container jumbotron text-center">
                <h3>FORMULAIRE D'AJOUT DE L'ETUDIANT </h3>          
                <button type='Boutton' class="btn btn-success" data-toggle="modal" data-target="#loginModal_r">Entrer les informations de l'étudiant</button>
            </div>
            <div class="modal fade" role="dialog" id="loginModal_r">
                <div class="modal-dialog">
                    <form role="form" method="POST" enctype="multipart/form-data" action="AjoutEtudiant_Admin.php">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">FORMULAIRE D'AJOUT</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="nomEtudiant" required="required" id="nomEtudiant" placeholder="Entrer le nom">
                                    <span id="nom_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prenomEtudiant" required="required" id="prenomEtudiant" placeholder="Entrer le prénom" >
                                    <span id="prenom_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="DateNaissanceEtudiant" required="required" id="DateNaissanceEtudiant" placeholder="Entrer la date de naissance" >
                                    <span id="DateNaiss_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="matriculeEtudiant" required="required" id="matriculeEtudiant" placeholder="Entrer le matricule" >
                                    <span id="matricule_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="NationalitéEtudiant" required="required" id="NationalitéEtudiant" placeholder="Entrer la nationalité" >
                                    <span id="nationalite_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="PhotoEtudiant" required="required" id="PhotoEtudiant" placeholder="Choisir la photo" >
                                    <span id="nationalite_manquant"></span>
                                </div>
                                <div class="form-group"> 
                                    <select required="true" required="required" name="classeEtudiant" id="classeEtudiant">
                                        <span id="classe_manquant"></span>
                                        <option>-----Choisissez La classe de l'étudiant-----</option>
                                        <option>ITS1</option>
                                        <option>ITS2</option>
                                        <option>ITS3</option>
                                        <option>ITS4</option>
                                        <option>ISE1</option>
                                        <option>ISE2</option>
                                        <option>ISE3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="submit" name="Submit" id="valideAjout" value="Ajouter" class="btn btn-success" data-toggle="modal" data-target="#login2" onclick="envoyer()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Importation de la liste des étudiants -->
            
            <form action="" method="POST" enctype="multipart/form-data" id="formulaire_e">
                <table>
                    <tr>
                        <td><acronym title="Rechercher suivant le nom des étudiants" style="background-color: green">Rechercher  :   </acronym></td>
                        <td><input type="text" name="mot_cle_e" id="mot_cle_e" > </td>
                        <td><input type="submit" name="chercher" value="chercher"></td>
                    </tr>
                </table>
                <br>          
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">NOM</th>
                          <th scope="col">PRENOM</th>
                          <th scope="col">MATRICULE</th>
                          <th scope="col">CLASSE</th>
                          <th scope="col">PHOTO</th>
                          <th colspan='3'></th>
                        </tr>
                      </thead>
                    <?php
                        if(isset($_POST['mot_cle_e'])){
                            $q_cherche = $dataBase->query("SELECT * FROM `etudiant` WHERE `est_supprime` = 'NON' AND `nom_etudiant` like '%".$_POST['mot_cle_e']."%' ") ;
                            if($q_cherche->rowCount() == 0){
                                $q_cherche = $dataBase->query("SELECT * FROM `etudiant` WHERE `est_supprime` = 'NON' AND CONCAT(`nom_etudiant`,`prenom_etudiant`) like '%".$_POST['mot_cle_e']."%' ") ;   
                            } 

                            if($q_cherche->rowCount() > 0){
                                while($etud = $q_cherche->fetch()){
                                    echo"<tr>
                                        <td>".utf8_encode($etud["nom_etudiant"])."</td>
                                        <td>".$etud["prenom_etudiant"]."</td>
                                        <td>". utf8_encode($etud["matricule_etudiant"])."</td>
                                        <td>". utf8_encode($etud["classe_etudiant"])."</td>
                                        <td><img src='../fichierImage/photoEleve/".$etud['photo_etudiant']."' style='width:40px;height:40px;'></td>
                                        <td><a href='?codeM=".$etud["matricule_etudiant"]."&action_et=M'>Modifier</a></td>
                                        <td>
                                              <a href='?codeM=".$etud["matricule_etudiant"]."&action_et=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                            </td>
                                            <td>
                                              <a href='?codeM=".$etud["matricule_etudiant"]."&action_et=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                            </td>
                                      </tr>"; 
                                      ?>
                                        <script>
                                            document.getElementById("mot_cle_e").focus();
                                        </script>
                                    <?php   
                                }
                            }
                            else{
                                ?>
                                    <script>
                                        alert("Aucun resultat");
                                        document.getElementById("mot_cle_e").focus();

                                    </script>
                                <?php
                                $qs = $dataBase->query("SELECT * FROM `etudiant` WHERE `est_supprime` = 'NON' ORDER BY `nom_etudiant` ASC LIMIT 5") ;
                            while($etudiant = $qs->fetch()){
                                echo"<tr>
                                    <td>".utf8_encode($etudiant["nom_etudiant"])."</td>
                                    <td>".$etudiant["prenom_etudiant"]."</td>
                                    <td>". utf8_encode($etudiant["matricule_etudiant"])."</td>
                                    <td>". utf8_encode($etudiant["classe_etudiant"])."</td>
                                    <td><img src='../fichierImage/photoEleve/".$etudiant['photo_etudiant']."' style='width:40px;height:40px;''></td>
                                    <td><a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=M'>Modifier</a></td>
                                    <td>
                                              <a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                            </td>
                                            <td>
                                              <a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                            </td>
                                  </tr>";   
                                }   
                            }                           
                            
                        }
                        else if(isset($_POST['afficheSupprime_e'])){
                            $q_affichesupprime = $dataBase->query("SELECT * FROM `etudiant` WHERE `est_supprime` = 'oui' ORDER BY `nom_etudiant` ASC") ;

                            if ($q_affichesupprime->rowCount() > 0) {
                                while($etudiant_s = $q_affichesupprime->fetch()){
                                    echo"<tr>
                                        <td>".utf8_encode($etudiant_s["nom_etudiant"])."</td>
                                        <td>".$etudiant_s["prenom_etudiant"]."</td>
                                        <td>". utf8_encode($etudiant_s["matricule_etudiant"])."</td>
                                        <td>". utf8_encode($etudiant_s["classe_etudiant"])."</td>
                                        <td><img src='../fichierImage/photoEleve/".$etudiant_s['photo_etudiant']."' style='width:40px;height:40px;''></td>
                                        <td><a href='?codeM=".$etudiant_s["matricule_etudiant"]."&action_et=M'>Modifier</a></td>
                                        <td>
                                                  <a href='?codeM=".$etudiant_s["matricule_etudiant"]."&action_et=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                                </td>
                                                <td>
                                                  <a href='?codeM=".$etudiant_s["matricule_etudiant"]."&action_et=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                                </td>
                                      </tr>"; 
                                      ?>
                                    <script>
                                        document.getElementById("mot_cle_e").focus();
                                    </script>
                                    <?php  
                                }
                            }
                            else{
                                ?>
                                    <script>
                                        alert("Aucun resultat");
                                        document.getElementById("mot_cle_e").focus();

                                    </script>
                                <?php
                                $qs = $dataBase->query("SELECT * FROM `etudiant` WHERE `est_supprime` = 'NON' ORDER BY `nom_etudiant` ASC LIMIT 5") ;
                            while($etudiant = $qs->fetch()){
                                echo"<tr>
                                    <td>".utf8_encode($etudiant["nom_etudiant"])."</td>
                                    <td>".$etudiant["prenom_etudiant"]."</td>
                                    <td>". utf8_encode($etudiant["matricule_etudiant"])."</td>
                                    <td>". utf8_encode($etudiant["classe_etudiant"])."</td>
                                    <td><img src='../fichierImage/photoEleve/".$etudiant['photo_etudiant']."' style='width:40px;height:40px;''></td>
                                    <td><a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=M'>Modifier</a></td>
                                    <td>
                                              <a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                            </td>
                                            <td>
                                              <a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                            </td>
                                  </tr>";   
                                }
                            }
                              
                        }
                        else{

                            $qs = $dataBase->query("SELECT * FROM `etudiant` WHERE `est_supprime` = 'NON' ORDER BY `nom_etudiant` ASC LIMIT 5") ;
                            while($etudiant = $qs->fetch()){
                                echo"<tr>
                                    <td>".utf8_encode($etudiant["nom_etudiant"])."</td>
                                    <td>".$etudiant["prenom_etudiant"]."</td>
                                    <td>". utf8_encode($etudiant["matricule_etudiant"])."</td>
                                    <td>". utf8_encode($etudiant["classe_etudiant"])."</td>
                                    <td><img src='../fichierImage/photoEleve/".$etudiant['photo_etudiant']."' style='width:40px;height:40px;''></td>
                                    <td><a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=M'>Modifier</a></td>
                                    <td>
                                              <a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                            </td>
                                            <td>
                                              <a href='?codeM=".$etudiant["matricule_etudiant"]."&action_et=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                            </td>
                                  </tr>";   
                            }   
                        }

                        
                    ?>        
                </table>
            </form>
            <br>

            <form method="POST" action_et="">
                <table>
                    <tr>
                        <td><acronym title="afficher les étudiants qui ont été supprimé"><input type="submit" name="afficheSupprime_e" value="AFFICHER" style="border-radius: 5px; border: solid; background-color: green"></acronym></td>
                    </tr>
                </table>
            </form>
            <?php 



                if (isset($_GET["codeM"]) && isset( $_GET["action_et"] )) {
                    if ($_GET["action_et"] == "SL") //Suppression
                    {
                        //=========DEBUT SUPPRESSION
                        $querySup = "UPDATE `etudiant` SET `id_user`=:id_user,`date_modification`=:date_modification,`est_supprime`=:est_supprime WHERE `matricule_etudiant`=:matricule_etudiant"; //suppression logique
                        $result_sup = $dataBase->prepare($querySup);

                        $result_sup->execute([
                            'id_user' => $_SESSION['matriculeResponsable'],
                            'date_modification' => date('Y-m-d H:i:s'),
                            'est_supprime' => 'oui',
                            'matricule_etudiant' => $_GET['codeM']
                        ]);

                        if ($result_sup) 
                        {
                            ?>
                                <script > alert('Etudiant bien supprimé');</script>
                            <?php
                        }
                        //=========FIN SUPPRESSION
                    }
                    else if($_GET['action_et'] == "SP"){
                        $q_con_sup = $dataBase->prepare("DELETE FROM `connexion2` WHERE `matricule`=:matricule_etudiant");
                        $q_con_sup->execute([
                            'matricule_etudiant' => $_GET['codeM']
                        ]);

                        $querySup_p = "DELETE FROM `etudiant` WHERE `matricule_etudiant`=:matricule_etudiant"; //suppression logique
                        $result_sup_p = $dataBase->prepare($querySup_p);

                        $result_sup_p->execute([
                            'matricule_etudiant' => $_GET['codeM']
                        ]);

                        if ($result_sup_p) 
                        {  
                            if($q_con_sup){
                                ?>
                                    <script > 
                                        alert("etudiant bien supprimé.\n Il n'est plus dans la base de donnée");
                                        window.location(pagesuperAdmin.php);
                                    </script>
                                <?php
                            } 
                        }
                    }
                    else if($_GET['action_et'] == 'M') //%ODIFICATION
                    {
                        $queryM = "SELECT * FROM `etudiant` WHERE `matricule_etudiant` = :matricule_etudiant ";
                        $result_M = $dataBase->prepare($queryM);
                        $result_M->execute([
                            'matricule_etudiant' => $_GET['codeM']
                        ]);
                        if ($result_M) 
                        {
                            
                            while($etd = $result_M->fetch()){
                                
                                echo 
                                    '<div class="row centered-form">
                                    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                                    <form role="form" method="POST" id="form_modif">
                                    <div class="panel panel-default" id="boite" style="height:375px">
                                    <div class="panel-heading" id="boite_cor" style="height:50px">
                                        <h3 class="panel-title"> 
                                            MODIFICATIONS DES INFORMATIONS
                                        </h3>
                                    </div>
                                
                                    <div class="panel-body"  id="boite_body" style="height:0px">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Matricule</label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                   <input type="text" name="matricule_etudiant_m" id="matricule_etudiant_m" class="form-control input-sm"  readonly="true" value = "' .$etd['matricule_etudiant']. '">
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Nom Etudiant : </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" id="name" name="nom_etudiant_m" id="nom_etudiant_m" class="form-control input-sm"  value = "' .$etd['nom_etudiant']. '">
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Prénom Etudiant : </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="prenom_etudiant_m" id="prenom_etudiant_m" class="form-control input-sm" value = "' .$etd['prenom_etudiant']. '">
                                                </div> 
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Date Naissance : </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="date_naissance_etud_m" id="date_naissance_etud_m" class="form-control input-sm" value = "' .$etd['date_naissance_etud']. '">
                                                </div> 
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Nationalité Etudiant: </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="nationalite_etud_m" id="nationalite_etud_m" class="form-control input-sm" value = "' .$etd['nationalite_etud']. '">
                                                </div> 
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Classe Etudiant: </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="classe_etudiant_m" id="classe_etudiant_m" class="form-control input-sm" value = "' .$etd['classe_etudiant']. '">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name = "modifie_etudiant" value="MODIFIER" class="btn btn-info btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                        ';
                        ?>
                                    <script>
                                        document.getElementById("name").focus();

                                        // alert("etudiant");
                                    </script>
                                <?php
                            }
                        
                        }
                        else
                        {
                            ?>
                                <script>
                                    alert("erreur de selection de l'étudiant")
                                    document.getElementById('boite').style.height='0px'
                                </script>

                            <?php

                        }
                    
                    }
                }

                if(isset($_POST['modifie_etudiant'])){
                    
                    $queryModif = "UPDATE `etudiant` SET `nom_etudiant`=:nom_etudiant, `prenom_etudiant`=:prenom_etudiant, `date_naissance_etud`=:date_naissance_etud, `nationalite_etud`=:nationalite_etud, `classe_etudiant`=:classe_etudiant, `id_user`=:id_user,`date_modification`=:date_modification WHERE `matricule_etudiant`=:matricule_etudiant"; //suppression logique
                        $result_modif = $dataBase->prepare($queryModif);

                        $result_modif->execute([
                            'nom_etudiant' => ''.$_POST['nom_etudiant_m'].'',
                            'prenom_etudiant' => ''.$_POST['prenom_etudiant_m'].'',
                            'date_naissance_etud' => ''.$_POST['date_naissance_etud_m'].'',
                            'nationalite_etud'=> ''.$_POST['nationalite_etud_m'].'',
                            'classe_etudiant' => ''.$_POST['classe_etudiant_m'].'',
                            'id_user' => $_SESSION['matriculeResponsable'],
                            'date_modification' => date('Y-m-d H:i:s'),
                            'matricule_etudiant' => $_POST['matricule_etudiant_m']
                        ]);

                        if ($result_modif) 
                        {
                            ?>

                                <script > 
                                    alert('Etudiant bien modifié');
                                    document.getElementById('boite').style.height='0px';

                                </script>

                            <?php
                        }
                }
            ?>
        </div>

</body>
</html>