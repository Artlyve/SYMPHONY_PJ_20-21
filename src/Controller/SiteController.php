<?php

namespace App\Controller;

use App\Entity\Users;
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
     * @Route("/ajout/{id<\d+>}", name="add")
     */
    public function add(Users $user): Response
    {
        $em = $this->em;
        $user->setNom("admin")
            ->setPrenom("admin")
            ->setRoles(['ROLE_ADMIN']);

        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('site');
    }
}
