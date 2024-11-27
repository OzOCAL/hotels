<?php
/**
 *  Class PaymenttypesModele
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 *
 */

class ReservationsModele extends modele
{
    private $parametre = array(); //tableau

    function __construct($parametre)
    {
        $this->parametre = $parametre;
    }


    public function getReservations()
    {
        $sql = "SELECT * FROM reservations";
        $resultat = $this->executeRequete($sql);

       if ($resultat->rowCount() > 0) {
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $reservations[] = new ReservationsTable($row);
            }
            return $reservations;

        } else {
            return null;
        }
    }

    public function getIncrementedLastResNo(){
        $resultat = $this->executeRequete("SELECT MAX(ResNo) AS LastResNo FROM reservations;");
        $row = $resultat->fetch(PDO::FETCH_ASSOC);
        $LastResNo = $row['LastResNo'];
        return $LastResNo + 1;
    }

    public function getReservation(){
        $sql = "SELECT * FROM reservations WHERE ResNo = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['ResNo']));
        $reservation = new ReservationsTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $reservation;
    }

    public function createReservation(ReservationsTable $valeurs){
        $now = date('Y-m-d H:i:s');
        $sql = "INSERT INTO reservations(ResNo, LastName, FirstName, Address, City, State, Postal, Phone, Payment, Amount, Hotel, Room, DateIn, DateOut, DateNow) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $params =[
            $valeurs->getResNo(),
            $valeurs->getLastName(),
            $valeurs->getFirstName(),
            $valeurs->getAddress(),
            $valeurs->getCity(),
            $valeurs->getState(),
            $valeurs->getPostal(),
            $valeurs->getPhone(),
            $valeurs->getPayment(),
            $valeurs->getAmount(),
            $valeurs->getHotel(),
            $valeurs->getRoom(),
            $valeurs->getDateIn(),
            $valeurs->getDateOut(),
            $now
        ];
        $this->executeRequete($sql, $params);
    }

    public function updateReservation(ReservationsTable $valeurs){
        $sql = "UPDATE reservations SET LastName = ?, FirstName = ?, Address = ?, City = ?, State = ?, Postal = ?, Phone = ?, Payment = ?, Amount = ?, Hotel = ?, Room = ?, DateIn = ?, DateOut = ?, DateNow = ? WHERE ResNo = ?";
        $params = [
            $valeurs->getLastName(),
            $valeurs->getFirstName(),
            $valeurs->getAddress(),
            $valeurs->getCity(),
            $valeurs->getState(),
            $valeurs->getPostal(),
            $valeurs->getPhone(),
            $valeurs->getPayment(),
            $valeurs->getAmount(),
            $valeurs->getHotel(),
            $valeurs->getRoom(),
            $valeurs->getDateIn(),
            $valeurs->getDateOut(),
            $valeurs->getDateNow(),
            $valeurs->getResNo()
        ];
        $this->executeRequete($sql, $params);
    }

    public function deleteReservation(ReservationsTable $valeurs){
        $sql = "DELETE FROM reservations WHERE ResNo = ?";
        $this->executeRequete($sql, [$valeurs->getResNo()]);
    }
}
