<?php
class Avions{
    private $id;
    private $model;
    private $nbPlace;
    private $ref_compagnie;

    /**
     * @param $id
     * @param $model
     * @param $nbPlace
     * @param $ref_compagnie
     */
    public function __construct($id, $model, $nbPlace, $ref_compagnie)
    {
        $this->id = $id;
        $this->model = $model;
        $this->nbPlace = $nbPlace;
        $this->ref_compagnie = $ref_compagnie;
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
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * @param mixed $nbPlace
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;
    }

    /**
     * @return mixed
     */
    public function getRefCompagnie()
    {
        return $this->ref_compagnie;
    }

    /**
     * @param mixed $ref_compagnie
     */
    public function setRefCompagnie($ref_compagnie)
    {
        $this->ref_compagnie = $ref_compagnie;
    }
}