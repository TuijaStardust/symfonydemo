<?php
// src/Controller/DefaultController.php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
    /**
     * @Route("/hello/{name}")
     */

    public function index($name) {
        return new response("Hello $name!");
    }

    /**
     * @Route("/simplicity")
     */

    public function simple() {
        return new response("Isn't this just so Awesome!");
    }

    /**
     * @Route("/diary/{name}")
     */

    public function diary($name) {
        return new response("Dear $name! This is your new diary!");
    }
}

