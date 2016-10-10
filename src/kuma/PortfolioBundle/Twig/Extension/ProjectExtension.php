<?php

namespace kuma\PortfolioBundle\Twig\Extension;

use Doctrine\ORM\EntityManager;

class ProjectExtension extends \Twig_Extension
{
    /**
     * @var EntityManager $em
     */
    private $em;

    /**
     * @param mixed EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('get_projects', array($this, 'getProjects'))
        );
    }

    /**
     * @return array
     */
    public function getProjects() {
        return $this->em->getRepository('kumaPortfolioBundle:Project')->findAll();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projects_twig_extension';
    }
}
