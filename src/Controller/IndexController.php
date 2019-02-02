<?php
/**
 * User: michal
 * Date: 22.09.18
 * Time: 13:34
 */

namespace App\Controller;


use App\Entity\Event;
use App\Entity\EventCategory;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        return $this->render("basic/index.html.twig");
    }

    /**
     * @Route("/user_profile_data")
     */
    public function userProfileDataAction()
    {
        return new JsonResponse($this->getUser());
    }

    /**
     * @Route("/friends_list_data")
     */
    public function friendsListAction()
    {
        return new JsonResponse([
            [
                'name' => 'Jimmy',
                'id' => 1,
                'photo' => '/images/profile_img.jpeg',
                'active' => true
            ],
            [
                'name' => 'Eric',
                'id' => 2,
                'photo' => '/images/profile_img.jpeg',
                'active' => true
            ],
            [
                'name' => 'Greg',
                'id' => 3,
                'photo' => '/images/profile_img.jpeg',
                'active' => false
            ]
        ]);
    }
}