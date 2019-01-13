<?php

    class MyHomeBoardPHP {

        private $db;
    
        public function __construct(PDO $db){
        $this->db = $db;
        }
    
        function AllLinkHeaders()
        {
            $q = "SELECT * FROM `tblLinkHeaders` ORDER BY `HeaderOrder` ASC";
            $query = $this->db->prepare($q);
            $query->execute();
            return $query->fetchall();
        }

        function AllLinksPerHID($LHID)
        {
            $q = "SELECT * FROM `tblLink` WHERE `HID` = '$LHID' ORDER BY `LinkOrder` ASC";
            $query = $this->db->prepare($q);
            $query->execute();
            return $query->fetchall();
        }

        function StandaloneLinks()
        {
            $q = "SELECT * FROM `tblLink` WHERE `HID` = '0' ORDER BY `LinkOrder` ASC";
            $query = $this->db->prepare($q);
            $query->execute();
            return $query->fetchall();
        }
  
    }
?>
  