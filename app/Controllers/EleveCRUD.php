<?php
namespace App\Controllers;
use App\Models\EleveModel;
use CodeIgniter\Controller;

class EleveCRUD extends BaseController {

  private function drop_empty($var)
  {
    return ($var === '') ? NULL : $var;
  }

  public function lister() {
    $EleveModel = new EleveModel();
    $data['eleve_inscriptions'] = $EleveModel->orderBy('NOM')->findAll();
    return view('lister',$data);
  }

  public function create() {
    return view('inscription');
  }

  public function store()
  {
    $EleveModel = new EleveModel();
    $data = EleveCRUD::charge_form();
    $data = array_filter($data, array($this, 'drop_empty'));

    d($data);

    if (!empty($data)) {
      $EleveModel->insert($data);
      return $this->response->redirect(route_to('accueil'));
    }
    else {
      return view('inscription');
    }
  }

  public function edit() {
    return view('modification');
  }

  public function update()
  {
    $EleveModel = new EleveModel();
    $data = EleveCRUD::charge_form();

    $data = array_filter($data, array($this, 'drop_empty'));

    d($data);

    if (!empty($data)) {
      $EleveModel->update($data);
      return $this->response->redirect(route_to('accueil'));
    }
    else {
      return view('inscription');
    }
  }

  public function charge_form(){
    $data = [
      'NOM' => $this->request->getVar('NOM'),
      'PRENOM'  => $this->request->getVar('PRENOM'),
      'SEXE'  => $this->request->getVar('SEXE'),
      'DATE_NAISSANCE'  => $this->request->getVar('DATE_NAISSANCE'),
      'ETABLISSEMENT'  => $this->request->getVar('ETABLISSEMENT'),
      'VILLE'  => $this->request->getVar('VILLE'),
      'CLASSE'  => $this->request->getVar('CLASSE'),
      'ADHERENT_ALAE'  => $this->request->getVar('ADHERENT_ALAE'),
      'SITE_ACCUEIL'  => $this->request->getVar('SITE_ACCUEIL'),
      'PORTABLE_MERE'  => $this->request->getVar('PORTABLE_MERE'),
      'PORTABLE_PERE'  => $this->request->getVar('PORTABLE_PERE'),
      'ADRESSE_MAIL_MERE'  => $this->request->getVar('ADRESSE_MAIL_MERE'),
      'ADRESSE_MAIL_PERE'  => $this->request->getVar('ADRESSE_MAIL_PERE'),
      'PROBLEME_MEDICAUX'  => $this->request->getVar('PROBLEME_MEDICAUX'),
      'TYPE_RESPONSABLE'  => $this->request->getVar('TYPE_RESPONSABLE'),
      'RESPONSABLE_NOMPRE'  => $this->request->getVar('RESPONSABLE_NOMPRE'),
      'ADRESSE_FACTURATION'  => $this->request->getVar('ADRESSE_FACTURATION'),
      'CODE_POSTAL'  => $this->request->getVar('CODE_POSTAL'),
      'RESPONSABLE_VILLE'  => $this->request->getVar('RESPONSABLE_VILLE'),
      'MAIL_FACTURATION'  => $this->request->getVar('MAIL_FACTURATION'),
    ];
    return $data;
  }
}
