<?php
class ParentClass
{
    function getClass()
    {
        return 'ParentClass';
    }
}

class ChildClass extends ParentClass
{
    var $name = 'ChildClass';

    function getclass()
    {
        return 'ChildClass';
    }

    function getMethod()
    {
        echo 'Đây là phương thức ăn của lớp ' . $this->getclass();
    }

    function getMethodParent()
    {
        echo 'Đây là phương thức ăn của lớp ' . parent::getclass();
    }
}

$class = new ChildClass();
$class->getMethod();
//kết quả: Đây là phương thức ăn của lớp Trẻ con
$class->getMethodParent();
//kết quả: Đây là phương thức ăn của lớp Người lớn