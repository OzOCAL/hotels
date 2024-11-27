<?php


class PaymenttypesControleur
{

    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;
        $this->oModele = new PaymenttypesModele($parametre);
        $this->oVue = new PaymenttypesVue($parametre);
    }

    public function lister(){

        $valeurs = $this->oModele->getListePaymenttypes();
        $this->oVue->genererAffichagePaymenttypes($valeurs);
    }

    public function form_consulter(){

        $valeurs = $this->oModele->getUnPaymenttype();
        $this->oVue->genererAffichageFiche($valeurs);

    }

    public function form_modifier(){

        $valeurs = $this->oModele->getUnPaymenttype();
        $this->oVue->genererAffichageFiche($valeurs);

    }

    public function form_ajouter(){

        $valeurs = new PaymentTypesTable();
        $incrementedLastPaymentId = $this->oModele->incrementLastPayment();
        $valeurs->setIncrementedLastPaymentId($incrementedLastPaymentId);
        $this->oVue->genererAffichageFiche($valeurs);

    }
    
    public function form_supprimer(){

        $valeurs = $this->oModele->getUnPaymenttype();
        $this->oVue->genererAffichageFiche($valeurs);

    }

    public function ajouterTypePaiement(){
        $typePaiement = new PaymenttypesTable($this->parametre);
        $this->oModele->createPaymenttype($typePaiement);
        $this->lister();
    }

    public function modifierTypePaiement(){
        $typePaiement = new PaymenttypesTable($this->parametre);
        $this->oModele->updatePaymenttype($typePaiement);
        $this->lister();

    }

    public function supprimerTypePaiement(){
        $typePaiement = new PaymenttypesTable($this->parametre);
        $this->oModele->deletePaymenttype($typePaiement);
        $this->lister();

    }
    
}
