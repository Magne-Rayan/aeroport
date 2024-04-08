<?php
class Pilote extends Utilisateur {
    private $dateDebut;
    private $dateFin;

    /**
     * @param $dateDebut
     * @param $dateFin
     */
    public function __construct($dateDebut, $dateFin)
    {
        parent:: __construct();
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }
}