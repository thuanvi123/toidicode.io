<?php
//truy xuất trong class
class ConNguoi
{
    var $name = 'aa';
    var $mat;
    var $mui;
    const sochan = 2;

    function an()
    {
        //code
    }

    function noi()
    {
        return $this->getSoChan();
    }

    function di()
    {
        //code
    }

    function getSoChan()
    {
        return self::sochan;
    }
}
// truy xuất ngoài  class
$connguoi = new ConNguoi();//$newClass = new className();
$connguoi->noi();     //$connguoi->noi();
