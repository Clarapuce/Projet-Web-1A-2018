<?php
include("includes/header.php");
require("connect.php");

$id=$_GET['id'];
$auteur=$_GET['auteur'];

echo '
<div class="container">
    <div class="fond">
        <div class="alert alert-secondary" role="alert">
	        <a href ="index.php"> Retour </a>
            <div class="card">
                <div class="card-body">
                    <p class ="h2">'.$id.' </p> 
                </div>
            </div>
            <p><em>Créée par '.$auteur.'</em>   - <a href="stat.php?id='.$id.'&auteur='.$_GET['auteur'].'">accéder aux statistiques</a></p>
            <div class="centre"><br/>
';

    $MaRequete="SELECT * FROM PERSO WHERE session_perso = '".$id."'"; //récupère les informations de base (nom, prénom, âge, type, image) sur le personnage
    $MonRs = $BDD -> query( $MaRequete );
    while ($Tuple = $MonRs ->fetch() )
    {
        echo '
                <div class="card text-white bg-light mb-3" style="max-width: 34rem;max-height:">
                    <table class="table">
                        <tr>
                            <div class="card-body">
                                <td>
                                    <a href="perso.php?id='.$Tuple["id"].'&auteur='.$Tuple["auteur"].'">
                                        <h3>'.$Tuple["prenom"].' '.$Tuple["nom"].'</h3>
                                    </a>
                                    <div class="persoElemt">
                                        '.$Tuple["age"].' ans - Créé par '.$Tuple["auteur"].'
                                    </div>
                                </td>
                                <td>
                                    <div class="persoType">
                                        '.$Tuple["type"].'
                                    </div>
                                    <img class="persoImage" src="image/'.$Tuple["image"].'"/>
                                </td>
                            </div>
                        </tr>
                    </table>
                </div>
        ';  
}
echo '</div></div></div></div>';
include("includes/footer.php");
?>