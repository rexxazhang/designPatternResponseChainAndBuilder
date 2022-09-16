<?php

class Person
{
    private $name = 'laoli';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    protected function playBasketball(): void
    {
        $this->pass();
    }

    private function pass(): void
    {
        echo "pass";
    }
}