<?php

//khai báo lớp con người có phương thức getSoChan() là final.
class ConNguoi
{
    private $soChan = 2;

    final public function getSoChan()
    {
        return $this->soChan;
    }
}

