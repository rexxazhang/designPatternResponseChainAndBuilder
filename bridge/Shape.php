<?php

abstract class Shape
{
    /**
     * @type Color
     */
    protected $color;

    public function __construct(Color $color){
        $this->color = $color;
    }

    public abstract function getShapeInfo(): string;
}