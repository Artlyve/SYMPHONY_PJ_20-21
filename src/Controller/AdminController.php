<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/* Ce controller est pour l'utilisation des Administrateur du site */

/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
     *  Lister les utilisateurs
     *
     *
     * @Route("/utilisateurs", name="users")
     * @param UserRepository $users
     * @return Response
     */
    public function usersList(UserRepository $users, Request $request): Response
    {
        dump($request);
        return $this->render('admin/users.html.twig', [
            'users' => $users->findAll(),
        ]);
    }

    /**
     *  Editer un utilisateur
     *
     *
     * @Route("/utilisateur/modifier/{id<\d+>}", name="edit_user")
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
            return $this->redirectToRoute('admin_users');

        }
        return $this->render('admin/edituser.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     *  Supprimer un utilisateur
     *
     *
     * @Route("/utilisateur/supprimer/{id<\d+>}", name="delete_user")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function deleteUser(User $user, Request $request): Response
    {


        $em = $this->em;
        $em->remove($user);
        //$em->persist($user);
        $em->flush();
        $this->addFlash('message', 'Utilisateur modifié avec succès');

        return $this->redirectToRoute('admin_users');
    }


}
