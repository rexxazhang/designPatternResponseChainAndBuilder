<?php

class Head
{
    /**
     * @type Mouth
     */
    private $mouth;

    /**
     * @type Nose
     */
    private $nose;

    public function __construct()
    {
        $this->mouth = new Mouth();
        $this->nose = new Nose();
    }

    public function shake(): void
    {

    }
}