<?php
class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }

    public function __destruct()
    {
        echo 'Class Bar được hủy';
    }
}

class Foo extends Bar
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
    }

    public function __destruct()
    {
        echo 'Class Foo được hủy';
    }
}

$foo = new Foo();
//Kết quả: Class Foo được khởi tạo
//kết quả: Class Foo được hủy



//Nếu như bạn muốn sử dụng được phương thức khởi tạo và phương thức hủy trong class cha thì bạn chỉ cần gọi lại phương thức đó của lớp cha.

class Foo1 extends Bar
{
    public function __construct()
    {
        //gọi phương thức khởi tạo của class cha
        parent::__construct();
        echo 'Class Foo được khởi tạo';
    }

    public function __destruct()
    {
        //gọi phương thức hủy của class cha
        parent::__destruct();
        echo 'Class Foo được hủy';
    }
}

$foo = new Foo1();
//Kết quả: Class Bar được khởi tạo
//Kết quả: Class Foo được khởi tạo
//kết quả: Class Bar được hủy
//kết quả: Class Foo được hủy