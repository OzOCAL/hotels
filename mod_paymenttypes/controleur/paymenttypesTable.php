<?php

/**
 * Class PaymenttypesTable
 */
class PaymenttypesTable
{
    // 1 déclarer les propriétés (attributs)
    private $Payment = "";
    private $incrementedLastPaymentId = "";
    private $Description = "";


    // 2 importer la méthode hydrater !
    public function hydrater(array $row) {

        foreach ($row as $k => $v) {
            $setter = 'set' . ucfirst($k);
            if (method_exists($this, $setter)) {
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
     * @return string
     */
    public function getPayment()
    {
        return $this->Payment;
    }


    /**
     * @param string $Payment
     */
    public function setPayment($Payment)
    {
        $this->Payment = $Payment;
    }

     /**
     * @param string $IncrementedLastPaymentId
     */

    public function setIncrementedLastPaymentId($id) {
        $this->incrementedLastPaymentId = $id;
    }

    public function getIncrementedLastPaymentId() {
        return $this->incrementedLastPaymentId;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

}
