<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Api\Entity;

class ApiController extends AbstractActionController
{

    public function indexAction()
    {

    }

    public function todoAction()
    {
        $request = $this->getRequest();
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        if ($request->isPost()) {
            $this->apiPost($em, $request);
            echo json_encode(['message' => 'create_status'], JSON_UNESCAPED_UNICODE);
        }
        if ($request->isGet()) {

            echo json_encode($this->apiGet($em), JSON_UNESCAPED_UNICODE);
        }
        if ($request->isPut()) {
            $this->apiPut($em, $request);
            echo json_encode(['message' => 'update_status'], JSON_UNESCAPED_UNICODE);
        }
    }

    protected function apiPost($em, $request)
    {
        $collection = new \Api\Entity\Collection();
        $collection->setTitle($request->getPost('title'));
        $collection->setDescription($request->getPost('description'));
        $em->persist($collection);
        $em->flush();
    }

    protected function apiGet($em)
    {
        $id = (int)$this->params()->fromRoute('id', 0);
        $collect = [];
        if (!empty($id)) {
            $collection = $em
                ->getRepository('\Api\Entity\Collection')
                ->find($id);
            $collect['id'] = $collection->getId();
            $collect['title'] = $collection->getTitle();
            $collect['text'] = $collection->getDescription();
        } else {
            $collections = $em
                ->getRepository('\Api\Entity\Collection')
                ->findAll();
            $i = 0;
            foreach ($collections as $collection) {
                $collect[$i]['id'] = $collection->getId();
                $collect[$i]['title'] = $collection->getTitle();
                $collect[$i]['text'] = $collection->getDescription();
                ++$i;
            }
        }
        return $collect;
    }

    protected function apiPut($em, $request)
    {
        $id = $request->getPut('id');
        $collection = $em
            ->getRepository('\Api\Entity\Collection')
            ->find($id);
        $collection->setTitle($request->getPut('title'));
        $collection->setDescription($request->getPut('description'));
        $em->persist($collection);
        $em->flush();
    }

}
