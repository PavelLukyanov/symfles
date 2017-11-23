<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Form\TestForm;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky")
     */
    public function indexAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');

        $post = new Post();

        $form = $this->createForm(TestForm::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($post);
            $em->flush();
        }

        $posts = $em->getRepository(Post::class)->findAll();

        return $this->render('lucky/index.html.twig', [
            'form' => $form->createView(),
            'posts' => $posts,
        ]);
    }
}
