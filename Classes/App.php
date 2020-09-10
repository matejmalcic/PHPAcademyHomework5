<?php

namespace Classes;

class App
{
    public function randomClass($className)
    {
        return $className->viewAction();
    }
}