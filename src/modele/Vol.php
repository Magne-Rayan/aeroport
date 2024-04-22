<?php
class Vol{
    private $id;
    private $numVol;
    private $heureDepp;
    private $heureArr;
    private $ref_ville;
    private $ref_avion;

    /**
     * @param $id
     * @param $numVol
     * @param $heureDepp
     * @param $heureArr
     * @param $ref_ville
     * @param $ref_avion
     */
    public function __construct($id, $numVol, $heureDepp, $heureArr, $ref_ville, $ref_avion)
    {
        $this->id = $id;
        $this->numVol = $numVol;
        $this->heureDepp = $heureDepp;
        $this->heureArr = $heureArr;
        $this->ref_ville = $ref_ville;
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
    public function getNumVol()
    {
        return $this->numVol;
    }

    /**
     * @param mixed $numVol
     */
    public function setNumVol($numVol)
    {
        $this->numVol = $numVol;
    }

    /**
     * @return mixed
     */
    public function getHeureDepp()
    {
        return $this->heureDepp;
    }

    /**
     * @param mixed $heureDepp
     */
    public function setHeureDepp($heureDepp)
    {
        $this->heureDepp = $heureDepp;
    }

    /**
     * @return mixed
     */
    public function getHeureArr()
    {
        return $this->heureArr;
    }

    /**
     * @param mixed $heureArr
     */
    public function setHeureArr($heureArr)
    {
        $this->heureArr = $heureArr;
    }

    /**
     * @return mixed
     */
    public function getRefVille()
    {
        return $this->ref_ville;
    }

    /**
     * @param mixed $ref_ville
     */
    public function setRefVille($ref_ville)
    {
        $this->ref_ville = $ref_ville;
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
