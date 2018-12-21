<?php
//lấy ra tuổi của nhân viên bằng pp lập trình hướng đối tượng

class Persion {
    private  $name ;
    private  $age ;

    public function getPersion () {
        return $this ->name . '-' . $this->age;
    }
}
