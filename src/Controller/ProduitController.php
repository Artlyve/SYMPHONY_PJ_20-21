<?php

namespace App\Controller;

use App\Entity\Panier;

use App\Entity\User;
use App\Repository\PanierRepository;
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
        $produitList = $products->findAll();
        $em = $this->em;


        if($user->getPanier() == null){
            $panier = new Panier();
            $panier->addUser($user);
            $em->persist($panier);
        }else{
            $panier = $user->getPanier();
        }

        dump($panier);


        if($request->request->count() > 0){

            //récupération des choix effectué par l'utilisateur
            $choix = $request->request->get('choix');
            dump($request->request->get('choix'));



            //modifier la quantité de toute les produits en fonction de la quantité prise
            for($i =0; $i < count($produitList); $i++ ){

                if((int)$choix[$i] != 0){

                    $produitList[$i]->setQuantite(( (int)$produitList[$i]->getQuantite() ) - ( (int)$choix[$i]) );
                    $panier->setQuantite((int)$choix[$i]);
                    $panier->addProduit($produitList[$i]);
                    $panier->addUser($user);

                    $em->flush();
                }

            }



            return $this->redirectToRoute('site');
        }
        return $this->render('produit/productList.html.twig',['products'=>$produitList]);
    }



    /**
     *  Affiche le panier de l'utilisateur
     *
     *
     * @Route("/panier", name="panier")
     * @param ProduitRepository $products
     * @param Request $request
     * @param UserInterface $user
     * @return Response
     */
    public function affichePanier(UserInterface $user, PanierRepository $panier): Response
    {

        return $this->render('produit/affichePanier.html.twig',['panier'=>$user->getPanier()]);
    }
}
