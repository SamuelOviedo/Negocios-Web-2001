<?php
namespace Controllers\Mnt;

use Controllers\PublicController;
use Dao\Mnt\Pianos as DaoPianos;
use Views\Renderer;

class Pianos extends PublicController
{
    public function run():void
    {
        // code
        $viewData = array();
        $viewData["Pianos"] = DaoPianos::getAll();
        error_log(json_encode($viewData));

        Renderer::render('mnt/pianos', $viewData);
    }
}

?>