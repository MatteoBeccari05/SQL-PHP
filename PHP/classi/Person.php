<?php

class Person
{
    //con php 8.0 crea in automatico gli attributi
    const FAVOURITE_COLOR = "Green";
    public function __construct(protected string $name, protected int $age, protected string $email)   //from php 8.0
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    //self per ottenere la costante
    public function introduce():string
    {
        return "Hi, my name is {$this->getName()}, I am  {$this->getAge()} years old, my email is {$this->getEmail()} and my preferd color is: ".self::FAVOURITE_COLOR.".";
    }



}

