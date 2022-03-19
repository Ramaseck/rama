<a href="index.html"> Retour formulaire</a>
<pre>
<?php
/*print_r($_GET);
echo $_GET['prenom'];
echo"<br>";

echo $_GET['nom'];
echo"<br>";

echo $_GET['choice'];*/

?>
</pre>

<?php 

isset($_POST['submit']); //verifie si le formulaire est soumis 

$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$Email = $_POST['email'];
$Genre = $_POST['genre'];
 //afficher le resultat

 echo 'Nom: '.$Nom.'<br>Prenom: '.$Prenom.'<br>Email: '.$Email.'<br>Genre: '.$Genre ;
 echo'<br>';

 //On établit la connexion à la connexion avec le serveur
$link = mysqli_connect("localhost","xarala_etudiant");
 /*or die("Impossible de se connecter : " . mysqli_error($link)); //== echo puis exit*/
echo '<br> Etat :Connexion au serveur et à la base de données réussies ';

echo'<br>';
// requete insertion dans la base
$sql="INSERT INTO `etudiante` ( `NOM`, `PRENOM`, `EMAIL`,  `GENRE`)
VALUES ('$Nom','$Prenom','$Email','$Genre')" ;
/*if (!mysqli_query($link,$sql))
{
die('impossible d’ajouter cet enregistrement : ' . mysqli_error()); }*/
echo "L’enregistrement est ajouté ";


?>