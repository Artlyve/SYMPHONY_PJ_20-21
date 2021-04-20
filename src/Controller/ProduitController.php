<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\User;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


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
     * @param UserInterface $user
     * @return Response
     */
    public function productList(ProduitRepository $products, Request $request, UserInterface $user): Response
    {

        $panier = new Panier();
        $em = $this->em;
        dump($request->request->get('i'));
        dump($request);
        if($request->request->count() > 0){

            $panier->setQuantite(0);
            $panier->addProduit(0);

            $user->setPanier($panier->getId());

            $em->persist($user);
            $em->persist($panier);
            $em->flush();
            return $this->redirectToRoute('site');
        }
        return $this->render('produit/productList.html.twig',['products'=>$products->findAll()]);
    }
}
