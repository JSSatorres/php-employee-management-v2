<?php

class View
{
    function __construct()
    {
        echo "<p>Vista Base</p>";
    }

    function render($name)
    {
        require VIEWS . "/" . $name . '.php';
    }
}
