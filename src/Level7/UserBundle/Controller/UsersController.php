<?php

namespace Level7\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UsersController extends Controller
{
    // "get_users"     [GET] /users
    public function getUsersAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('Level7UserBundle:User')
            ->findAll();
        
        return ['users' => $users];
    }
    
    // "get_user"      [GET] /users/{id}
    public function getUserAction($id)
    {
        $user = $this->getDoctrine()
            ->getRepository('Level7UserBundle:User')
            ->find($id);
        
        if (!$user) {
            throw $this->createNotFoundException();
        }
        
        return ['user' => $user];
    }
    
    public function putUserAction($id)
    {} // "put_user"      [PUT] /users/{id}
    
    public function deleteUserAction($id)
    {} // "delete_user"   [DELETE] /users/{id}
}
