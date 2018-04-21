<?php

namespace App\Controller;

use App\Entity\Produto;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProdutoController extends Controller
{
    /**
     * @Route("/produto", name="produto")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $produtos = $em->getRepository(Produto::class)->findAll();

        return $this->render("produto/index.html.twig", [
            'produtos' => $produtos
        ]);
    }
}
