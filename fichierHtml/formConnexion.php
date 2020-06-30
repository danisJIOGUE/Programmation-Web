
<?php

        
    // Test si l'utilisateur clic sur connecter et choisit un profil
    if(isset($_POST['nom'])){
        
        if( ($_POST['Submit'] == "connexion") && !($_POST['profil'] == "-----Choisissez votre profil-----") && !(empty($_POST['nom'])) && !(empty($_POST['prenom']))){
            if($_POST['profil'] == "externe"){
                echo '
                    <div class="container" >
                    <div class="row centered-form">
                        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                            <form role="form" method="POST">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> 
                                            Merci de renseigner le formulaire de connexion
                                        </h3>
                                    </div>
                                
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                   <input type="text" name="nomUser" id="first_name" class="form-control input-sm" readonly="true" value = "' .$_POST['nom']. '">
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="prenomUser" id="last_name" class="form-control input-sm" readonly="true" value = "' .$_POST['prenom']. '">
                                                </div>
                                            </div>

                                            <div class="col-xs-5 col-sm-5 col-md-5">
                                                <div class="form-group">
                                                    <input type="text" name="profilMembre" id="profilMembre" class="form-control input-sm" placeholder="last_name" readonly="true" value = "' .$_POST['profil']. '">
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="userMail" required id="email_u" class="form-control input-sm" placeholder="Votre adresse électronique">
                                        </div>
                                    </div>
                                    <input type="submit" name = "connexionUser" value="connexion" class="btn btn-info btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                ';
                ?>
                    <script>
                        document.getElementById("email_u").focus();
                    </script>
                <?php

            } //Connexion en mode visiter
            else if(($_POST['profil'] == "interne")){

                echo '
                    <div class="row centered-form">
                        <div class="col-xs-12 col-sm-8 col-md-4 col-sm offset-2 col-md-offset-4">
                            <form role="form" method = "POST">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Merci de renseigner le formulaire de connexion
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" readonly="true" value = "' .$_POST['nom']. '">
                                                </div> 
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="last_name" readonly="true" value = "' .$_POST['prenom']. '">
                                                </div> 
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="profilMembre" id="profilMembre" class="form-control input-sm" placeholder="last_name" readonly="true" value = "' .$_POST['profil']. '">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="matricule" required id="mat" class="form-control input-sm" placeholder="Votre matricule">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" required name="password" id="pwd" class="form-control input-sm" placeholder="Votre mot de passe">
                                        </div>
                              
                                        <input type="submit" name = "connexionMembre" value="connexion" class="btn btn-info btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                ';
                ?>
                    <script>
                        document.getElementById("mat").focus();
                    </script>
                <?php
            }//Connexion des autres
        }
    }
    if(isset($_POST['connexionUser']) && !(empty($_POST['userMail']))) //Connexion des utilisateurs
    {

        $_SESSION['email'] = $_POST['userMail'];
        $_SESSION['prenomUser'] = $_POST['prenomUser'];
        $_SESSION['nomUser'] = $_POST['nomUser'];
        ?>
            <script>
                // var expressionReguliere = /^[a-zA-Z0-9_\\-\\.]{3,}@[a-zA-Z0-9\\-_]{2,}\\.[a-zA-Z]{2,4}*$/;
                // var mail = document.getElementById('email_u');
                // if(expressionReguliere.test(mail.value)){
                    window.location.href=('fichierHtml/pageUtilisateur.php');
                // }
                // else
                // }
                
            </script>
        <?php
    }
    else{
        
    }


    if(isset($_POST['connexionMembre']) && !(empty($_POST['password'])) && !(empty($_POST['matricule']))){  //Connexion du personnel de l'école

        $q_con = $dataBase -> prepare("SELECT * FROM connexion2 where matricule = :matricule");
        $q_con -> execute(['matricule' => $_POST['matricule']]);
        $result = $q_con -> fetch();

        if(!($result)){
            ?>
                    <script>
                        window.alert("Matricule inexistant");
                    </script>
                <?php
        }
        else{
            // Le matricule existe bien
            
            if (strlen($_POST['matricule']) == 5) {   //Connexion en tant qu'étudiant       
                $_SESSION['matriculeEtudiant'] = $result['matricule'];
                //Récupération de la date de connexion dans la table de l'étudiant
                $q_con_etd = $dataBase -> prepare("SELECT * FROM `etudiant` where matricule_etudiant = :matricule");
                $q_con_etd -> execute(['matricule' => $result['matricule']]);
                $result_etd = $q_con_etd->fetch();

                if ((isset($_POST['password'])) && !(empty($result_etd['date_connexion']))) {
                    if(password_verify($_POST['password'], $result['password_2'])){
                        ?>
                            <script>
                                window.location.href=('fichierHtml/pageEleve.php');
                            </script>
                        <?php
                    }
                    else     //mot de passe après hashage incorrect
                    {
                        ?>
                            <script>
                                alert("Votre mot de passe ne correspond avec celui de la dernière modification");
                            </script>
                        <?php
                    }
                }
                else{       //première connexion de l'utilisateur
                    if((isset($_POST['password'])) && ($_POST['password'] == $result['password_2'])){
                        ?>
                            <script>
                                window.location.href=('fichierHtml/pageEleve.php');
                            </script>
                        <?php
                    }
                    else{
                        ?>
                            <script>
                                alert("Votre mot de passe ne correspond pas");
                            </script>
                        <?php
                    }
                }  
            }
            
            else if(strlen($_POST['matricule']) == 6){      //Connexion en tant que responsable 
                $_SESSION['matriculeResponsable'] = $result['matricule'];
                //Récupération de la date de connexion dans la table du responsable
                $q_con_resp = $dataBase -> prepare("SELECT * FROM `responsable` where matricule_responsable = :matricule");
                $q_con_resp -> execute(['matricule' => $result['matricule']]);
                $result_resp = $q_con_resp->fetch();

                if ((isset($_POST['password'])) && !(empty($result_resp['date_connexion']))) {
                    if(password_verify($_POST['password'], $result['password_2'])){
                        ?>
                            <script>
                                window.location.href=('fichierHtml/pageAdministration.php');
                            </script>
                        <?php
                    }
                    else     //mot de passe après hashage incorrect
                    {
                        ?>
                            <script>
                                alert("Votre mot de passe ne correspond avec celui de la dernière modification");
                            </script>
                        <?php
                    }
                }
                else {       //première connexion de l'utilisateur
                    if((isset($_POST['password'])) && ($_POST['password'] == $result['password_2'])){
                        ?>
                            <script>
                                window.location.href=('fichierHtml/pageAdministration.php');
                            </script>
                        <?php
                    }
                    else {
                        ?>
                            <script>
                                alert("Votre mot de passe ne correspond pas");
                            </script>
                        <?php
                    }
                }   
            }

            else if(strlen($_POST['matricule']) == 7){      //Connexion en tant que superAdmin
                $_SESSION['matriculeDirecteur'] = $result['matricule'];
                //Récupération de la date de connexion dans la table du responsable
                $q_con_admin = $dataBase -> prepare("SELECT * FROM `directeur` where matricule_dir = :matricule");
                $q_con_admin -> execute(['matricule' => $result['matricule']]);
                $result_admin = $q_con_admin->fetch();

                if ((isset($_POST['password'])) && !(empty($result_admin['date_connexion']))) {
                    if(password_verify($_POST['password'], $result['password_2'])){
                        ?>
                            <script>
                                window.location.href=('fichierHtml/pagesuperAdmin.php');
                            </script>
                        <?php
                    }
                    else     //mot de passe après hashage incorrect
                    {
                        ?>
                            <script>
                                alert("Votre mot de passe ne correspond avec celui de la dernière modification");
                            </script>
                        <?php
                    }
                }
                else {       //première connexion de l'utilisateur
                    if((isset($_POST['password'])) && ($_POST['password'] == $result['password_2'])){
                        ?>
                            <script>
                                window.location.href=('fichierHtml/pagesuperAdmin.php');
                            </script>
                        <?php
                    }
                    else {
                        ?>
                            <script>
                                alert("Votre mot de passe ne correspond pas");
                            </script>
                        <?php
                    }
                }
            }

            else
            {
                ?>
                    <script>
                        window.alert("La taille du mot de passe est anormalement grande");
                    </script>
                <?php
            }   
        }
        
    }      
?>