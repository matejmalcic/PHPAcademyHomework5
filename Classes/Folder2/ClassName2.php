<?php

namespace Classes\Folder2;

use Classes\AbstractClass;

class ClassName2 extends AbstractClass
{
    public function viewAction()
    {
        return get_called_class();
    }
}