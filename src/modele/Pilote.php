<?php
class Pilote extends Utilisateur {

    public function __construct()
    {
        parent:: __construct();

    }

    public function poserVacance($dateDebut,$dateFin){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('INSERT INTO `conger`(`DateDebut`,`DateFin`, `ref_utilisateur`) VALUES ( :dateDebut, :dateFin,:ref _utilisateur)');

        $req->execute(array(
            'dateDebut' => $this->$dateDebut,
            'dateFin' => $this->$dateFin,
            'ref_utilisateur' => $this->getIdUser(),

        ));
        echo "Vous avez pris vos vacances du ".$dateDebut." au ".$dateFin;
    }


}