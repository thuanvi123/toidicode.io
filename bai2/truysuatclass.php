<?php
//Truy xuất thông tin của thuộc tính name trong phương thức noi của class ConNguoi.
class ConNguoi
{
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;

    function an()
    {
        //code
    }

    function noi($caunoi)
    {
        return $this->name = $caunoi;
    }

    function di()
    {
        //code
    }
}
//-Còn nếu muốn truy xuất thông tin của thuộc tính cố định trong class chúng ta sẽ sử dụng một trong 2 cú pháp sau:
self::propertyName;
//hoặc
className::propertyName;
// nên dùng cách 1



//Mình sẽ gọi các thuộc tính động và cố định trong lớp ConNguoi
//khởi tạo lớp
$tai = new ConNguoi();
//gọi thuộc tính động
//gọi name
$tai->name;
//gọi mui
$tai->mui;
//gọi thuộc tính cố định constant
ConNguoi::sochan;