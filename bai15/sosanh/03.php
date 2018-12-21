<?php

// Khai báo class ConNguoi
class ConNguoi
{
    public static $name = 'ConNguoi';

    public function setName($name)
    {
        $this->name = $name;
    }

    public function echoName()
    {
        echo $this->name;
    }
}

//Khởi tạo class
$nguoilon = new ConNguoi();
//setName 
$nguoilon->setName('Vũ Thanh Tài');
//echoName
$nguoilon->echoName();
//Kết Quả : Vũ Thanh Tài
echo $nguoilon->name;
//Kết Quả: Vũ Thanh Tài
// Khởi tạo tiếp class Tre con
$trecon = new ConNguoi();
//gọi phương thức echoName
$trecon->echoName();
//Kết Quả: Undefined property: ConNguoi::$name
//gọi thuộc tính name
$trecon->name;
//Kết Quả: Undefined property: ConNguoi::$name