<?php
namespace App\Hello;

use APP\Web as Web;

class Gui extends Web\Gui
{
    public function __construct()
    {
        $this->nameproject = "hello";
    }
    public function holi()
    {
      //set assets
      #namespace Toga\Controller;
      $classAssets = new \Toga\Controller\Assets();
      #$namespace, $ext, $name, $push=false
      $classAssets->assignAssets($this->nameproject,"css","home");

      #class Assets
      //!set assets
        $mainGui = new \App\Web\Gui();
        $mainGui->header([],$classAssets);
        $object =[];
        $object["message"] ="Holi!";
        $this->template = "holi";
        $this->show(200, $object);
        $mainGui->footer();
    }
}
