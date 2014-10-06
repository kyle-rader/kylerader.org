<?php

class Competitor {

    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $class;
    public $school;
    public $teamId;

    function __construct($data) {
        $this->id = $data['id'];
        $this->firstName = trim($data['firstName']);
        $this->lastName = trim($data['lastName']);
        $this->email = trim($data['email']);
        $this->class = trim($data['class']);
        $this->school = trim($data['school']);
        $this->teamId = $data['teamId'];
    }

    static function LoadCompetitors($mysqli) {
        $competitors = array();
        $sql = 'SELECT c.id, c.firstName, c.lastName, c.email, c.class, c.school, t.teamName FROM Competitors c LEFT JOIN Teams t ON c.teamId = t.id';
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->execute();
            $stmt->bind_result($id, $firstName, $lastName, $email, $class, $school, $teamName);
            while ($stmt->fetch()) {
                $competitors[$id] = array('firstName' => $firstName,
                    'lastName' => $teamLeadFirstName,
                    'email' => $email,
                    'class' => $class,
                    'school' => $school,
                    'teamName' => $teamName);
            }
            $stmt->close();
        }
        return $competitors;
    }

    static function LoadCompetitorDataFromId($mysqli, $id) {
        $data = array();
        $sql = 'SELECT c.*, t.id, t.teamName FROM Competitors c LEFT JOIN Teams t ON c.teamId = t.id WHERE c.id = ?';
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->bind_result($id, $firstName, $lastName, $email, $class, $school, $teamId, $teamName);
            if ($stmt->fetch()) {
                $data['id'] = $id;
                $data['firstName'] = $firstName;
                $data['lastName'] = $lastName;
                $data['email'] = $email;
                $data['class'] = $teamLeadEmail;
                $data['school'] = $school;
                $data['teamId'] = $teamId;
                $data['teamName'] = $teamName;
            }
            $stmt->close();
        }
        return $data;
    }

    static function LoadCompetitorFromEmail($mysqli, $emailToFind) {
        $data = array();
        $sql = "SELECT * FROM Competitors WHERE email = ?";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("s", $emailToFind);
            $stmt->execute();
            $stmt->bind_result($id, $firstName, $lastName, $email, $class, $school, $teamId);
            if ($stmt->fetch()) {
                $data['id'] = $id;
                $data['firstName'] = $firstName;
                $data['lastName'] = $lastName;
                $data['email'] = $email;
                $data['class'] = $teamLeadEmail;
                $data['school'] = $school;
                $data['teamId'] = $teamId;
            }
            $stmt->close();
        }
        return count($data) > 0 ? new Competitor($data) : null;
    }

    function save($mysqli) {
        $sucess = false;
        if ($this->id  == 0) {
            $sql = <<<EOT
INSERT INTO Competitors
(firstName, lastName, email, class, school, teamId)
VALUES (?, ?, ?, ?, ?, ?)
EOT;
            if($stmt = $mysqli->prepare($sql)) {
                $stmt->bind_param("ssssss", $this->firstName, $this->lastName, $this->email, $this->class, $this->school, $teamId);
                if($stmt->execute()) {
                    $sucess = true;
                    $mysqli->commit();
                }
                $stmt->close();
            }
        }
        return $sucess;
    }
}
?>
