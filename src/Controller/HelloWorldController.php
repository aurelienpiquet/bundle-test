<?php

namespace HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/apb/hello', name: 'apb_hello')]
    public function __invoke(): Response
    {
        return $this->json(['hello' => 'test']);
    }
}