<?php

namespace kuma\PortfolioBundle\Controller;

use Doctrine\ORM\EntityManager;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route(service="app.controller.articlepage")
 */
class ArticleController
{

    private $em;

    /**
     * ArticleController constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {

        $this->em = $em;

    }

    /**
     * @return array
     */
    public function articleAction(Request $request)
    {

       $pages = $this->em->getRepository('kumaPortfolioBundle:Article')->findAll();

        $adapter = new ArrayAdapter($pages);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(3);

        $pagenumber = $request->get('page');
        if (!$pagenumber || $pagenumber < 1) {
            $pagenumber = 1;
        }

        $pagerfanta->setCurrentPage($pagenumber);

        Return['arti' => $pagerfanta];

    }

}
