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

            if($query->rowCount() > 0)
            {
              return $query->fetchall();
            }
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
            $q = "SELECT * FROM `tblLink` ORDER BY `HID` ASC";
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

        function GetLinkCountPerHID($HID)
        {
            $q = "SELECT * FROM `tblLink` WHERE `HID` = :hid";
            $query = $this->db->prepare($q);
            $query->execute( array('hid'=> $HID) );
            return $query->rowCount();
        }

        function GetHeaderCount()
        {
            $q = "SELECT * FROM `tblLinkHeaders`";
            $query = $this->db->prepare($q);
            $query->execute();
            return $query->rowCount();
        }

        function UpdateLink($lid, $hid, $lname, $lhref, $lorder, $lcvar, $lfonta)
        {
            $q = "UPDATE `tblLink` SET `HID` = :hid, `LinkName` = :lname, `LinkHref` = :lhref, `LinkOrder` = :lorder, `LinkCustomVar` = :lcvar, `LinkFontAwesome` = :lfonta WHERE `LID` = :lid";
            $query = $this->db->prepare($q);
            $query->execute( array( 
                'hid'=>$hid, 
                'lid'=> $lid, 
                'lname'=>$lname,
                'lhref'=>$lhref,
                'lorder'=>$lorder,
                'lcvar'=>$lcvar,
                'lfonta'=>$lfonta
                ) );
        }

        function AddLink($hid, $lname, $lhref, $lorder, $lcvar, $lfonta)
        {
            $q = "INSERT INTO `tblLink`(`HID`, `LinkName`, `LinkHref`, `LinkOrder`, `LinkCustomVar`, `LinkFontAwesome`) VALUES (:hid, :lname, :lhref, :lorder, :lcvar, :lfonta)";
            $query = $this->db->prepare($q);
            $query->execute( array( 
                'hid'=>$hid, 
                'lname'=>$lname,
                'lhref'=>$lhref,
                'lorder'=>$lorder,
                'lcvar'=>$lcvar,
                'lfonta'=>$lfonta
                ) );
        }

        function AddHeader($hname, $hlink, $horder, $hddname, $hfonta)
        {
            $q = "INSERT INTO `tblLinkHeaders`(`HeaderName`, `HeaderLink`, `HeaderOrder`, `HeaderDDName`, `HeaderFontAwesome`) VALUES (:hname, :hlink, :horder, :hddname, :hfonta)";
            $query = $this->db->prepare($q);
            $query->execute( array( 
                'hname'=>$hname,
                'hlink'=>$hlink,
                'horder'=>$horder,
                'hddname'=>$hddname,
                'hfonta'=>$hfonta
                ) );
        }

        function UpdateHeader($hid, $hname, $hlink, $horder, $hddname, $hfonta)
        {
            $q = "UPDATE `tblLinkHeaders` SET `HeaderName` = :hname, `HeaderLink` = :hlink, `HeaderOrder` = :horder, `HeaderDDName` = :hddname, `HeaderFontAwesome` = :hfonta WHERE `HID` = :hid";
            $query = $this->db->prepare($q);
            $query->execute( array( 
                'hid'=>$hid, 
                'hname'=>$hname,
                'hlink'=>$hlink,
                'horder'=>$horder,
                'hddname'=>$hddname,
                'hfonta'=>$hfonta
                ) );
        }
    }
?>
