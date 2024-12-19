<?php
require_once 'Volunteer.php';
//la classe studente eredita gli attributi di persona
class Student extends Person implements Volunteer
{

    public function __construct(string $name, int $age, string $email, private string $school)
    {
        parent::__construct($name, $age, $email);   //costruttore della classe persona
    }

    public function getSchool(): string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    public function student_presentation():string
    {
        return parent::introduce()." I attend $this->school school";
    }

    public function toDO():string
    {
        return "My name is $this->name and i'm blood donator";
    }
}