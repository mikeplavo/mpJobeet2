<?php

namespace Application\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobController extends Controller
{
   protected function getEm()
    {
      return $this->get('doctrine.orm.entity_manager');
    }

    public function indexAction()
    {
      $em = $this->getEm();

      $categories = $em->getRepository('Application\JobeetBundle\Entity\Category')->getWithJobs();

      /*
      if (null !== $category) {
         $jobs = $em->getRepository('Application\JobeetBundle\Entity\Job')->getActiveJobsByCategory($category, $max);
      } else {
         $jobs = $em->getRepository('Application\JobeetBundle\Entity\Job')->findAll(true);
      }*/

     
        return $this->render('ApplicationJobeetBundle:Job:index.html.twig',
          array(
            //'jobs' => $jobs,
            'category' => $category, 
          ));
    }

}