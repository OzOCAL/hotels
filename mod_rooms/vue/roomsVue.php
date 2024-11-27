<?php

class RoomsVue
{
    private $parametre = array();
    private $tpl;

    public function __construct($parametre){
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementValeurs(){
        $this->tpl->assign('login', 'zz');
        $this->tpl->assign('titreVue', 'Les Hôtels');
    }

    public function genererAffichageRoomtypes($valeurs){
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Liste des types de chambres');
        $this->tpl->assign('roomtypes', $valeurs);
        $this->tpl->display('mod_roomtypes/vue/roomtypesListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs){
        $this->chargementValeurs();

        if(isset($this->parametre['action'])){
            switch($this->parametre['action']){
                
                case 'form_ajouter' :
                    case 'ajouter' ;
                    $this->tpl->assign('id', null !== $valeurs->getIncrementedLastRoomType() ? $valeurs->getIncrementedLastRoomType() : null);
                    $this->tpl->assign('roomtype', $valeurs);
                    $this->tpl->assign('action', value:'ajouter');
                    $this->tpl->assign('titrePage', 'Ajouter un type de chambre');
                    break;

                case 'form_consulter' :
                    $this->tpl->assign('roomtype', $valeurs);
                    $this->tpl->assign('action', null);
                    $this->tpl->assign('titrePage', 'Consulter un type de chambre');
                    break;

                case 'form_modifier':
                    case 'modifier':
                    $this->tpl->assign('roomtype', $valeurs);
                    $this->tpl->assign('action', value : 'modifier');
                    $this->tpl->assign('titrePage', 'Modifier un type de chambre');
                    break;
                
                case 'form_supprimer':
                    case 'supprimer':
                    $this->tpl->assign('roomtype', $valeurs);
                    $this->tpl->assign('action', value:'supprimer');
                    $this->tpl->assign('titrePage', 'Supprimer un type de chambre');
                    break;
            }
        }
        $this->tpl->display('mod_roomtypes/vue/roomtypesFicheVue.tpl');
    }
}