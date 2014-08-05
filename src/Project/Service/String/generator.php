<?php

namespace Project\Service\String;

class Generator
{
    private $stringLenght;

    public function __construct($stringLenght = 9)
    {
        $this->stringLenght = $stringLenght;
    }

    /**
     * Generates random string from a-z0-9
     * @return string
     */
    public function generateRandomString()
    {
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $randString = substr(str_shuffle(str_repeat($chars, $this->stringLenght)), 0, $this->stringLenght);

        return $randString;
    }
}
