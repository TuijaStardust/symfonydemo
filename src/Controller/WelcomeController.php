<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    /**
     * @Route("/hello-page", name="hello_page")
     */
    public function hello(Request $request) {

        $name = $request->query->get('name', 'noname');

        return $this->render('hello_page.html.twig', 
        [
            'some_variable' => 'Add here Anything you like (string, number, boolean)',
            'name' => $name
        ]);
    }
}
