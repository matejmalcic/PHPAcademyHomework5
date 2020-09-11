<?php

namespace Classes\Extra;

class Prefix
{
    private $date;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(): void
    {
        $this->date = date('d/m/Y');
    }
}