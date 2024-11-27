<?php

class RoomtypesModele extends Modele
{
    private $parametre = array(); //tableau


    function __construct($parametre)
    {
        $this->parametre = $parametre;
    }


    public function getListeRoomTypes()
    {
        $sql = "SELECT * FROM roomtypes";
        $resultat = $this->executeRequete($sql);


       if ($resultat->rowCount() > 0) {
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $listeRoomtypes[] = new RoomtypesTable($row);
            }
            return $listeRoomtypes;
        } else {
            return null;
        }
    }

    public function getUnRoomType(){
        $sql = "SELECT * FROM roomtypes WHERE RoomType = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['RoomType']));
        $unRoomType = new RoomtypesTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $unRoomType;
    }

    public function getIncrementedLastRoomType(){
        $resultat = $this->executeRequete("SELECT MAX(RoomType) AS lastRoomType FROM roomtypes");
        $row = $resultat->fetch(PDO::FETCH_ASSOC);
        $lastRoomType = $row['lastRoomType'];
        return $lastRoomType + 1;
    }

    public function createRoomType(RoomtypesTable $valeurs){
        $sql = "INSERT INTO roomtypes(RoomType, Beds, Description) VALUES (?,?,?)";
        $this->executeRequete($sql, [
            $valeurs->getRoomType(),
            $valeurs->getBeds(),
            $valeurs->getDescription()
        ]);
    }

    public function updateRoomType(RoomtypesTable $valeurs){
        $sql = "UPDATE roomtypes SET Beds = ?, Description = ? WHERE RoomType = ?";
        $this->executeRequete($sql, [
            $valeurs->getBeds(),
            $valeurs->getDescription(),
            $valeurs->getRoomType()
        ]);
    }

    public function deleteRoomType(RoomtypesTable $valeurs){
        $this->executeRequete("DELETE FROM roomtypes WHERE RoomType = ?", [$valeurs->getRoomType()]);
    }
}