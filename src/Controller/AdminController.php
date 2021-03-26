<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\EditUserType;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/utilisateurs", name="users")
     * @param UsersRepository $users
     * @return Response
     */
    public function usersList(UsersRepository $users): Response
    {
        return $this->render('admin/users.html.twig', [
            'users' => $users->findAll(),
        ]);
    }

    /**
     *  Editer un utilisateur
     * @Route("/utilisateur/modifier/{id<\d+>}", name="edit_user")
     * @param Users $user
     * @param Request $request
     * @return Response
     */
    public function editUser(Users $user, Request $request): Response
    {
        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        $em = $this->em;

        if($form->isSubmitted() && $form->isValid()){

            $em->persist($user);
            $em->flush();
            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('admin_users');

        }
        return $this->render('admin/edituser.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}
