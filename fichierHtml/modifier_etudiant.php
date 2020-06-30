<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	// include'connexion.php';
	global $dataBase;


	if (isset($_GET["codeM"]) && isset( $_GET["action"] )) {
                    if ($_GET["action"] == "S") //Suppression
                    {
                        //=========DEBUT SUPPRESSION
                        $querySup = "UPDATE `etudiant` SET `id_user`=:id_user,`date_modification`=:date_modification,`est_supprime`=:est_supprime WHERE `matricule_etudiant`=:matricule_etudiant"; //suppression logique
                        $result_sup = $dataBase->prepare($querySup);

                        $result_sup->execute([
                            'id_user' => '123456',
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
		  }
		  else if ($_GET["action"] == "M") //Modification
		  {
		    //=========DEBUT RECUPERATION INFOS MATIERE

		    $PhotoEtudiant = $_FILES['PhotoEtudiant']['name'];
			$file_tmp_name = $_FILES['PhotoEtudiant']['tmp_name'];
			$imageSize = $_FILES['PhotoEtudiant']['size'];

			$upload_dir ='../fichierImage/photoEleve/';
			$imageExt = strtolower(pathinfo($PhotoEtudiant, PATHINFO_EXTENSION));
			$valid_extension=array('jpeg','jpg','png','gif','pdf');
			$pictureEtudiant = rand(1000, 1000000).".".$imageExt;
			move_uploaded_file($file_tmp_name, $upload_dir.$pictureEtudiant);


			// Préparation de la requête insert
			$q = $dataBase->prepare("INSERT INTO `etudiant` (`matricule_etudiant`, `classe_etudiant`, `nom_etudiant`, `prenom_etudiant`, `date_naissance_etud`, `nationalite_etud`, `photo_etudiant`) VALUES (:matricule_etudiant, :classe_etudiant, :nom_etudiant, :prenom_etudiant, :date_naissance_etud, :nationalite_etud, :photo_etudiant)");

			//On lie chaque marqueur à une valeur :
			$q->execute([
				'matricule_etudiant' => $_POST['matriculeEtudiant'],
				'classe_etudiant' => '"'.$_POST['classeEtudiant'].'"',
				'nom_etudiant' => '"'.$_POST['nomEtudiant'].'"',
				'prenom_etudiant' => '"'.$_POST['prenomEtudiant'].'"',
				'date_naissance_etud' => '"'.$_POST['DateNaissanceEtudiant'].'"',
				'nationalite_etud' => '"'.$_POST['NationalitéEtudiant'].'"',
				'photo_etudiant' => '"'.$pictureEtudiant.'"',
			]);
		    $codeMat_readonly="readonly";
		    $text_submit_button="Modifier";

		    //recuperer les informations de la matière à modifier et précharger les champs du formulaire
		    $queryInfo = "select * from matiere where code = '".$_GET["codeM"]."' ";
		    $resInfo = sqlsrv_query($conn,$queryInfo);
		    while ($ligne = sqlsrv_fetch_array($resInfo)) 
		    {
		      $codeUE_Defaut = $ligne["sgs_unite_enseignement_code"];
		      $codeMat_Defaut = $ligne["code"];
		      $nomMat_Defaut = utf8_encode($ligne["libele"]);

		    }
		    //=========FIN RECUPERATION INFOS MATIERE
		}
	}
?>


</body>
</html>