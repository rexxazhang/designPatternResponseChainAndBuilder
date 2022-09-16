<?php

abstract class Link
{
    public abstract function insert(): void;
    public abstract function remove(): void;

    public function count(): int
    {
        return 0;
    }
}