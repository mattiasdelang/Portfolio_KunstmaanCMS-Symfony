<?php

namespace kuma\PortfolioBundle\Twig\Extension;

use Doctrine\ORM\EntityManager;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\RequestStack;

class ArticleExtension extends \Twig_Extension
{
    /**
     * @var EntityManager $em
     */
    private $em;
    private $request;

    /**
     * @param mixed EntityManager $em
     */
    public function __construct(EntityManager $em,RequestStack $request)
    {
        $this->em = $em;
        $this->request = $request;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('get_articles', array($this, 'getArticles'))
        );
    }

    /**
     * @return array
     */
    public function getArticles() {

        $request = $this->request->getMasterRequest();

        $pages = $this->em->getRepository('kumaPortfolioBundle:Article')->findBy(array(),array('name'=>'asc'));

        $adapter = new ArrayAdapter($pages);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(3);

        $pagenumber = $request->get('page');
        if (!$pagenumber || $pagenumber < 1) {
            $pagenumber = 1;
        }

        $pagerfanta->setCurrentPage($pagenumber);

        return['articles' => $pagerfanta];

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'articles_twig_extension';
    }
}
