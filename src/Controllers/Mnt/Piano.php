<?php
namespace Controllers\Mnt;

use Controllers\PublicController;
use JetBrains\PhpStorm\Pure;
use Views\Renderer;
use Utilities\Validators;


class Piano extends PublicController
{
    private $viewData = array();

    public function run():void
    {
        // // code
        // $this->init();
        // // Cuando es método GET (se llama desde la lista)
        // if (!$this->isPostBack()) {
        //     $this->procesarGet();
        // }
        // // Cuando es método POST (click en el botón)
        // if ($this->isPostBack()) {
        //     $this->procesarPost();
        // }
        // // Ejecutar Siempre
        // $this->processView();
        Renderer::render('mnt/piano', $this->viewData);
    }
}

?>