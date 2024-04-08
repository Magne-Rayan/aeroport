<?php
class Reservation{
    private $id;
    private $num;
    private $ref_utilisateur;
    private $ref_avion;

    /**
     * @param $id
     * @param $num
     * @param $ref_utilisateur
     * @param $ref_avion
     */
    public function __construct($id, $num, $ref_utilisateur, $ref_avion)
    {
        $this->id = $id;
        $this->num = $num;
        $this->ref_utilisateur = $ref_utilisateur;
        $this->ref_avion = $ref_avion;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return mixed
     */
    public function getRefUtilisateur()
    {
        return $this->ref_utilisateur;
    }

    /**
     * @param mixed $ref_utilisateur
     */
    public function setRefUtilisateur($ref_utilisateur)
    {
        $this->ref_utilisateur = $ref_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getRefAvion()
    {
        return $this->ref_avion;
    }

    /**
     * @param mixed $ref_avion
     */
    public function setRefAvion($ref_avion)
    {
        $this->ref_avion = $ref_avion;
    }
}