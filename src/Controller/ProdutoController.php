<?php

namespace App\Controller;

use App\Entity\Produto;
use App\Form\ProdutoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProdutoController extends Controller
{
    /**
     * @Route("/produto", name="listar_produto")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $produtos = $em->getRepository(Produto::class)->findAll();

        return $this->render("produto/index.html.twig", [
            'produtos' => $produtos
        ]);
    }

    /**
     * @param Request $request
     *
     * @Route("/produto/cadastrar", name="cadastrar_nome")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $produto = new Produto();
        $form = $this->createForm(ProdutoType::class, $produto);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produto);
            $em->flush();

            $this->get('session')->getFlashBag()->set('success', 'Produto salvo com sucesso!');

            return $this->redirectToRoute('listar_produto');
        }

        return $this->render("produto/create.html.twig", [
            'form' => $form->createView()
        ]);
    }
}
