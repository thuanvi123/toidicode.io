<?php

// Khai báo class ConNguoi
class ConNguoi
{
    public function getClass()
    {
        return 'Đây là class ConNguoi';
    }

    public function echoClass()
    {
        echo $this->getClass();
    }
}

//Khai báo class NguoiLon
class NguoiLon extends ConNguoi
{
    public function getClass()
    {
        return 'Đây là class NguoiLon';
    }
}

//Khởi tạo class
$nguoilon = new NguoiLon();
//echoClass
$nguoilon->echoClass();

//Kết Quả : Đây là class NguoiLon