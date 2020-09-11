<?php

namespace Classes;

final class App
{
    public function start($className)
    {
        return $className->viewAction();
    }
}