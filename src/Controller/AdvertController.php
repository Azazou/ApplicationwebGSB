<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class AdvertController extends AbstractController
{
  public function admin_crea(Environment $twig)
  {
    $content = $twig->render('admin_crea.html.twig');

    return new Response($content);
  }

  public function admin_list(UserRepository $userRepository): Response
    {
        return $this->render('admin_list.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

  public function client(Environment $twig)
  {
    $content = $twig->render('client.html.twig');

    return new Response($content);
  }

  public function comptable(Environment $twig)
  {
    $content = $twig->render('comptable.html.twig');

    return new Response($content);
  }

  /*public function login(Environment $twig)
  {
    $content = $twig->render('login.html.twig');

    return new Response($content);
  }*/
}