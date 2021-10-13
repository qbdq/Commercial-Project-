<?php


function modifier_produit($r,$n,$p,$q,$i){
  include('../connexionBD.php');

mysqli_query($conn,"UPDATE  produit set ref_produit =$r , nom_produit='$n' , prix_unitaire=$p , qte_stocke=$q , indisponible='$i' where ref_produit=$r;") or die(mysqli_error($conn));
header('location:../produits.php');
}


if(isset($_POST['modifier'])){


modifier_produit($_POST['num_ref'],$_POST['nom_produit'],$_POST['p_unitaire'],$_POST['qte_stocke'],$_POST['indisponible']);


}


?>




<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Modifier Produit</title>
  <link rel="stylesheet" type="text/css" href="../css/style_prod.css">




</head>
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
  <td><label>Refference de produit</label></td>
<td><input type="texte" name="num_ref" required></td>
</tr>

<tr>
  <td><label>Nom De Produit</label></td>
<td><input type="texte" name="nom_produit" required></td>

</tr>

<tr>
  <td><label>Prix unitaire</label></td>
<td><input type="texte" name="p_unitaire" required></td>

</tr>

<tr>
  <td><label>Quantite stocke</label></td>
<td><input type="texte" name="qte_stocke" required></td>

</tr>

<tr>
  <td><label>Indisponible </label></td>
<td><input type="texte" name="indisponible" required></td>

</tr>

<tr>
          <td>  <input type="submit" value="modifier" class="myButton" name="modifier"></td>
        

</tr>

</table>

</div>
          
            </form>

</body>

</html>