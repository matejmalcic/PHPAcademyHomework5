<?php

namespace Classes;

abstract class AbstractClass
{
    public function viewAction()
    {
        return get_called_class();  //get_class($this)
    }
}