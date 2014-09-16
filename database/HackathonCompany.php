<?php

class HackathonCompany {

    public $id;
    public $companyName;
    public $contactName;
    public $contactEmail;
    public $companySize;
    public $sponsorPledge;
    public $swag;
    public $judgeName;
    public $judgeEmail;
    public $judgePosition;
    public $judgeAttendOpeningLunch;

    function __construct($data) {
        $this->id = $data['id'];
        $this->companyName = $data['companyName'];
        $this->contactName = $data['contactName'];
        $this->contactEmail = $data['contactEmail'];
        $this->companySize = $data['companySize'];
        $this->sponsorPledge = $data['sponsorPledge'];
        $this->swag = $data['swag'];
        $this->judgeName = $data['judgeName'];
        $this->judgeEmail = $data['judgeEmail'];
        $this->judgePosition = $data['judgePosition'];
        $this->judgeAttendOpeningLunch = $data['judgeAttendOpeningLunch'];
    }

    static function LoadCompanyFromId($mysqli, $companyId) {
        $data = array();
        $sql = 'SELECT * FROM HackathonCompanies WHERE id = ?';
        if($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $companyId);
            $stmt->execute();
            $stmt->bind_result($id, $companyName, $contactName, $contactEmail, $companySize, $sponsorPledge, $swag, $judgeName, $judgeEmail, $judgePosition, $judgeAttendOpeningLunch);
            if($stmt->fetch()) {
                $data['id'] = $id;
                $data['companyName'] = $companyName;
                $data['contactName'] = $contactName;
                $data['contactEmail'] = $contactEmail;
                $data['companySize'] = $companySize;
                $data['sponsorPledge'] = $sponsorPledge;
                $data['swag'] = $swag;
                $data['judgeName'] = $judgeName;
                $data['judgeEmail'] = $judgeEmail;
                $data['judgePosition'] = $judgePosition;
                $data['judgeAttendOpeningLunch'] = $judgeAttendOpeningLunch;
            }
            $stmt->close();
        }
        return new HackathonCompany($data);
    }

    static function LoadCompanyFromName($mysqli, $companyNameToFind) {
        $data = array();
        $sql = "SELECT * FROM HackathonCompanies WHERE companyName = `?`";
        if($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $companyNameToFind);
            $stmt->execute();
            $stmt->bind_result($id, $companyName, $contactName, $contactEmail, $companySize, $sponsorPledge, $swag, $judgeName, $judgeEmail, $judgePosition, $judgeAttendOpeningLunch);
            if($stmt->fetch()) {
                $data['id'] = $id;
                $data['companyName'] = $companyName;
                $data['contactName'] = $contactName;
                $data['contactEmail'] = $contactEmail;
                $data['companySize'] = $companySize;
                $data['sponsorPledge'] = $sponsorPledge;
                $data['swag'] = $swag;
                $data['judgeName'] = $judgeName;
                $data['judgeEmail'] = $judgeEmail;
                $data['judgePosition'] = $judgePosition;
                $data['judgeAttendOpeningLunch'] = $judgeAttendOpeningLunch;
            }
            $stmt->close();
        }
        return count($data) > 0 ? new HackathonCompany($data) : null;
    }

    function save($mysqli) {
        $sucess = false;
        if ($this->id  == 0) {
            $sql = <<<EOT
INSERT INTO HackathonCompanies
(companyName, contactName, contactEmail, companySize, sponsorPledge, swag, judgeName, judgeEmail, judgePosition, judgeAttendOpeningLunch)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOT;
            if($stmt = $mysqli->prepare($sql)) {
                $stmt->bind_param("ssssssssss", $this->companyName, $this->contactName, $this->contactEmail, $this->companySize, $this->sponsorPledge, $this->swag, $this->judgeName, $this->judgeEmail, $this->judgePosition, $this->judgeAttendOpeningLunch);
                if($stmt->execute()) {
                    $sucess = true;
                    $mysqli->commit();
                }
                $stmt->close();
            }
        }
        return $sucess;
    }

    function delete() {
        $sql = 'DELETE FROM HackathonCompanies WHERE id = ?';
        if($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $id);
            if($stmt->execute()) {
                $mysqli->commit();
            }
            $stmt->close();
        }
    }

}
?>
