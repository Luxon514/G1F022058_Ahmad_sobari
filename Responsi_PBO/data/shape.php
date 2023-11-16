<?php

namespace Data;

class Shape
{

    public function getCorner()
    {
        return -5;
    }

}

class Rectangle extends Shape
{

    public function getCorner()
    {
        return 5;
    }

    public function getParentCorner()
    {
        return parent::getCorner();
    }

}