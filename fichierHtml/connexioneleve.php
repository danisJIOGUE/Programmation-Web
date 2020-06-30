<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<?php



	if(isset($_POST['connexionMembre']) && !(empty($_POST['password'])) && !(empty($_POST['matricule']))) { 

                $q_con = $dataBase -> prepare("SELECT * FROM connexion2 where matricule = :matricule");
                $q_con -> execute(['matricule' => $_POST['matricule']]);
                $result = $q_con -> fetch();

                //var_dump($result);

                if($result == true){
                    // Le matricule existe bien
                    if((isset($_POST['password'])) && ($_POST['password'] == $result['password_2'])){
                        // Connexion effective


                        if (strlen($_POST['matricule']) == 5) {
                        	// header('Location:fichierHtml/pageEleve.php');  *
                            while ($ligne = $q_con->fetch()) 
                            {
                              $_SESSION['matriculeEtudiant'] = $ligne['matricule_etudiant'];
                              $_SESSION['prenomEtudiant'] = $ligne['prenom_etudiant'];
                              $_SESSION['nomEtudiant'] = $ligne['nom_etudiant'];
                              $_SESSION['derniereConnexionE'] = $ligne['date_connexion'];
                            }
                            ?>
                            <script>
                                window.location.href=('fichierHtml/pageEleve.php');
                            </script>
                            <?php
                        }
                        else if(strlen($_POST['matricule']) == 6){
                            while ($ligne = $q_con->fetch()) 
                            {
                              $_SESSION['matriculeResponsable'] = $ligne['matricule_responsable'];
                              $_SESSION['prenomResponsable'] = $ligne['prenom_responsable'];
                              $_SESSION['nomResponsable'] = $ligne['nom_responsable'];
                              $_SESSION['derniereConnexionR'] = $ligne['date_connexion'];
                            }
                            // header('Location:fichierHtml/pageAdministration.php'); 
                            // echo "pageAdministration";
                             ?>
                                <script>
                                    window.location.href=('fichierHtml/pageAdministration.php');
                                </script>
                            <?php
                        }
                        
                        else if(strlen($_POST['matricule']) == 7){
                            while ($ligne = $q_con->fetch()) 
                            {
                              $_SESSION['matriculeDirecteur'] = $ligne['matricule_directeur'];
                              $_SESSION['prenomDirecteur'] = $ligne['prenom_directeur'];
                              $_SESSION['nomDirecteur'] = $ligne['nom_directeur'];
                              $_SESSION['derniereDonnexionD'] = $ligne['date_connexion'];
                            }
                            // header('Location:fichierHtml/pageAdministration.php'); 
                            // echo "pageAdministration";
                             ?>
                                <script>
                                    window.location.href=('fichierHtml/pagesuperAdmin.php');
                                </script>
                            <?php
                        }
                        else
                        {
                            ?>
                            <script>
                                window.alert("La taille du matricule est anormalement élevée");
                            </script>
                            <?php
                            die;
                        }

                    } // erreur password
                    else
                    {
                    	?>
                        <script>
                            window.alert("Mot de passe incorrect");
                        </script>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <script>
                        window.alert("Matricule non existant");
                    </script>
                    <?php
                }
            }
            
 ?>

 </body>
</html>