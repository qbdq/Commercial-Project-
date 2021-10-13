<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ajoute Client</title>
  <link rel="stylesheet" type="text/css" href="../css/style_prod.css">
  <link rel="stylesheet" type="text/css" href="../css/style_client.css">




</head>
<?php


function ajoute_client($r,$a,$v,$p,$t){
  include('../connexionBD.php');

mysqli_query($conn,"INSERT INTO client(raison_sociale,adresse_client,ville_client,pays,telephone) VALUES('$r','$a','$v','$p',$t);") or die(mysqli_error($conn));

header('location:../clients.php');
}




if(isset($_POST['ajoute'])){



ajoute_client($_POST['raison_sociale'],$_POST['adr_client'],$_POST['ville_client'],$_POST['pays'],$_POST['telephone']);


}




?>

<body>

  <ul class="menu cf">
    <li><a href="../index.php">Page d'acceuil </a></li>
    <li>
        <a href="../clients.php">Clients</a>
        <ul class="submenu">
            <li><a href="ajoute_client.php">Ajouter</a></li>
            <li><a href="rechercher_client.php">Rechercher</a></li>
            <li><a href="supprimer_client.php">Supprimer</a></li>
            <li><a href="modifier_client.php">Modifier</a></li>
        </ul>         
    </li>
    
    <li>
        <a href="../produits.php">Produits</a>
        <ul class="submenu">
            <li><a href="ajoute_produit.php">Ajouter</a></li>
            <li><a href="rechercher_produit.php">Rechercher</a></li>
            <li><a href="supprimer_produit.php">Supprimer</a></li>
            <li><a href="modifier_produit.php">Modifier</a></li>
        </ul>         
    </li>

    <li>
        <a href="../commandes.php">Commandes</a>
        <ul class="submenu">
            <li><a href="ajoute_cmd.php">Ajouter</a></li>
            <li><a href="rechercher_cmd.php">Rechercher</a></li>
            <li><a href="supprimer_cmd.php">Supprimer</a></li>
            <li><a href="modifier_cmd.php">Modifier</a></li>
        </ul>              
    </li>

    <li>
        <a href="../details_commande.php">Details Commandes</a>
     <ul class="submenu">
            <li><a href="ajoute_det_cmd.php">Ajouter</a></li>
            <li><a href="rechercher_det_cmd.php">Rechercher</a></li>
            <li><a href="supprimer_det_cmd.php">Supprimer</a></li>
            <li><a href="modifier_det_cmd.php">Modifier</a></li>
        </ul>        
    </li>
     <li>
        <a href="../statistiques.php">Statistiques</a>
           
    </li>
  
</ul>
	<form method="POST" action="">
              <div id="formulaire">
<table>


<tr>
  <td><label>Raison Sociale :</label></td>
<td><input type="texte" name="raison_sociale" required></td>

</tr>
<TR>
    <TD> <label>Raison Sociale :</label>       
    </TD>   
    <TD ALIGN="center" width = 50px>
       <select name ="dropdown" id="dropdown">        
            <option value="Marié">Marié</option>
            <option value="Divorcé">Divorcé</option>
            <option value="célibataire">célibataire</option>
       </select>
    </TD>        
</TR>

<tr>
  <td><label>Adresse :</label></td>
<td><input type="texte" name="adr_client" required></td>

</tr>

<tr>
  <td><label>Ville :</label></td>
<td><input type="texte" name="ville_client" required></td>

</tr>

<tr>
  <td><label>pays :</label></td>
<td><input type="texte" name="pays" required></td>

</tr>

<tr>
  <td><label>Telephone :</label></td>
<td><input type="texte" name="telephone" required></td>

</tr>

<tr>
        
     <td>   <input type="submit" value="Ajouter" class="myButton" name="ajoute"> </td>
          
</tr>

</table>
</div>

</body>

</html>
