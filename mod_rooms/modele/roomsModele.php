<?php

class RoomModele extends modele
{
    private $parametre = array(); //tableau

    function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function getRooms()
    {
        $sql = "SELECT * FROM rooms";
        $resultat = $this->executeRequete($sql);

       if ($resultat->rowCount() > 0) {
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $rooms[] = new RoomsTable($row);
            }
            return $rooms;

        } else {
            return null;
        }
    }

    public function getIncrementedLastRoom(){
        $resultat = $this->executeRequete("SELECT MAX(Room) AS LastRoom FROM rooms;");
        $row = $resultat->fetch(PDO::FETCH_ASSOC);
        $LastRoom = $row['LastRoom'];
        return $LastRoom + 110;
    }

    public function getRoom(){
        $sql = "SELECT * FROM rooms WHERE Room = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['Room']));
        $room = new RoomsTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $room;
    }

    public function createRoom(RoomsTable $valeurs){
        $sql = "INSERT INTO rooms(Hotel, Room, RoomType, Price, Comments, RoomStatus VALUES(?,?,?,?,?,?)";
        $params =[
            $valeurs->getHotel(),
            $valeurs->getRoom(),
            $valeurs->getRoomType(),
            $valeurs->getPrice(),
            $valeurs->getComments(),
            $valeurs->getRoomStatus(),

        ];
        $this->executeRequete($sql, $params);
    }

    public function updateRoom(RoomsTable $valeurs){
        $sql = "UPDATE rooms SET Hotel = ?, RoomType = ?, Price = ?, Comments = ?, RoomStatus = ? WHERE Room = ?";
        $params =[
            $valeurs->getHotel(),
            $valeurs->getRoom(),
            $valeurs->getRoomType(),
            $valeurs->getPrice(),
            $valeurs->getComments(),
            $valeurs->getRoomStatus(),

        ];
        $this->executeRequete($sql, $params);
    }
}