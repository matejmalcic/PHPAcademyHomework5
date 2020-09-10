<?php

namespace Classes\Folder3;

use Classes\AbstractClass;

class ClassName3 extends AbstractClass
{
    public function viewAction()
    {
        return get_called_class();
    }
}