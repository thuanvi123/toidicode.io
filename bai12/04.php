<?php

// Xử dụng insteadof để xét độ ưu tiên cho phương thức bạn muốn sử dụng.
class ConNguoi
{
    private $name;
    private $age;
    //gọi trait
    use SetGetName, SetGetAge {
        //ưu tiên sử dụng phương thức getall của trait SetGetAge
        SetGetAge::getAll insteadof SetGetName;
    }
}