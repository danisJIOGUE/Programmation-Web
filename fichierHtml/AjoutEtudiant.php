<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>


<?php
	include'connexion.php';
	global $dataBase;
	

	$PhotoEtudiant = $_FILES['PhotoEtudiant']['name'];
	$file_tmp_name = $_FILES['PhotoEtudiant']['tmp_name'];
	$imageSize = $_FILES['PhotoEtudiant']['size'];

	$upload_dir ='../fichierImage/photoEleve/';
	$imageExt = strtolower(pathinfo($PhotoEtudiant, PATHINFO_EXTENSION));
	$valid_extension=array('jpeg','jpg','png','gif','pdf');
	$pictureEtudiant = rand(1000, 1000000).".".$imageExt;
	move_uploaded_file($file_tmp_name, $upload_dir.$pictureEtudiant);

	$_SESSION['photo'] = $pictureEtudiant;

	// Préparation de la requête insert

	$q_mat = $dataBase->prepare("SELECT `matricule_etudiant` FROM `etudiant`");
	$res = $q_mat->execute();
	$doe = $q_mat->fetchAll(PDO::FETCH_COLUMN, 0);

	// Contrôle doublon matricule dans la tb connexion
	$q_mat_con = $dataBase->prepare("SELECT `matricule` FROM `connexion2`");
	$q_mat_con->execute();
	$res_con = $q_mat_con->fetchAll(PDO::FETCH_COLUMN, 0);


	if(!(is_numeric($_POST['matriculeEtudiant']))){
		?>
			<script>
				alert("Le matricule entré n'est un numérique.\n Il doit un entier de 5 positions");
				window.location.href=('pageAdministration.php');
			</script>
		<?php
	}
	else{
		if(strlen($_POST['matriculeEtudiant'])!=5){
		?>
			<script>
				alert("Ce matricule n'est pas celui d'un étudiant.\n Il doit un entier de 5 positions");
				window.location.href=('pageAdministration.php');
			</script>
		<?php
		}
		else {
			if (in_array($_POST['matriculeEtudiant'], $res_con)) {
				?>
					<script>
						alert("Ce matricule est déjà attribué à un autre responsable dans la table de connexion.\nmerci de bienvouloir revérifier la saisie");
						window.location.href=('pageAdministration.php');
					</script>
				<?php
			}
			else if(in_array($_POST['matriculeEtudiant'], $doe)) {
				?>
					<script>
						alert("Ce matricule est déjà attribué à un autre élève.\nmerci de bienvouloir revérifier la saisie");
						window.location.href=('pageAdministration.php');
					</script>
				<?php
				
			}
			else {
				$q = $dataBase->prepare("INSERT INTO `etudiant` (`matricule_etudiant`, `classe_etudiant`, `nom_etudiant`, `prenom_etudiant`, `date_naissance_etud`, `nationalite_etud`, `photo_etudiant`, `adresse_etud`, `password_etd`) VALUES (:matricule_etudiant, :classe_etudiant, :nom_etudiant, :prenom_etudiant, :date_naissance_etud, :nationalite_etud, :photo_etudiant, :email, :password_etd)");

				//On lie chaque marqueur à une valeur :
				if ($_POST['classeEtudiant'] == "-----Choisissez La classe de l'étudiant-----") {
					echo "Erreur";
					?>
						<script>
							alert("Les valeurs entrés ne sont pas autorisées");
							document.getElementById()
						</script>
					<?php			
					die();
				}

				$q->execute([
					'matricule_etudiant' => $_POST['matriculeEtudiant'],
					'classe_etudiant' => ''.$_POST['classeEtudiant'].'',
					'nom_etudiant' => ''.$_POST['nomEtudiant'].'',
					'prenom_etudiant' => ''.$_POST['prenomEtudiant'].'',
					'date_naissance_etud' => ''.$_POST['DateNaissanceEtudiant'].'',
					'nationalite_etud' => ''.$_POST['NationalitéEtudiant'].'',
					'photo_etudiant' => ''.$pictureEtudiant.'',
					'email' => ''.$_POST['email'].'',
					'password_etd' => '12345'
				]);

				if ($q) {
					$q_connexion = $dataBase->prepare("INSERT INTO `connexion2` (`matricule`, `password_2`, `email`) VALUES ( :matricule, :password, :email)");
					$q_connexion->execute([
						'matricule' => $_POST['matriculeEtudiant'],
						'password' => '12345',
						'email' => $_POST['email']
					]);
				}
				else{
					?>
						<script>
							alert("Problème d'exécution de la requête matricule déjà existant");
						</script>
					<?php
				}
				header('Location:pageAdministration.php');
			}
		}
	}
	
?>