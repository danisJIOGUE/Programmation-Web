<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">GESTION DES MEMBRES DE L'ADMINISTRATION</h2>
                    <!--h3 class="section-subheading text-muted">La seule limite </h3-->
                </div>
            </div>
            <div class="container jumbotron text-center">
                <h3>FORMULAIRE D'AJOUT D'UN MEMBRE DE L'ADMINISTRATION </h3>          
                <button type='Boutton' class="btn btn-success" data-toggle="modal" data-target="#loginModal">Entrer les informations</button>
            </div>
            <div class="modal fade" role="dialog" id="loginModal" >
                <div class="modal-dialog">
                    <form role="form" method="POST" enctype="multipart/form-data" action="AjoutResp.php">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">FORMULAIRE D'AJOUT</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="nomresp" required="required" id="nomresp" placeholder="Entrer le nom">
                                    <span id="nom_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prenomresp" required="required" id="prenomresp" placeholder="Entrer le prénom" >
                                    <span id="prenom_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" required="required" id="email" placeholder="Entrer l'adresse mail" >
                                    <span id="prenom_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="matriculeresp" required="required" id="matriculeresp" placeholder="Entrer le matricule" >
                                    <span id="matricule_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="poste" required="required" id="poste" placeholder="Entrer le poste" >
                                    <span id="poste_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Nationalitéresp" required="required" id="Nationalitéresp" placeholder="Entrer la nationalité" >
                                    <span id="nationalite_manquant"></span>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="Photoresp" required="required" id="Photoresp" placeholder="Choisir la photo" >
                                    <span id="nationalite_manquant"></span>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="submit" name="Submit" id="valideAjout" value="Ajouter" class="btn btn-success" data-toggle="modal" data-target="#login2" onclick="envoyer()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <form action="" method="POST" enctype="multipart/form-data" id="formulaire">
                <table>
                    <tr>
                        <td><acronym title="Rechercher suivant le nom des étudiants" style="background-color: green">Rechercher  :   </acronym></td>
                        <td><input type="text" name="mot_cle" id="mot_cle" ></td>
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
                          <th scope="col">POSTE</th>
                          <th scope="col">PHOTO</th>
                          <th colspan='3'></th>
                        </tr>
                      </thead>
                    <?php
                        
                        
                        if(isset($_POST['mot_cle'])){
                            $q_cherche = $dataBase->query("SELECT * FROM `responsable` WHERE `est_supprime` = 'NON' AND `nom_responsable` like '%".$_POST['mot_cle']."%' ") ;
                            if($q_cherche->rowCount() == 0){
                                $q_cherche = $dataBase->query("SELECT * FROM `responsable` WHERE `est_supprime` = 'NON' AND CONCAT(`nom_responsable`,`prenom_responsable`) like '%".$_POST['mot_cle']."%' ") ;   
                            } 

                            if($q_cherche->rowCount() > 0){
                                while($resp = $q_cherche->fetch()){
                                    echo"<tr>
                                        <td>".utf8_encode($resp["nom_responsable"])."</td>
                                        <td>".$resp["prenom_responsable"]."</td>
                                        <td>". utf8_encode($resp["matricule_responsable"])."</td>
                                        <td>". utf8_encode($resp["poste_responsable"])."</td>
                                        <td><img src='../fichierImage/photoEleve/".$resp['photo_responsable']."' style='width:40px;height:40px;'></td>
                                        <td><a href='?codeM=".$resp["matricule_responsable"]."&action=M'>Modifier</a></td>
                                        <td>
                                          <a href='?codeM=".$resp["matricule_responsable"]."&action=SL' onclick=\"return confirm('Etes-vous certain d'Effectuer une suppression logique ?');\">Suppression Logique</a>
                                        </td>
                                        <td>
                                          <a href='?codeM=".$resp["matricule_responsable"]."&action=SP' onclick=\"return confirm('Etes-vous certain de vouloir d'éffectuer une suppression physique ?');\">Suppression physique</a>
                                        </td>
                                      </tr>"; 
                                      ?>
                                        <script>
                                            document.getElementById("mot_cle").focus();
                                        </script>
                                    <?php   
                                }
                            }
                            else {
                                ?>
                                    <script>
                                        alert("Aucun resultat.\n retour à l'affichage par défaut à savoir les responsables valides");
                                        document.getElementById("mot_cle").focus();

                                    </script>
                                <?php

                                $qs = $dataBase->query("SELECT * FROM `responsable` WHERE `est_supprime` = 'NON' ORDER BY `nom_responsable` ASC LIMIT 5") ;
                                while($resp = $qs->fetch()){
                                    echo"<tr>
                                            <td>".utf8_encode($resp["nom_responsable"])."</td>
                                            <td>".$resp["prenom_responsable"]."</td>
                                            <td>". utf8_encode($resp["matricule_responsable"])."</td>
                                            <td>". utf8_encode($resp["poste_responsable"])."</td>
                                            <td><img src='../fichierImage/photoEleve/".$resp['photo_responsable']."' style='width:40px;height:40px;'></td>
                                            <td><a href='?codeM=".$resp["matricule_responsable"]."&action=M'>Modifier</a></td>
                                            <td>
                                              <a href='?codeM=".$resp["matricule_responsable"]."&action=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                            </td>
                                            <td>
                                              <a href='?codeM=".$resp["matricule_responsable"]."&action=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                            </td>
                                        </tr>"; 
                                }
                            }                           
                            
                        }
                        else if(isset($_POST['afficheSupprime'])){
                            $q_affichesupprime = $dataBase->query("SELECT * FROM `responsable` WHERE `est_supprime` = 'oui' ORDER BY `nom_responsable` ASC") ;
                            if($q_affichesupprime->rowCount() > 0){
                                while($resp_s = $q_affichesupprime->fetch()){
                                    echo"<tr>
                                            <td>".utf8_encode($resp_s["nom_responsable"])."</td>
                                            <td>".$resp_s["prenom_responsable"]."</td>
                                            <td>". utf8_encode($resp_s["matricule_responsable"])."</td>
                                            <td>". utf8_encode($resp_s["poste_responsable"])."</td>
                                            <td><img src='../fichierImage/photoEleve/".$resp_s['photo_responsable']."' style='width:40px;height:40px;'></td>
                                            <td><a href='?codeM=".$resp_s["matricule_responsable"]."&action=M'>Modifier</a></td>
                                            
                                            <td>
                                              <a href='?codeM=".$resp_s["matricule_responsable"]."&action=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Supprimer</a>
                                            </td>
                                          </tr>";  
                                      ?>
                                    <script>
                                        document.getElementById("mot_cle").focus();
                                    </script>
                                    <?php  
                                }
                            }
                            else{
                                 
                                ?>
                                    <script>
                                        alert("Aucun resultat.\n retour à l'affichage par défaut à savoir les responsables valides");
                                        document.getElementById("mot_cle").focus();

                                    </script>
                                <?php

                                $qs = $dataBase->query("SELECT * FROM `responsable` WHERE `est_supprime` = 'NON' ORDER BY `nom_responsable` ASC LIMIT 5") ;
                                while($resp = $qs->fetch()){
                                    echo"<tr>
                                            <td>".utf8_encode($resp["nom_responsable"])."</td>
                                            <td>".$resp["prenom_responsable"]."</td>
                                            <td>". utf8_encode($resp["matricule_responsable"])."</td>
                                            <td>". utf8_encode($resp["poste_responsable"])."</td>
                                            <td><img src='../fichierImage/photoEleve/".$resp['photo_responsable']."' style='width:40px;height:40px;'></td>
                                            <td><a href='?codeM=".$resp["matricule_responsable"]."&action=M'>Modifier</a></td>
                                            <td>
                                              <a href='?codeM=".$resp["matricule_responsable"]."&action=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                            </td>
                                            <td>
                                              <a href='?codeM=".$resp["matricule_responsable"]."&action=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                            </td>
                                        </tr>"; 
                                }
                            }
                             
                        }
                        else{

                            $qs = $dataBase->query("SELECT * FROM `responsable` WHERE `est_supprime` = 'NON' ORDER BY `nom_responsable` ASC LIMIT 5") ;
                            while($resp = $qs->fetch()){
                                echo"<tr>
                                        <td>".utf8_encode($resp["nom_responsable"])."</td>
                                        <td>".$resp["prenom_responsable"]."</td>
                                        <td>". utf8_encode($resp["matricule_responsable"])."</td>
                                        <td>". utf8_encode($resp["poste_responsable"])."</td>
                                        <td><img src='../fichierImage/photoEleve/".$resp['photo_responsable']."' style='width:40px;height:40px;'></td>
                                        <td><a href='?codeM=".$resp["matricule_responsable"]."&action=M'>Modifier</a></td>
                                        <td>
                                          <a href='?codeM=".$resp["matricule_responsable"]."&action=SL' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression logique ?');\">Suppression logique</a>
                                        </td>
                                        <td>
                                          <a href='?codeM=".$resp["matricule_responsable"]."&action=SP' onclick=\"return confirm('Etes-vous certain de vouloir effectuer une suppression physique ?');\">Suppression physique</a>
                                        </td>
                                      </tr>";    
                            }   
                        }   
                    ?>        
                </table>
            </form>
            <br>

            <form method="POST" action="">
                <table>
                    <tr>
                        <td><acronym title="afficher les responsables qui ont été supprimé de façon logique"><input type="submit" name="afficheSupprime" value="AFFICHER" style="border-radius: 5px; border: solid; background-color: green"></acronym></td>
                    </tr>
                </table>
            </form>
            <?php 



                if (isset($_GET["codeM"]) && isset( $_GET["action"] )) {
                    if ($_GET["action"] == "SL") //Suppression
                    {
                        //=========DEBUT SUPPRESSION

                        $querySup = "UPDATE `responsable` SET `id_user`=:id_user,`date_suppression`=:date_modification,`est_supprime`=:est_supprime WHERE `matricule_responsable`=:matricule_responsable"; //suppression logique
                        $result_sup = $dataBase->prepare($querySup);

                        $result_sup->execute([
                            'id_user' => $_SESSION['matriculeDirecteur'],
                            'date_modification' => date('Y-m-d H:i:s'),
                            'est_supprime' => 'oui',
                            'matricule_responsable' => $_GET['codeM']
                        ]);

                        if ($result_sup) 
                        {
                            ?>
                                <script > 
                                    alert('responsable bien supprimé');
                                    window.location(pagesuperAdmin.php);
                                </script>

                            <?php
                        }
                        //=========FIN SUPPRESSION
                    }

                    else if($_GET["action"] == "SP"){
                        $q_con_sup = $dataBase->prepare("DELETE FROM `connexion2` WHERE `matricule`=:matricule_responsable");
                        $q_con_sup->execute([
                            'matricule_responsable' => $_GET['codeM']
                        ]);

                        $querySup_p = "DELETE FROM `responsable` WHERE `matricule_responsable`=:matricule_responsable"; //suppression logique
                        $result_sup_p = $dataBase->prepare($querySup_p);

                        $result_sup_p->execute([
                            'matricule_responsable' => $_GET['codeM']
                        ]);

                        if ($result_sup_p) 
                        {  
                            if($q_con_sup){
                                ?>
                                    <script > 
                                        alert("responsable bien supprimé.\n Il n'est plus dans la base de donnée");
                                        window.location(pagesuperAdmin.php);
                                    </script>
                                <?php
                            } 
                        }
                    }

                    else if($_GET['action'] == 'M') //%ODIFICATION
                    {
                        $queryM = "SELECT * FROM `responsable` WHERE `matricule_responsable` = :matricule_responsable ";
                        $result_M = $dataBase->prepare($queryM);
                        $result_M->execute([
                            'matricule_responsable' => $_GET['codeM']
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
                                
                                    <div class="panel-body"  id="boite_body">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Matricule</label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                   <input type="text" name="matricule_responsable" id="matricule_responsable" class="form-control input-sm"  readonly="true" value = "' .$etd['matricule_responsable']. '">
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Nom resp : </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="nom_responsable" id="nom_responsable" class="form-control input-sm"  value = "' .$etd['nom_responsable']. '">
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Prénom resp : </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="prenom_responsable" id="prenom_responsable" class="form-control input-sm" value = "' .$etd['prenom_responsable']. '">
                                                </div> 
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Poste responsable : </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="poste" id="poste" class="form-control input-sm" value = "' .$etd['poste_responsable']. '">
                                                </div> 
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control input-sm">Nationalité responsable : </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="Nationalite_resp" id="Nationalite_resp" class="form-control input-sm" value = "' .$etd['Nationalite_resp']. '">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name = "modifie_resp" value="MODIFIER" class="btn btn-info btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                        ';
                        ?>
                                    <script>
                                        document.getElementById("nom_responsable").focus();

                                        // alert("resp");
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

                if(isset($_POST['modifie_resp'])){
                    
                    $queryModif = "UPDATE `responsable` SET `nom_responsable`=:nom_responsable, `prenom_responsable`=:prenom_responsable, `Nationalite_resp`=:Nationalite_resp, `poste_responsable`=:poste_responsable, `id_user`=:id_user, `date_suppression`=:date_suppression WHERE `matricule_responsable`=:matricule_responsable"; //suppression logique
                        $result_modif = $dataBase->prepare($queryModif);

                        $result_modif->execute([
                            'nom_responsable' => ''.$_POST['nom_responsable'].'',
                            'prenom_responsable' => ''.$_POST['prenom_responsable'].'',
                            'Nationalite_resp'=> ''.$_POST['Nationalite_resp'].'',
                            'poste_responsable' => ''.$_POST['poste'].'',
                            'id_user' => $_SESSION['matriculeDirecteur'],
                            'date_suppression' => date('Y-m-d H:i:s'),
                            'matricule_responsable' => $_POST['matricule_responsable']
                        ]);

                        if ($result_modif) 
                        {
                            ?>

                                <script > 
                                    alert('responsable bien modifié');
                                    window.location.href=('pagesuperAdmin.php');
                                </script>

                            <?php
                        }
                }
            ?>
        </div>

</body>
</html>