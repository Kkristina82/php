<?php
require_once "User.php";

class Student extends User { // Оголошення класу Student який наслідує User
    private $group;

    public function getRole() {
        return "Студент";
    }

    public function getGroup() {
        return $this->group;
    }

    public function setGroup($group) {
        $this->group = $group;
    }
}
