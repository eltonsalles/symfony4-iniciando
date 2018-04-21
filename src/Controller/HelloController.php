<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    /**
     * @return Response
     *
     * @Route("hello_world")
     */
    public function world()
    {
        return new Response(
            "<html><body><h1>Hello, World!!!</h1></body></html>"
        );
    }

    /**
     * @return Response
     *
     * @Route("mostrar-mensagem")
     */
    public function mensagem()
    {
        return $this->render("hello/mensagem.html.twig", [
            "mensagem" => "Olá School of Net!"
        ]);
    }
}
