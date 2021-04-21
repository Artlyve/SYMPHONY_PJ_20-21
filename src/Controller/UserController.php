<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


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
}
