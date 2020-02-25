<!doctype>
<html>
	<head>
		<meta charset='utf-8' />
		<title>Thies</title>
		<link rel='stylesheet' href='thies.css' />
	</head>
	<body>
		<form method='POST' action='thies.php'>
			<div id='p1'>
				<h1>Panneau de saisie</h1>
				<p><label for='nom'>Nom de l'employé </label><input class='ipt' type='text' name='nom' id='nom' /></p>
				<p><label for='prenom'>Prenom de l'employé </label><input class='ipt' type='text' name='prenom' id='prenom' /></p>
				<p><label for='categorie'>Categorie </label>
				<select name='categorie'>
					<option value='categorieA'>Categorie A</option>
					<option value='categorieB'>Categorie B</option>
					<option value='categorieC'>Categorie C</option>
				</select>
				<p><label for='nbheure'>Nombre d'heures </label><input class='ipt' type='number' name='nbheure' id='nbheure' /></p>
				<label>A t-il effectué des Heures Supplementaires </label>
				<p><input  type='radio' name='effect' value='oui' id='oui' checked /><label for='oui'>Oui</label></p>
				<p><input  type='radio' name='effect' value='non' id='non' /><label for='non'>Non</label></p>
				<p><label for='heuresup'>Heures Sup. </label><input class='ipt' type='number' name='heuresup' id='heuresup' /></p>
				<p><label for='avantage'>Avantage </label><input class='ipt' type='number' name='avantage' id='avantage' /></p>
				<input id='bouton1' type='submit' name='ajouter' /> <input type='reset' name='annuler' />
				
			</div>
		</form>
			<div id='p2'>
				<h1>Enregistrement<h1>
				<table>
				<tr><th>Nom</th><th>Prenom</th><th>RAS</th><th>Salaire Net</th></tr>
				
				<?php /*
					$bd = new PDO('mysql:host=localhost;port=3306;dbname=thies','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
					$nom=null;$prenom=null;$categorie=null;$nbheure=null;$effect=null;$heuresup=null;$avantage=null;
					if(isset($_POST['nom']))
						$nom=$_POST['nom'];
					if(isset($_POST['prenom']))
						$prenom=$_POST['prenom'];
					if(isset($_POST['categorie']))
						$categorie=$_POST['categorie'];
					if(isset($_POST['nbheure']))
						$nbheure=$_POST['nbheure'];
					if(isset($_POST['effect']))
						$effect=$_POST['effect'];
					if(isset($_POST['heuresup']))
						$heuresup=$_POST['heuresup'];
					if(isset($_POST['avantage']))
						$avantage=$_POST['avantage'];
				if($nom){
					$req="insert into enregistrement(nom,prenom,categorie,nbheure,effect,heuresup,avantage)values('$nom','$prenom','$categorie',$nbheure,'$effect',$heuresup,$avantage)";
					$res=$bd->exec($req);
					if($res){
						while($v=$res->fetch(PDO::FETCH_ASSOC)){
							echo"<tr>";
							foreach($v in $l){
								echo"<td> $l </td>";
							}
							echo"</tr>";
						}
					}
						
				}
				else
					echo"probleme";
				*/	
				?>
				</table>
			</div>
		
		
	</body>
</html>