<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\EditUserType;
use App\Form\RegistrationType;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use App\Service\total;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/* Ce controller est pour l'utilisation des Clients du site */

/**
 * Toutes les routes liées à l'utilisateur commencera par /user
 *
 * @Route("/user", name="user_")
 */
class UserController extends AbstractController
{
    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
     *  Editer le profil de l'utilisateur
     *
     *
     * @Route("/utilisateur/modifier/{id<\d+>}", name="edit")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function editUser(User $user, Request $request): Response
    {
        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        $em = $this->em;

        if($form->isSubmitted() && $form->isValid()){

            //$em->persist($user);
            $em->flush();
            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('produit_products');

        }
        $this->addFlash('message', 'Echec de la modification du profil');
        return $this->render('user/edituser.html.twig', [
            'form' => $form->createView(), 'id' => $user->getId()
        ]);
    }

    /**
     *  Editer le profil de l'utilisateur
     *
     *
     * @Route("/utilisateur2/modifier/{id<\d+>}", name="edit2")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function editUser2(User $user, Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        $em = $this->em;

        if($form->isSubmitted() && $form->isValid()){

            $hash = $encoder->encodePassword($user, $user->getPassword());//cryptage du mot de passe
            $user->setPassword($hash);
            $em->persist($user);
            $em->flush();
            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('produit_products');

        }
        $this->addFlash('message', 'Echec de la modification du profil');
        return $this->render('user/edituser2.html.twig', [
            'form' => $form->createView(), 'id' => $user->getId()
        ]);
    }

    /**
     *  Gestion du panier de l'utilisateur
     *
     *
     * @Route("/utilisateur/panier/{id<\d+>}", name="panier")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function panierUser( User $user, total $total): Response
    {


        $em = $this->em;
        $reponse = $total->getTotal($user);
        $paniers = $user->getPaniers();



        return $this->render('user/panier.html.twig', [
            'paniers' => $paniers,
            'reponse' => $reponse
        ]);
    }


    /**
     *  Supprimer un produit du panier
     *
     *
     * @Route("/user/supprimer/{id<\d+>}", name="delete_product")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function deleteProduct(ProduitRepository $produitRepository, User $user, Request $request): Response
    {
        $em = $this->em;

        $paniers = $user->getPaniers();

        for($i = 0; $i < count($paniers); $i++){

            $produit = $produitRepository->find($paniers[$i]->getProduit()->getId());
            $produit->setQuantite($produit->getQuantite() + $paniers[$i]->getQuantite());
            $em->remove($paniers[$i]);
            $em->flush();

        }


        $this->addFlash('message', 'Utilisateur modifié avec succès');

        return $this->redirectToRoute('user_panier', [
            'id' => $user->getId(),
        ]);
    }

}
