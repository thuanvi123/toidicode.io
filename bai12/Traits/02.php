
<?php
//Mình sẽ gọi 2 trait ở trên vào trong class ConNguoi và đồng thời khởi tạo luôn.

// Nhúng 2 file chứa trait
include 'SetGetName.php';
include 'SetGetAge.php';

//khai báo class ConNguoi
class ConNguoi
{
    private $name;
    private $age;
    //gọi trait SetGetName
    use SetGetName;
    //gọi trait SetGetAge
    use SetGetAge\SetGetAge;
}

//khởi tạo đối tượng.
$connguoi = new ConNguoi();
// set name;
$connguoi->setName('Vũ Thanh Tài');
// get name;
echo $connguoi->getName();
//Tạo khoảng trắng cho dễ phân biệt
echo '<br/>';
// set age
$connguoi->setAge(22);
//get age
echo $connguoi->getAge();

//Kết quả chương trình trả về
//Vũ Thanh Tài
//22