<?php


class ReservationsVue
{

    private $parametre = array(); //tableau
    private $tpl; // objet smarty

    public function __construct($parametre){

        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    private function chargementValeurs() {

        $this->tpl->assign('login', 'Ici le nom de la personne identifiée');
        $this->tpl->assign('titreVue', 'Les Hôtels');
    }


    public function genererAffichageReservations($valeurs){

        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Liste des réservations');
        $this->tpl->assign('reservations', $valeurs);
        $this->tpl->display('mod_reservations/vue/reservationsListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs){

            $this->chargementValeurs();
        
            if(isset($this->parametre['action'])){
        
                switch($this->parametre['action']){
        
                    case 'form_ajouter' :
                        case 'ajouterReservation':
                        $this->tpl->assign('id', null !== $valeurs->getIncrementedLastResNo() ? $valeurs->getIncrementedLastResNo() : null);
                        $this->tpl->assign('reservation', $valeurs);
                        $this->tpl->assign('action', value :'ajouterReservation');
                        $this->tpl->assign('titrePage', 'Ajouter une réservation');
                        break;
                    
                    case 'form_consulter' :
                        $this->tpl->assign('reservation', $valeurs);
                        $this->tpl->assign('action', null);
                        $this->tpl->assign('titrePage', 'Consulter une réservation');
                        break;
        
                    case 'form_modifier' :
                        case "modifierReservation":
                        $this->tpl->assign('reservation', $valeurs);
                        $this->tpl->assign('action', value :'modifierReservation');
                        $this->tpl->assign('titrePage', 'Modifer une réservation');
                        break;
        
                    case 'form_supprimer' :
                        case "supprimerReservation":
                        $this->tpl->assign('reservation', $valeurs);
                        $this->tpl->assign('action', value :'supprimerReservation');
                        $this->tpl->assign('titrePage', 'Confirmer la suppression de la réservation ?');
                        break;
        
                }
            }
        $this->tpl->display('mod_reservations/vue/reservationsFicheVue.tpl');
    }
}