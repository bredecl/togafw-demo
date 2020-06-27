<?php
namespace App\Web;

use Toga\Controller as TOGA;

class Gui extends TOGA\Gui
{
    public function __construct()
    {
        $this->nameproject = "web";
    }
    public function header($metadata=false,$assets=false)
    {
        $object =[];
        $object["message"] ="Holi!";
        $object["assets"] =$assets;
        $this->template = "header";
        $this->show(200, $object);
    }
    public function footer($assets=[])
    {
        $object =[];
        $object["message"] ="Holi!";
        $this->template = "footer";
        $this->show(200, $object);
    }
}
