<?php 
include('header.php');
if (!empty($_SESSION['pseudo'])) erreur(ERR_IS_CO);
?>

<form method="post" action="connexion_exec.php">
<div class="container">
<div class="alignement">
<h2>Connexion</h2>
<table>
    <tr>
        <td>Pseudo :</td>
        <td> <input type="text" name="pseudo"></td>
    </tr>
        
    <tr>
        <td><br/>Mot de passe : </td>
        <td><br/> <input type="password" name="mdp"><br/></td>
    </tr>
</table>

<br/>
<input type="submit" value="Valider"> <input type="reset" value="Annuler">
<br /><br />
<a href="inscription.php">S'inscrire ?</a>
</div>
</div>
</form>

<?php 
include('footer.php');
?>
