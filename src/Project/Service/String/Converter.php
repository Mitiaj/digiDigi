<?php

namespace Project\Service\String;

class Converter
{
    /**
     * Converts letters to numbers in a string
     * @param string $randString random string
     * @return string
     */
    public function convert($randString)
    {
        $newString = '';
        foreach (str_split($randString) as $char) {
            $newString .= is_numeric($char) ? $char : ord(strtolower($char)) - 96;
        }

        return $newString;
    }
}
