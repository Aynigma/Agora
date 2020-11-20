<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/contact", name="contact_index", methods={"GET"})
     */
    public function indexContact(ContactRepository $contactRepository): Response
    {
        return $this->render('contact/index.html.twig', [
            'contacts' => $contactRepository->findAll(),
        ]);
    }

    /**
     * @Route("/article", name="admin_article_index", methods={"GET"})
     */
    public function indexArticle(ArticleRepository $articleRepository): Response
    {
        return $this->render('admin/article_index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
}
