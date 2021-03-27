<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }
    /**
     * @Route("/", name="site")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

    /**
     * Se donner le role admin
     *
     * @Route("/ajout/{id<\d+>}", name="add")
     * @param User $user
     * @return Response
     */
    public function add(User $user): Response
    {
        $em = $this->em;
        $user->setRoles(['ROLE_ADMIN']);

        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('site');
    }
}
