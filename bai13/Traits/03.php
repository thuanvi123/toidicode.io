<?php
trait Name
{
    private $name = 'Vũ Thanh Tài';

    private function getName()
    {
        return $this->name;
    }
}

class ConNguoi
{
    use Name {
        //Định danh mới cho getName
        getName as public doName;
    }
}

$connguoi = new ConNguoi();

echo $connguoi->doName();
//Kết Quả: Vũ Thanh Tài