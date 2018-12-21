
<?php

class Role
{
    public $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    function getRole($role)
    {
        return $role();
    }
}

//khởi tạo class Role
$role = new Role(function () {
    return 'Học lập trình PHP Toidicode.com';
});
//gán data bằng thuộc tính role
$data = $role->role;
//hiển thị role
echo $data();
//Kết quả: Học lập trình PHP Toidicode.com
//gọi getRole
echo $role->getRole(function () {
    return 'Học lập trình Nodejs Toidicode.com';
});
//Kêt quả: Học lập trình Nodejs Toidicode.com