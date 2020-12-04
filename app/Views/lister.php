<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>FaSiLa</title>
        <meta name="description" content="Liste des élèves">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    </head>
    <body>
      <tr>id_élève</th><tr>Nom</th><th>Prénom</tr><th>Sexe</tr><th>Classe</tr><th>Actions</tr>
        <?php
        foreach($eleve_inscriptions as $eleve)
        ?>
          <tr class="liste">
            <td><?php echo $eleve['ID_ELEVE']; ?></td>
            <td><?php echo $eleve['NOM']; ?></td>
            <td><?php echo $eleve['PRENOM']; ?></td>
            <td><?php echo $eleve['SEXE']; ?></td>
            <td><?php echo $eleve['CLASSE']; ?></td>
            <td><img class="ico" src="/img/eye.svg"  usemap="#v_<?php echo $eleve['NOM'];?>">
					<map name="v_<?php echo $eleve['NOM'];?>">
						<area shape="rect" coords="0,0,26,26" alt="Visualiser" href="<?php echo site_url('../EleveCRUD/visualiser/').$eleve['NOM'];?>">
					</map>
					<img  class="ico" src="/img/pencil.svg"  usemap="#m_<?php echo $eleve['NOM'];?>">
					<map name="m_<?php echo $eleve['NOM'];?>">
						<area shape="rect" coords="0,0,26,26" alt="Modifier" href="<?php echo site_url('../EleveCRUD/edit/').$eleve['NOM'];?>">
					</map>
					<img class="ico" src="/img/minus.svg"  usemap="#s_<?php echo $eleve['NOM'];?>">
					<map name="s_<?php echo $eleve['NOM'];?>">
						<area shape="rect" coords="0,0,26,26" alt="Supprimer" href="<?php echo site_url('../fabricant/delete/').$eleve['NOM'];?>">
					</map>
			</td>
		</tr>
 </table>
</html>
