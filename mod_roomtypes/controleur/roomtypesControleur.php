<?php


class RoomtypesControleur
{
    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;
        $this->oModele = new RoomtypesModele($parametre);
        $this->oVue = new RoomtypesVue($parametre);
    }

    public function lister(){

        $valeurs = $this->oModele->getListeRoomTypes();
        $this->oVue->genererAffichageRoomtypes($valeurs);
    }

    public function form_consulter(){
        $valeurs = $this->oModele->getUnRoomType();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_modifier(){

        $valeurs = $this->oModele->getUnRoomtype();
        $this->oVue->genererAffichageFiche($valeurs);

    }

    public function form_ajouter(){
        $valeurs = new RoomtypesTable();
        $incrementedLastRoomType = $this->oModele->getIncrementedLastRoomType();
        $valeurs->setIncrementedLastRoomType($incrementedLastRoomType);
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_supprimer(){

        $valeurs = $this->oModele->getUnRoomtype();
        $this->oVue->genererAffichageFiche($valeurs);

    }

    public function ajouter(){
        $RoomType = new RoomtypesTable($this->parametre);
        $this->oModele->createRoomType($RoomType);
        $this->lister();
    }

    public function modifier(){
        $RoomType = new RoomtypesTable($this->parametre);
        $this->oModele->updateRoomType($RoomType);
        $this->lister();

    }

    public function supprimer(){
        $RoomType = new RoomtypesTable($this->parametre);
        $this->oModele->deleteRoomType($RoomType);
        $this->lister();

    }
}