<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include'connexion.php';
	global $dataBase;
	

	// var_dump($_FILES);
	$Photoresp = $_FILES['Photoresp']['name'];
	$file_tmp_name = $_FILES['Photoresp']['tmp_name'];
	$imageSize = $_FILES['Photoresp']['size'];

	$upload_dir ='../fichierImage/photoEleve/';
	$imageExt = strtolower(pathinfo($Photoresp, PATHINFO_EXTENSION));
	$valid_extension=array('jpeg','jpg','png','gif','pdf');
	$pictureresp = rand(1000, 1000000).".".$imageExt;
	move_uploaded_file($file_tmp_name, $upload_dir.$pictureresp);

	$_SESSION['photo'] = $pictureresp;

	// Préparation de la requête insert
	// Contrôle doublon matricule dans la tb respon
	$q_mat = $dataBase->prepare("SELECT `matricule_responsable` FROM `responsable`");
	$res = $q_mat->execute();
	$doe = $q_mat->fetchAll(PDO::FETCH_COLUMN, 0);

	// Contrôle doublon matricule dans la tb connexion
	$q_mat_con = $dataBase->prepare("SELECT `matricule` FROM `connexion2`");
	$q_mat_con->execute();
	$res_con = $q_mat_con->fetchAll(PDO::FETCH_COLUMN, 0);
	
	if(!(is_numeric($_POST['matriculeresp']))){
		?>
			<script>
				alert("Le matricule entré n'est un numérique.\n Il doit un entier de 6 positions");
				window.location.href=('pagesuperAdmin.php');
			</script>
		<?php
	}
	else{
		if(strlen($_POST['matriculeresp'])!=6){
		?>
			<script>
				alert("Ce matricule n'est pas celui d'un responsable.\n Il doit un entier de 6 positions");
				window.location.href=('pagesuperAdmin.php');
			</script>
		<?php
		}
		else {
			if (in_array($_POST['matriculeresp'], $res_con)) {
				?>
					<script>
						alert("Ce matricule est déjà attribué à un autre responsable dans la table de connexion.\nmerci de bienvouloir revérifier la saisie");
						window.location.href=('pagesuperAdmin.php');
					</script>
				<?php
			}
			else if (in_array($_POST['matriculeresp'], $doe)) {
				?>
					<script>
						alert("Ce matricule est déjà attribué à un autre responsable.\nmerci de bienvouloir revérifier la saisie");
						window.location.href=('pagesuperAdmin.php');
					</script>
				<?php
			}
			else {
				$q = $dataBase->prepare("INSERT INTO `responsable` (`matricule_responsable`, `nom_responsable`, `prenom_responsable`, `nationalite_resp`, `poste_responsable`, `photo_responsable`, `email_resp`, `pwd_resp`) VALUES (:matricule_resp, :nom_resp, :prenom_resp,:nationalite_resp, :poste, :photo_resp, :email, :password_etd)");

				//On lie chaque marqueur à une valeur :

				$q->execute([
					'matricule_resp' => $_POST['matriculeresp'],
					'nom_resp' => ''.$_POST['nomresp'].'',
					'prenom_resp' => ''.$_POST['prenomresp'].'',
					'nationalite_resp' => ''.$_POST['Nationalitéresp'].'',
					'poste' => ''.$_POST['poste'].'',
					'photo_resp' => ''.$pictureresp.'',
					'email' => ''.$_POST['email'].'',
					'password_etd' => '123456'
				]);

				if ($q) {
					$q_connexion = $dataBase->prepare("INSERT INTO `connexion2` (`matricule`, `password_2`, `email`) VALUES ( :matricule, :password, :email)");
					$q_connexion->execute([
						'matricule' => $_POST['matriculeresp'],
						'password' => '123456',
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
				?>
						<script>
							alert("Les informations update avec succès");
						</script>
					<?php
				header('Location:pagesuperAdmin.php');
			}
		}

	}
	
	
	
?>
</body>
</html>


