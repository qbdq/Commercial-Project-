
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Recherche details commande</title>
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
  <td><label>Numero de Commande : </label></td>
<td><input type="texte" name="num_commande" required></td>
</tr>
<tr>
    <td>  <input type="submit" value="rechercher" class="myButton" name="rechercher"></td>
</tr>
</table>
</form>
                      
                      <?php
                         include('../connexionBD.php');
                               if(isset($_POST['rechercher'])){


                                ?>
                                    <div class="CSSTableGenerator" >
                                  <table >              
                                     <tr>
                    
                            <td >
                        Numero Commande
                        </td>
                        <td>
                        Refference de Produit
                        </td>
                        <td>
                          Quantite Commande 
                        </td>
                        
                    </tr>


                                <?php
                               $ref=$_POST['num_commande'];

                         $query = "SELECT * FROM details_commande where num_commande=$ref";
                     if ($result = mysqli_query($conn,$query)) {
                           /* Récupère un tableau associatif */
                    while ($row = mysqli_fetch_assoc($result)) {    
                      ?>
                        <tr>
                          <td>
                         <?php echo $row["num_commande"];?>
                       </td>

                       <td>
                         <?php echo $row["ref_produit"];?>
                       </td>

                       <td>
                         <?php echo $row["qte_commande"];?>
                       </td>

                        </tr>
                        <?php }
     mysqli_free_result($result);
     mysqli_close ($conn);
}
}
?>

                </table>


            </div>
            </form>






</body>



</html>





