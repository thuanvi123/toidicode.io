//Mình có 1 class ConNguoi có 2 phương thức getClass(),echoClass() và class NguoiLon kế thừa class ConNguoi và đồng thời override lại phương thức getclass() của class ConNguoi.
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
