<?php
// Khai báo trait Name
trait Name
{
    //khai báo thuộc tính name= vũ Thanh Tài
    private $name = 'Vũ Thanh Tài';

    //định nghĩa phương thức getName
    abstract public function getName();
}

//Khai báo class ConNguoi
class ConNguoi
{
    //gọi trait Name
    use Name;

    //khai báo và định nghĩa lại phương thức getName()
    public function getName()
    {
        return $this->name;
    }
}

// khởi tọa class ConNguoi
$connguoi = new ConNguoi();
//getName
echo $connguoi->getName();
//Kết Quả: Vũ Thanh Tài