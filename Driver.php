<?php

class Driver
{
    public $name;
    public $surname;
    public $gender;
    private $transport;
    public function __construct($name, $surname)
    {
        $this->name = $name; $this->surname; $this->gender;
    }

    function setTransport($transport) {
        if(!is_object($transport)) return;
        $this->transport = $transport;
    }

    function get_info(){
        return $this->name . ' ' . $this->surname ;
    }


    function drive(){
        if(is_object($this->transport)) {
            $this->transport->drive();
        } else echo "Nothing to drive </br>";
    }

}