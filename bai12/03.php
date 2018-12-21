
<?php
//Là bạn sẽ phải override lại phương thức trùng tên đó ở trong class sử dụng.
class ConNguoi
{
    private $name;
    private $age;
    //gọi trait
    use SetGetName, SetGetAge;

    public function getAll()
    {
        return $this->getName();
    }
}