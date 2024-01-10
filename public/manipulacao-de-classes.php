<?php

class MyClassDad
{

}


class MyClass extends MyClassDad
{
    public $name = "Qualquer coisa";
    protected $outro;
    private $new;

    public function method1(): string
    {
        return "method1";
    }

    protected function method2(): void
    {
        
    }

    private function method3(): void
    {
        
    }
}

$obj = new MyClass();

/**
 * Abaixo estão algumas funcções para manipulação de classes,
 * pode ser muito útil quando se está trabalhando com classes de terceiros
 */

// $methods = get_class_methods($obj);

// $methods = get_class_methods('MyClass');

// $vars = get_class_vars('MyClass');

// $vars = get_object_vars($obj);

// echo "<pre>";
// print_r($vars);
// echo "</pre>";

// var_dump(get_class($obj));

// print_r(get_parent_class($obj));

// var_dump(is_subclass_of($obj, 'MyClassDad'));

// var_dump(method_exists($obj, 'method1'));

// var_dump(property_exists($obj, 'outro'));

/*
function teste ($prm1, $prm2, $prm3)
{
    return "{$prm1} - {$prm2} - {$prm3}";
}

$functionName = 'teste';
$className = 'MyClass';
$params = [1, 2, 3];

echo call_user_func($functionName, ... $params);
*/

// echo call_user_func_array([$obj, 'method1'], []);

// $className = 'MyClass';
// var_dump(class_exists($className));

// var_dump(is_a($obj, 'MyClassDad'));

// var_dump($obj instanceof MyClassDad);