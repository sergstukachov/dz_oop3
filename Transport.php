<?php


abstract class Transport
{
    function drive()
    {
        echo " I am to drive with ".strtolower(get_class($this))." </br>";
    }
}