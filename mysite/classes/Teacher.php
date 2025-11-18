<?php
require_once "User.php";

class Teacher extends User {
    private $subject;

    public function getRole() {
        return "Викладач";
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }
}
