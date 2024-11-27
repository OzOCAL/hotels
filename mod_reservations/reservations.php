<?php


class Reservations
{

    private $parametre = array(); //tableau
    private $oControleur; // Object

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oControleur = new ReservationsControleur($parametre);
    }



    public function choixAction(){

        if(isset($this->parametre['action'])){

            switch($this->parametre['action']){

                case 'form_ajouter' :
                    $this->oControleur->form_ajouter();
                    break;

                case 'form_consulter' :
                    $this->oControleur->form_consulter();
                    break;

                case 'form_modifier' :
                    $this->oControleur->form_modifier();
                    break;

                case 'form_supprimer' :
                    $this->oControleur->form_supprimer();
                    break;

                case 'ajouterReservation' :
                    $this->oControleur->ajouterReservation();
                    break;

                case 'modifierReservation' :
                    $this->oControleur->modifierReservation();
                    break;

                case 'supprimerReservation' :
                    $this->oControleur->supprimerReservation();
                    break;
            }

        }else{
            $this->oControleur->lister();
        }

    }

}
