<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Autor;
use AppBundle\Entity\category;
use AppBundle\Entity\comment;
use AppBundle\Entity\post;
use AppBundle\Entity\Tag;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    public function categoryAction()
    {
        $em=$this->getDoctrine()->getManager();
        
        $category=new category();
        $category->setName('First category');
        
        $em->persist($category);
        
        $em->flush();
        
        return $this->render('some view twig', array());
    }
    
    public function autorAction()
    {
        $em=$this->getDoctrine()->getManager();
        
        $autor=new Autor();
        $autor->setName('First autor name');
        $autor->setSName('First autor second name');
        $autor->setEmail('First autor email');
        $autor->setLastLogDate('First autor last log date');
        
        $em->persist($autor);
        
        $em->flush();
        
        return $this->render('some view twig', array());
    }
    
    public function findAutorByNameAction()
    {
        $autor=$this->getDoctrine()
        ->getRepository(Autor::class)
        ->findAutorByName();
        
        return $this->render('some view twig', array());
    }
}
