<?php
class Foo
{
    //Khai báo phương thức khởi tạo
    public function Foo()
    {
        echo 'Class Foo được khởi tạo';
    }
}

new Foo();
//Khai báo phương thức có tên  __construct()

class Foo1
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
    }
}

new Foo1();
//kết quả: Class Foo được khởi tạo
