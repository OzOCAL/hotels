
<?php
/**
 * Description of autoloder
 *
 * @author tvosgiens
 */
class Autoloader{

    public static function chargerClasses(){
        // Paramètres : le nom de la classe (ici la classe en cours Autoloader)
        // et de la méthode qui s'occupe du chargement
      spl_autoload_register(array(__CLASS__,'autoload'));
        // A chaque new, il vérifie son existence, si il la trouve il l'a met en mémoire

    }

    public static function autoload($maClasse){
        //$maClasse accepte le nom de la classe : Accueil,
        //AccueilControleur, AccueilModele ou AccueilVue par exemple

        //mettre en minuscule la première lettre de la classe
        //Puisque nous recherchons le chemein (nom du script) qui est en minuscule
        $maClasse = lcfirst($maClasse);

        // chargement dans une variable "repertoires" de la liste
        // des répertoires qui peuvent contenir les classes
        $repertoires = array(
            'mod_accueil/',
            'mod_accueil/controleur/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_paymenttypes/',
            'mod_paymenttypes/controleur/',
            'mod_paymenttypes/modele/',
            'mod_paymenttypes/vue/',
            'mod_reservations/',
            'mod_reservations/controleur/',
            'mod_reservations/modele/',
            'mod_reservations/vue/',
            'mod_roomtypes/',
            'mod_roomtypes/controleur/',
            'mod_roomtypes/modele/',
            'mod_roomtypes/vue/',
            'mod_rooms/',
            'mod_rooms/controleur/',
            'mod_rooms/modele',
            'mod_rooms/vue'
            // Rajouter les répertoires dans lequels il y a une noucelle classe
        );

        //Recherche dans chaque répertoire listé
        foreach($repertoires as $repertoire)
        {
            //vérifie si un fichier .php existe dans les répertoires
            // stockés dans le tableau repertoires ? si oui il l'enregistre !
            if(file_exists($repertoire.$maClasse. '.php'))
            {
                require_once($repertoire.$maClasse. '.php');
                return;
            }
        }
    }
}


