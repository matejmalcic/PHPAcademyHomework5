<?php

namespace Classes\Folder1;

use Classes\AbstractClass;
use Classes\Extra\Prefix;

class ClassName1 extends AbstractClass
{
    private $prefix;

    private function setPrefix(): void
    {
        $this->prefix = new Prefix();
        $this->prefix->setDate();
    }

    public function viewAction()
    {
        self::setPrefix();
        return $this->prefix->getDate() . '.......' . get_called_class();  //get_class($this)
    }
}