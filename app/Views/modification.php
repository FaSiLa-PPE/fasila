<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>FaSiLa</title>
        <meta name="description" content="Modification élèves">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    </head>
    <body>
        <h1>Modifier l'inscription de l'élève</h1>
        <form action="<?= route_to('update') ?>" method="post">
          <fieldset>
              <legend> <h2>Enfant :</h2> </legend>
              <div>
                  <label for="nom">NOM:</label>
                  <input type="text" class="form-nom" id="nom" name="NOM" placeholder="Entrez votre nom" required>
              </div>
              <div>
                  <label for="prenom">PRENOM:</label>
                  <input type="text" class="form-prenom" id="prénom" name="PRENOM" placeholder="Entrez votre prénom" required>
              </div>

              <div>
                  <input class="form-check-input" type="radio" id="Masculin" name="SEXE" value="M" required>
                  <label class="form-check-label" for="Masculin">Masculin</label>
              </div>
              <div>
                  <input class="form-check-input" type="radio" id="Féminin" name="SEXE" value="F" required>
                  <label class="form-check-label" for="Féminin">Féminin</label>
              </div>

              <div class="form-date_naissance">
                  <label for="date_de_naissance">Date de naissance:</label>
                  <input type="date" class="form-date" id="date_naissance" name="DATE_NAISSANCE" placeholder="format AAAA/MM/JJ" required>
              </div>

              <div class="form-etablissement">
                  <label for="etablissement">École / Collège / Lycée:</label>
                  <input type="text" class="form-etablissement" id="etablissement" name="ETABLISSEMENT" placeholder="Nom de votre établissement" required>
              </div>

              <div class="form-ville">
                  <label for="ville">Ville:</label>
                  <input type="text" class="form-ville" id="ville" name="VILLE" placeholder="Où habitez-vous?" required>
              </div>

              <div class="form-classe">
                  <label for="classe">Classe:</label>
                  <input type="text" class="form-classe" id="classe" name="CLASSE" placeholder="Votre classe" required>
              </div>

              <div class="form-checkbox-ALAE">
                  <input class="form-check-input" type="checkbox" id="Adhérent ALAE" name="ADHERENT_ALAE" value="ALAE">
                  <label class="form-check-label" for="Adhérent ALAE">Adhérent ALAE</label>
              </div>

              <div class="form-site-accueil">
                  <label for="site-accueil">Site d'accueil de:</label>
                  <input type="text" class="form-site-accueil" id="site-accueil" name="SITE_ACCUEIL" placeholder="">
              </div>

              <div class="form-tel-M">
                  <label for="tel-M">Portable Mère:</label>
                  <input type="tel" class="form-tel-M" id="form-tel-M" name="PORTABLE_MERE" placeholder="" required>
              </div>

              <div class="form-tel-P">
                  <label for="tel-P">Portable Père:</label>
                  <input type="tel" class="form-tel-P" id="form-tel-P" name="PORTABLE_PERE" placeholder="" required>
              </div>

              <div class="form-mail-M">
                  <label for="mail-M">Adresse Mail Mère:</label>
                  <input type="email" class="form-mail-M" id="form-mail-M" name="ADRESSE_MAIL_MERE" placeholder="" required>
              </div>

              <div class="form-mail-P">
                  <label for="mail-p">Adresse Mail Père:</label>
                  <input type="email" class="form-mail-P" id="form-mail-P" name="ADRESSE_MAIL_PERE" placeholder="" required>
              </div>

              <P> Contre-indication et/ou problèmes médicaux: </p>

              <div class="form-checkbox-medical-oui">
                  <input class="form-check-input" type="radio" id="OUI" name="PROBLEME_MEDICAUX" value="OUI" required>
                  <label class="form-check-label" for="OUI">OUI</label>
              </div>
              <div class="form-checkbox-medical-non">
                  <input class="form-check-input" type="radio" id="NON" name="PROBLEME_MEDICAUX" value="NON" required>
                  <label class="form-check-label" for="NON">NON</label>
              </div>
          </fieldset>
          <fieldset>
              <legend> <h2> Adresse de facturation </h2> </legend>

              <p> Qui êtes-vous pour lui? </p>

              <div class="form-checkbox-PERE">
                  <input class="form-check-input" type="radio" id="PERE" name="TYPE_RESPONSABLE" value="PERE" required>
                  <label class="form-check-label" for="PERE">PERE</label>
              </div>

              <div class="form-checkbox-MERE">
                  <input class="form-check-input" type="radio" id="MERE" name="TYPE_RESPONSABLE" value="MERE" required>
                  <label class="form-check-label" for="MERE">MERE</label>
              </div>

              <div class="form-checkbox-responsable">
                  <input class="form-check-input" type="radio" id="RESPONSABLE" name="TYPE_RESPONSABLE" value="RL" required>
                  <label class="form-check-label" for="Responsable Légal">Responsable Légal</label>
              </div>

              <div class="form-facturation-id">
                  <label for="form-facturation-id">NOM et PRÉNOM:</label>
                  <input type="text" class="form-facturation-id" id="form-facturation-id" name="RESPONSABLE_NOMPRE" placeholder="Votre nom et prénom" required>
              </div>

              <div class="form-adresse">
                  <label for="adresse">ADRESSE:</label>
                  <input type="text" class="form-adresse" id="adresse" name="ADRESSE_FACTURATION" placeholder="Où habitez-vous?" required>
              </div>

              <div class="form-postal">
                  <label for="CODE_POSTAL">Code Postal:</label>
                  <input type="number" class="form-postal" id="CODE_POSTAL" name="CODE_POSTAL" placeholder="" required>
              </div>

              <div class="form-facturation-ville">
                  <label for="ville">Ville:</label>
                  <input type="text" class="form-facturation-ville" id="facturation-ville" name="RESPONSABLE_VILLE" placeholder="Où habitez-vous?" required>
              </div>

              <div class="form-facturation-mail">
                  <label for="mail-facturation">Adresse mail Facturation:</label>
                  <input type="email" class="form-mail-P" id="form-mail-P" name="MAIL_FACTURATION" placeholder="" required>
              </div>
          </fieldset>

          <div class="form-autorisation">
              <input type="checkbox" class="form-autorisation" id="Accepter l'autorisation parentale" required>
              <label class="form-autorisation" for="Accepter l'autorisation parentale">Accepter l'autorisation parentale</label>
          </div>
          <button type="submit" class="btn btn-primary">Modifier l'inscription</button>

      </form>
      <a href="<?= route_to('accueil') ?>">Retourner à l'acceuil</a>
  </body>
</html>
