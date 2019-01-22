<?php

    class MyHomeBoardPHP {

        private $db;
    
        public function __construct(PDO $db){
        $this->db = $db;
        }
    
        /* Header drop down functions */

        function DeleteHeader($hid)
        {
            $q = "DELETE LH.*, L.*
            FROM `tblLinkHeaders` LH 
            LEFT JOIN `tblLink` L
            ON L.HID = LH.HID 
            WHERE LH.HID = :hid";
            $query = $this->db->prepare($q);
            $query->execute( array('hid'=> $hid) );
        }

        function GetHeaderInfo($hid)
        {
            $q = "SELECT * FROM `tblLinkHeaders` WHERE `HID` = :hid";
            $query = $this->db->prepare($q);
            $query->execute( array('hid'=> $hid) );
            return $query->fetchall();
        }

        function AllHeaders()
        {
            $q = "SELECT * FROM `tblLinkHeaders`";
            $query = $this->db->prepare($q);
            $query->execute();
            return $query->fetchall();
        }

        function AllLinkHeaders()
        {
            $q = "SELECT * FROM `tblLinkHeaders` ORDER BY `HeaderOrder` ASC";
            $query = $this->db->prepare($q);
            $query->execute();
            return $query->fetchall();
        }

        /* Link functions */
        function AllLinksPerHID($LHID)
        {
            $q = "SELECT * FROM `tblLink` WHERE `HID` = '$LHID' ORDER BY `LinkOrder` ASC";
            $query = $this->db->prepare($q);
            $query->execute();
            return $query->fetchall();
        }

        function AllLinks()
        {
            $q = "SELECT * FROM `tblLink`";
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

        function GetLinkInfo($lid)
        {
            $q = "SELECT * FROM `tblLink` WHERE `LID` = :lid";
            $query = $this->db->prepare($q);
            $query->execute( array('lid'=> $lid) );
            return $query->fetchall();
        }

        function DeleteLink($lid)
        {
            $q = "DELETE FROM `tblLink` WHERE `LID` = :lid";
            $query = $this->db->prepare($q);
            $query->execute( array('lid'=> $lid) );
        }
  
    }
?>
  