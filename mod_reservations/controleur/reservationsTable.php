<?php

/**
 * Class PaymenttypesTable
 */
class ReservationsTable
{
    // 1 déclarer les propriétés (attributs)
    private $ResNo = "";
    private $incrementedLastResNoId = "";
    private $LastName = "";
    private $FirstName = "";
    private $Address = "";
    private $City = "";
    private $State = "";
    private $Postal = "";
    private $Phone = "";
    private $Payment = "";
    private $Amount = "";
    private $Hotel = "";
    private $Room = "";
    private $DateIn = "";
    private $DateOut = "";
    private $DateNow = "";
// Définir toutes les propriétés de la table

    // 2 importer la méthode hydrater !
    public function hydrater(array $row) {

        foreach ($row as $k => $v) {
            // Concaténation : nom de la méthode setter à appeler
            $setter = 'set' . ucfirst($k);
            // fonction prend 2 paramètres : l'objet en cours et le nom de la méthode
            if (method_exists($this, $setter)) {
                // Invoquer la méthode
                $this->$setter($v);
            }
        }
    }

    // 3 puis  le constructeur !
    public function __construct($data = null) {

        if ($data != null) {

            $this->hydrater($data);
        }
    }


    // 4 ALT + INSER pour générer setter et getter !
    /**
     * @return int
     */
    public function getResNo()
    {
        return $this->ResNo;
    }

    /**
     * @param int $Payment
     */
    public function setResNo($ResNo)
    {
        return $this->ResNo = $ResNo;
    }

    public function getIncrementedLastResNo()
    {
        return $this->incrementedLastResNoId;
    }

    public function setIncrementedLastResNo($incrementedLastResNoId)
    {
        return $this->incrementedLastResNoId = $incrementedLastResNoId;
    }


    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    public function setLastName($LastName)
    {
        return $this->LastName = $LastName;
    }

    /**
     * @param string $FirstName
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName($FirstName)
    {
        return $this->FirstName = $FirstName;
    }

    /**
     * @param string $Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     */
    public function setAddress($Address)
    {
        return $this->Address = $Address;
    }

    /**
     * @param string $City
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity($City)
    {
        return $this->City = $City;
    }

    /**
     * @param string $State
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     */
    public function setState($State)
    {
        return $this->State = $State;
    }

    /**
     * @param int $Postal
     */
    public function getPostal()
    {
        return $this->Postal;
    }

    /**
     * @param int $Postal
     */
    public function setPostal($Postal)
    {
        return $this->Postal = $Postal;
    }

    /**
     * @param string $Phone
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     */
    public function setPhone($Phone)
    {
        return $this->Phone = $Phone;
    }

    /**
     * @param int $Payment
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * @param int $Payment
     */
    public function setPayment($Payment)
    {
        return $this->Payment = $Payment;
    }

    /**
     * @param string $Amount
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * @param string $Amount
     */
    public function setAmount($Amount)
    {
        return $this->Amount = $Amount;
    }
    /**
     * @param int $Hotel
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * @param int $Hotel
     */
    public function setHotel($Hotel)
    {
        return $this->Hotel = $Hotel;
    }
    /**
     * @param int $Room
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * @param int $Room
     */
    public function setRoom($Room)
    {
        return $this->Room = $Room;
    }

    /**
     * @param string $DateIn
     */
    public function getDateIn()
    {
        return $this->DateIn;
    }

    /**
     * @param string $DateIn
     */
    public function setDateIn($DateIn)
    {
        return $this->DateIn = $DateIn;
    }

    /**
     * @param string $DateOut
     */
    public function getDateOut()
    {
        return $this->DateOut;
    }

    /**
     * @param string $DateOut
     */
    public function setDateOut($DateOut)
    {
        return $this->DateOut = $DateOut;
    }

    /**
     * @param string $DateNow
     */
    public function getDateNow()
    {
        return $this->DateNow;
    }

    /**
     * @param string $DateNow
     */
    public function setDateNow($DateNow)
    {
        return $this->DateNow = $DateNow;
    }

}
