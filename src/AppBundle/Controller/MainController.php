<?php
/**
 * Created by PhpStorm.
 * User: superfly
 * Date: 1/7/2017
 * Time: 4:42 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function homepageAction(Request $request)
    {
        return $this->render('healthy-life/homepage.html.twig', array());
    }
}