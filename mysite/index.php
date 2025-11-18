<?php

require_once "classes/Student.php";  // Підключаємо клас Student
require_once "classes/Teacher.php";

$student = new Student("Анастасія", "nast@gmail.com");// Створюємо об’єкт Student який автоматично викликається конструктор User
$student->setGroup("ІПЗ-23"); // Встановлюємо групу за допомогою сеттера

$teacher = new Teacher("Олег Петрович", "oleg@gmail.com");
$teacher->setSubject("Програмування");

echo "<h3>Студент:</h3>";
echo "Ім’я: " . $student->getName() . "<br>";
echo "Email: " . $student->getEmail() . "<br>";
echo "Роль: " . $student->getRole() . "<br>";
echo "Група: " . $student->getGroup() . "<br><br>";

echo "<h3>Викладач:</h3>";
echo "Ім’я: " . $teacher->getName() . "<br>";
echo "Email: " . $teacher->getEmail() . "<br>";
echo "Роль: " . $teacher->getRole() . "<br>";
echo "Предмет: " . $teacher->getSubject() . "<br>";
