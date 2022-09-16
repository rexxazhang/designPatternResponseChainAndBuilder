<?php

class Square extends Shape
{

    public function __construct(Color $color)
    {
        parent::__construct($color);
    }

    public function getShapeInfo(): string
    {
        return $this->color->getColor(). " square";
    }
}