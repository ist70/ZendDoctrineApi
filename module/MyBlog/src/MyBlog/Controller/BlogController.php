<?php
namespace MyBlog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use MyBlog\Entity;

class BlogController extends AbstractActionController
{

    public function indexAction()
    {
        $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $posts = $objectManager
            ->getRepository('\MyBlog\Entity\BlogPost')
            ->findAll();
        return ['posts' => $posts];
    }

    public function viewAction()
    {

        return;
    }

    public function addAction()
    {

        return;
    }

    public function editAction()
    {

        return;
    }

    public function deleteAction()
    {
        return ;
    }
}
