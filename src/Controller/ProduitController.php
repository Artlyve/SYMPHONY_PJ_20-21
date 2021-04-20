<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/* Ce controller est pour la gestion des produtis avec l'utilisateur */


/**
 * Toutes les routes liées aux produtis commenceront par /produit
 *
 * @Route("/produit", name="produit_")
 */
class ProduitController extends AbstractController
{
    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
    *  Liste des Produits du site
    *
    *
    * @Route("/listeproduits", name="products")
    * @param ProduitRepository $products
    * @param Request $request
    * @return Response
    */
    public function productList(ProduitRepository $products, Request $request): Response
    {
        return $this->render('produit/productList.html.twig',['products'=>$products->findAll()]);
    }
}
