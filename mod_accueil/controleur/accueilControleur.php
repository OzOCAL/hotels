<?php


class AccueilControleur
{
    private $parametre = [];
    private $oVue ; //Objet
    private $model;

    public function __construct($parametre){

        $this->parametre =$parametre;
        $this->model = new AccueilModele();
        $this->oVue = new AccueilVue($this->parametre);
    }

    /* public function displayRerservations() {

        $reservations = $this->model->getReservations();
        

    $this->oVue->genererAffichage(['reservations' => $reservations]); */

        /*if (is_array($reservations)) {
            // Passer les données des réservations à la vue
            $this->oVue->genererAffichage(['reservations' => $reservations]);
        } else {
            // Si aucune réservation trouvée, passer un tableau vide
            $this->oVue->genererAffichage(['reservations' => []]);
        } */
    
    public function liste(){

        $this->oVue->genererAffichage();
    }

}
