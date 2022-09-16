<?php

class Car
{
    /**
     * @type Engine
     */
    private $engine;

    /**
     * @type Light
     */
    private $light;

    /**
     * @type Wheel
     */
    private $wheel;

    public function __construct(Engine $engine, Light $light, Wheel $wheel)
    {
        $this->engine = $engine;
        $this->light = $light;
        $this->wheel = $wheel;
    }

    public function drive(): void
    {

    }
}