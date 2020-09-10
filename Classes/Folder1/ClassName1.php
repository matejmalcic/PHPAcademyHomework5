<?php

namespace Classes\Folder1;

use Classes\AbstractClass;

class ClassName1 extends AbstractClass
{
    public function viewAction()
    {
        return get_called_class();  //get_class($this)
    }
}