<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function world()
    {
        return new Response(
            "<html><body><h1>Hello, World!!!</h1></body></html>"
        );
    }
}
