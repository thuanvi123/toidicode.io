<?php

// Một class có thể implement  nhiều interface.
interface DongVat
{
    public function getName();
}

interface ConTrau
{
    public function checkSung();
}

class ConNghe implements DongVat, ConTrau
{
    private $name;

    const SUNG = false;

    public function getName()
    {
        return $this->name;
    }

    public function checkSung()
    {
        return self::SUNG;
    }
}