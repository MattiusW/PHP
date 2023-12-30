<?php

class Person
{

    private $name;
    private $age;
    private $profession;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getProfession()
    {
        return $this->profession;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    public function setProfession($newProfession)
    {
        $this->profession = $newProfession;
    }

    public function printPerson()
    {
        echo "Name: " . $this->name . "<br>\n";
        echo "Age: " . $this->age . "<br>\n";
        echo "Profession: " . $this->profession . "<br>\n";
    }
}

?>