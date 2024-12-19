<?php

class Teacher
{
    private static int $register = 0;  //non appartiene all'oggetto ma alla classe

    public function __construct(private string $name, private string $lastName)
    {
        self::$register++;    //self anche per le variabili statiche
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public static function getRegister():int
    {
        return self::$register;
    }

}