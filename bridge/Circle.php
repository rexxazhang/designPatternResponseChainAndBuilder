<?php

class Circle extends Shape
{
    public function __construct(Color $color)
    {
        parent::__construct($color);
    }

    public function getShapeInfo(): string
    {
        // return like "red circle"
        return $this->color->getColor(). " circle";
    }
}