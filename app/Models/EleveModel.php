<?php
namespace App\Models;
use CodeIgniter\Model;

class EleveModel extends Model
{
  protected $table = 'eleve';

  protected $primaryKey = 'ID_ELEVE';

  protected $allowedFields = ['NOM', 'PRENOM', 'SEXE', 'DATE_NAISSANCE', 'ETABLISSEMENT', 'VILLE',
  'CLASSE', 'ADHERENT_ALAE', 'SITE_ACCUEIL', 'PORTABLE_MERE', 'PORTABLE_PERE', 'ADRESSE_MAIL_MERE', 'ADRESSE_MAIL_PERE', 'PROBLEME_MEDICAUX', 'TYPE_RESPONSABLE',
  'RESPONSABLE_NOMPRE', 'ADRESSE_FACTURATION', 'CODE_POSTAL', 'RESPONSABLE_VILLE', 'MAIL_FACTURATION'];
}
