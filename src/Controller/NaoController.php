<?php
/**
 * Created by PhpStorm.
 * User: stefano
 * Date: 29/05/18
 * Time: 20:04
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NaoController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('nao/home.html.twig');
    }

    /**
     * @Route("events")
     */
    public function events()
    {
        return new Response("events!");
    }

    /**
     * @Route("news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum tortor nec finibus ultricies. Vestibulum egestas est nulla. Sed sed lacinia purus, ut commodo nisi.',
            'Nam nulla mi, vestibulum id iaculis vitae, tincidunt ac turpis. Etiam tincidunt turpis ut erat lobortis, quis elementum massa egestas.',
            'Phasellus quis bibendum turpis. Pellentesque quis dolor molestie lacus mattis rutrum. Aenean suscipit convallis massa, ut pretium libero volutpat in.'
        ];

        return $this->render('nao/show.html.twig', [
            'title'     =>  ucwords(str_replace('-', ' ', $slug)),
            'comments'  => $comments
        ]);
    }

    /**
     * @Route("observation")
     */
    public function observation()
    {
        return new Response("observation!");
    }

}