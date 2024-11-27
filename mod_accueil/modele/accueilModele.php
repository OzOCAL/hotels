<?php

/**
 * Class AccueilModele
 */
class AccueilModele extends Modele
{

    public function getReservations() {
        $sql = "SELECT * FROM reservations /* WHERE DateIn > CURDATE() ORDER BY DateIn DESC */";
        $resultat = $this->executeRequete($sql);

        }
    }


