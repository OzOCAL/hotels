<?php


class ReservationsControleur
{

    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;
        $this->oModele = new ReservationsModele($parametre);
        $this->oVue = new ReservationsVue($parametre);
    }

    public function lister(){

        $valeurs = $this->oModele->getReservations();
        $this->oVue->genererAffichageReservations($valeurs);
    }

    public function form_ajouter(){

        $valeurs = new ReservationsTable();
        $incrementendLastResNoId = $this->oModele->getIncrementedLastResNo();
        $valeurs->setIncrementedLastResNo($incrementendLastResNoId);
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_consulter(){

        $valeurs = $this->oModele->getReservation();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_modifier(){

        $valeurs = $this->oModele->getReservation();
        $this->oVue->genererAffichageFiche($valeurs);
    }
    public function form_supprimer(){

        $valeurs = $this->oModele->getReservation();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function ajouterReservation(){
        $reservation = new ReservationsTable($this->parametre);
        $this->oModele->createReservation($reservation);
        $this->lister();
    }

    public function modifierReservation(){
        $reservation = new ReservationsTable($this->parametre);
        $dateIn = DateTime::createFromFormat('d/m/Y', $this->parametre['DateIn']);
        $dateOut = DateTime::createFromFormat('d/m/Y', $this->parametre['DateOut']);
        $reservation->setDateIn($dateIn->format('Y-m-d'));
        $reservation->setDateOut($dateOut->format('Y-m-d'));
        $reservation->setDateNow($dateOut->format('Y-m-d H:i:s'));
        $this->oModele->updateReservation($reservation);
        $this->lister();
    }

    public function supprimerReservation(){
        $reservation = new ReservationsTable($this->parametre);
        $this->oModele->deleteReservation($reservation);
        $this->lister();
    }
}
