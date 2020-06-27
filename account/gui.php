<?php
namespace App\Account;

use Toga\Controller as TOGA;
use APP\Public as Public;

class Gui extends Public\Gui
{
    function __construct(){
      $this->nameproject = "account";
    }
    public function holi()
    {
      echo "asd";
        $this->header();
        echo "!asd";
        $object =[];
        $object["message"] ="Holi!";
        $this->template = "holi";
        $this->show(200, $object);
    }
}
