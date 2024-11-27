<?php
/**
 *  Class PaymenttypesModele
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 *
 */

class PaymenttypesModele extends modele
{
    private $parametre = array(); //tableau


    function __construct($parametre)
    {
        $this->parametre = $parametre;
    }


    public function getListePaymenttypes()
    {
        $sql = "SELECT * FROM Paymenttypes";
        $resultat = $this->executeRequete($sql);


       if ($resultat->rowCount() > 0) {
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $listePaymenttypes[] = new PaymenttypesTable($row);
            }
            return $listePaymenttypes;
        } else {
            return null;
        }
    }

    public function getUnPaymenttype(){

        $sql = "SELECT * FROM paymenttypes WHERE Payment = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['Payment']));
        $unPaymenttype = new PaymenttypesTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $unPaymenttype;
    }

    public function incrementLastPayment(){
        $sql = "SELECT MAX(Payment) as lastPayment FROM paymenttypes";
        $resultat = $this->executeRequete($sql);

        $row = $resultat->fetch(PDO::FETCH_ASSOC);
        $lastIdPayment = $row['lastPayment'];
        return $lastIdPayment + 1;
         
    }

    public function createPaymenttype(PaymenttypesTable $valeurs){
        $sql = "INSERT INTO paymenttypes (Payment, Description) VALUES (?, ?)";
        $this->executeRequete($sql, [
            $valeurs->getPayment(),
            $valeurs->getDescription()
        ]);
    }

    public function updatePaymenttype(PaymenttypesTable $valeurs){
        $sql = "UPDATE paymenttypes SET Description = ? WHERE Payment = ?";
        $this->executeRequete($sql, [
            $valeurs->getDescription(),
            $valeurs->getPayment()
        ]);
    }

    public function deletePaymenttype(PaymenttypesTable $valeurs){
        $sql = "DELETE FROM paymenttypes WHERE Payment = ?";
        $this->executeRequete($sql, [$valeurs->getPayment()]);
    }

}
