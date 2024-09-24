<?php
declare(strict_types=1);
?>

<?php

// Nhúng các file chứa các class đã định nghĩa
require_once 'I.php'; // Interface I
require_once 'C.php'; // Class C
require_once 'A.php'; // Class A
require_once 'B.php'; // Class B
?>
<?php


class Demo
{
    public function typeAReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    
    public function typeAReturnB(): A
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeAReturnC(): A
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI(): A
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeAReturnNull(): A
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }



    public function typeBReturnA(): B
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    
    public function typeBReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeBReturnC(): B
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI(): B
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeBReturnNull(): B
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    

    public function typeCReturnA(): C
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    
    public function typeCReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): C
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeCReturnNull(): C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    
    public function typeIReturnA(): C
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    
    public function typeIReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeIReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI(): C
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeIReturnNull(): C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }


    public function typeNULLReturnA(): C
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    
    public function typeNULLReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeNULLReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNULLReturnI(): C
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeNULLReturnNull(): C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}



$demo = new Demo();
// Giả sử $demo đã được khởi tạo trước đó
$methods = [
    'typeAReturnA', 'typeAReturnB', 'typeAReturnC', 'typeAReturnI', 'typeAReturnNull',
    'typeBReturnA', 'typeBReturnB', 'typeBReturnC', 'typeBReturnI', 'typeBReturnNull',
    'typeCReturnA', 'typeCReturnB', 'typeCReturnC', 'typeCReturnI', 'typeCReturnNull',
    'typeIReturnA', 'typeIReturnB', 'typeIReturnC', 'typeIReturnI', 'typeIReturnNull',
    'typeNULLReturnA', 'typeNULLReturnB', 'typeNULLReturnC', 'typeNULLReturnI', 'typeNULLReturnNull'
];

foreach ($methods as $method) {
    try {
        $result = $demo->$method(); 

    } catch (Throwable $e) {
        echo "<br>";
        echo "$method: false\n";
    }
}




