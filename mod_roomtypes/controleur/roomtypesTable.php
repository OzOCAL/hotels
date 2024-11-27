<?php

/**
 * Class PaymenttypesTable
 */
class RoomtypesTable
{
    // 1 déclarer les propriétés (attributs)
    private $RoomType = "";
    private $incrementedLastRoomType = "";
    private $Beds = "";
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

        public function getRoomType(){
            return $this->RoomType;
        }

        public function setRoomType($RoomType){
            return $this->RoomType = $RoomType;
        }

        public function getIncrementedLastRoomType(){
            return $this->incrementedLastRoomType;
        }

        public function setIncrementedLastRoomType($incrementedLastRoomType){
            return $this->incrementedLastRoomType = $incrementedLastRoomType;
        }

        public function getBeds(){
            return $this->Beds;
        }

        public function setBeds($Beds){
            return $this->Beds = $Beds;
        }

        public function getDescription(){
            return $this->Description;
        }

        public function setDescription($Description){
            return $this->Description = $Description;
        }
}