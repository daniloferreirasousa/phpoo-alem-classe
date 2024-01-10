<?php

class MyClass
{
    private string $name;
    private string $cpf;
    private int $age;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}


$obj = new MyClass;
$obj->name = "Danilo";
$obj->cpf = "109238723489";
$obj->age = 24;

echo $obj->name;