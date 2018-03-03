<?php
/**
 * Created by PhpStorm.
 * User: Rost
 * Date: 3/3/2018
 * Time: 12:11 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('interprom.html.twig');
    }

}
