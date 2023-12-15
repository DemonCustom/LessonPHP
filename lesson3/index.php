<?php

function helloWorld(string $text = 'World'): string
{
    return "Hello, $text!";
}

echo helloWorld('Ivan');

