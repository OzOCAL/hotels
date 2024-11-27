<?php


class PaymenttypesVue
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

    public function genererAffichagePaymenttypes($valeurs){

        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Liste des types de paiements');
        $this->tpl->assign('listePaymenttypes', $valeurs);
        $this->tpl->display('mod_paymenttypes/vue/paymenttypesListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs) {

    $this->chargementValeurs();

    if(isset($this->parametre['action'])){

        switch($this->parametre['action']){

            case 'form_ajouter' :
                case 'ajouterTypePaiement':
                $this->tpl->assign('id', null !== $valeurs->getIncrementedLastPaymentId() ? $valeurs->getIncrementedLastPaymentId() : null);
                $this->tpl->assign('unPaymentType', $valeurs);
                $this->tpl->assign('action', value :'ajouterTypePaiement');
                $this->tpl->assign('titrePage', 'Ajouter un type de paiement');
                break;
            
            case 'form_consulter' :
                $this->tpl->assign('unPaymentType', $valeurs);
                $this->tpl->assign('action', null);
                $this->tpl->assign('titrePage', 'Consulter un type de paiement');
                break;

            case 'form_modifier' :
                case "modifierTypePaiement":
                $this->tpl->assign('unPaymentType', $valeurs);
                $this->tpl->assign('action', value :'modifierTypePaiement');
                $this->tpl->assign('titrePage', 'Modifer un type de paiement');
                break;

            case 'form_supprimer' :
                case "supprimerTypePaiement":
                $this->tpl->assign('unPaymentType', $valeurs);
                $this->tpl->assign('action', value :'supprimerTypePaiement');
                $this->tpl->assign('titrePage', 'Confirmer la suppression du type de paiement ?');
                break;

            }
        }
    $this->tpl->display('mod_paymenttypes/vue/paymenttypesFicheVue.tpl');
    }
}