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
        $id = $data['id'];
        $companyName = $data['companyName'];
        $contactName = $data['contactName'];
        $contactEmail = $data['contactEmail'];
        $companySize = $data['companySize'];
        $sponsorPledge = $data['sponsorPledge'];
        $swag = $data['swag'];
        $judgeName = $data['judgeName'];
        $judgeEmail = $data['judgeEmail'];
        $judgePosition = $data['judgePosition'];
        $judgeAttendOpeningLunch = $data['judgeAttendOpeningLunch'];
    }

    static function LoadCompany($mysqli, $companyId) {
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

    function save() {
        if ($id  == 0) {
            $sql = <<<EOT
INSERT INTO HackathonCompanies
(id, companyName, contactName, contactEmail, companySize, sponsorPledge, swag, judgeName, judgeEmail, judgePosition, judgeAttendOpeningLunch)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOT;
            if($stmt = $mysqli->prepare($sql)) {
                $stmt->bind_param("isssiissssi", $id, $companyName, $contactName, $contactEmail, $companySize, $sponsorPledge, $swag, $judgeName, $judgeEmail, $judgePosition, $judgeAttendOpeningLunch);
                if($stmt->execute()) {
                    $mysqli->commit();
                }
                $stmt->close();
            }
        }
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
