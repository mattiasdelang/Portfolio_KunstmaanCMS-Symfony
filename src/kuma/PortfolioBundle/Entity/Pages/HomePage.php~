<?php

namespace kuma\PortfolioBundle\Entity\Pages;

use kuma\PortfolioBundle\Form\Pages\HomePageAdminType;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Controller\SlugActionInterface;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeBundle\Entity\HomePageInterface;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * HomePage
 *
 * @ORM\Entity()
 * @ORM\Table(name="portfolio_home_pages")
 */
class HomePage extends AbstractPage implements HasPageTemplateInterface, SearchTypeInterface, HomePageInterface, SlugActionInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new HomePageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
            array(
                'name'  => 'ContentPage',
                'class' => 'kuma\PortfolioBundle\Entity\Pages\ContentPage'
            ),
            array(
                'name'  => 'BehatTestPage',
                'class' => 'kuma\PortfolioBundle\Entity\Pages\BehatTestPage'
            )
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
	    return array('kumaPortfolioBundle:main','kumaPortfolioBundle:home','kumaPortfolioBundle:about','kumaPortfolioBundle:portfolio','kumaPortfolioBundle:contact');
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
    	return array('kumaPortfolioBundle:homepage');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:Pages\HomePage:view.html.twig';
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
	    return 'Home';
    }

    public function getControllerAction()
    {
        return 'app.controller.homepage:projectAction';
    }


}
