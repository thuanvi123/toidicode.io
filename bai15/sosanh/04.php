<?php


// Khai báo class ConNguoi
class ConNguoi
{
    public static function getStatic()
    {
        return 'Đây là phương thức getStatic';
    }

    public function echoStatic()
    {
        echo $this->getStatic();
    }
}

$connguoi = new ConNguoi();
$connguoi->echoStatic();
//Kết quả: Đây là phương thức getStatic