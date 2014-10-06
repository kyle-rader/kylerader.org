<?php

class Team {

    public $id;
    public $teamName;
    public $teamLeadFirstName;
    public $teamLeadLastName;
    public $teamLeadEmail;
    public $teamLeadClass;
    public $teamCode;

    function __construct($data) {
        $this->id = $data['id'];
        $this->teamName = $data['teamName'];
        $this->teamLeadFirstName = $data['teamLeadFirstName'];
        $this->teamLeadLastName = $data['teamLeadLastName'];
        $this->teamLeadEmail = $data['teamLeadEmail'];
        $this->teamLeadClass = $data['teamLeadClass'];
        $this->teamCode = $data['teamCode'];
    }

    static function LoadTeamFromId($mysqli, $teamId) {
        $data = array();
        $sql = 'SELECT * FROM Teams WHERE id = ?';
        if($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $teamId);
            $stmt->execute();
            $stmt->bind_result($id, $teamName, $teamLeadFirstName, $teamLeadLastName, $teamLeadEmail, $teamLeadClass, $teamCode);
            if($stmt->fetch()) {
                $data['id'] = $id;
                $data['teamName'] = $teamName;
                $data['teamLeadFirstName'] = $teamLeadFirstName;
                $data['teamLeadLastName'] = $teamLeadLastName;
                $data['teamLeadEmail'] = $teamLeadEmail;
                $data['teamLeadClass'] = $teamLeadClass;
                $data['teamCode'] = $teamCode;
            }
            $stmt->close();
        }
        return new Team($data);
    }

    static function LoadTeamFromName($mysqli, $teamNameToFind) {
        $data = array();
        $sql = "SELECT * FROM Teams WHERE teamName = ?";
        if($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("s", $teamNameToFind);
            $stmt->execute();
            $stmt->bind_result($id, $teamName, $teamLeadFirstName, $teamLeadLastName, $teamLeadEmail, $teamLeadClass, $teamCode);
            if($stmt->fetch()) {
                $data['id'] = $id;
                $data['teamName'] = $teamName;
                $data['teamLeadFirstName'] = $teamLeadFirstName;
                $data['teamLeadLastName'] = $teamLeadLastName;
                $data['teamLeadEmail'] = $teamLeadEmail;
                $data['teamLeadClass'] = $teamLeadClass;
                $data['teamCode'] = $teamCode;
            }
            $stmt->close();
        }
        return count($data) > 0 ? new Team($data) : null;
    }

    function save($mysqli) {
        $sucess = false;
        if ($this->id  == 0) {
            $sql = <<<EOT
INSERT INTO Teams
(teamName, teamLeadFirstName, teamLeadLastName, teamLeadEmail, teamLeadClass, teamCode)
VALUES (?, ?, ?, ?, ?, ?)
EOT;
            if($stmt = $mysqli->prepare($sql)) {
                $teamCode = md5($this->teamCode);
                $stmt->bind_param("ssssss", $this->teamName, $this->teamLeadFirstName, $this->teamLeadLastName, $this->teamLeadEmail, $this->teamLeadClass, $teamCode);
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
        $sql = 'DELETE FROM Teams WHERE id = ?';
        if($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $this->id);
            if($stmt->execute()) {
                $mysqli->commit();
            }
            $stmt->close();
        }
    }

    function checkTeamCode($codeToCheck) {
        return md5($codeToCheck) == $this->teamCode;
    }
}
?>
