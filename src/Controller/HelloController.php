<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
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
}
