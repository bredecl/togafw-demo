<?php
namespace App\Hello;

use Toga\Controller as TOGA;

class api extends TOGA\API
{
    public function holi()
    {
        $object = new \StdClass;
        $object->message ="Holi!";
        $this->print(200, $object);
    }
}
