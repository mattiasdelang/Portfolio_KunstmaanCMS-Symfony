<?php

namespace kuma\PortfolioBundle\Entity\Pages;

use kuma\PortfolioBundle\Form\Pages\ContentPageAdminType;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * ContentPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="portfolio_content_pages")
 */
class ContentPage extends AbstractPage implements HasPageTemplateInterface, SearchTypeInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new ContentPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array (
            array(
                'name' => 'PagerPage',
                'class'=> 'kuma\PortfolioBundle\Entity\Pages\PagerPage'
            ),
            array(
                'name' => 'SendPage',
                'class'=> 'kuma\PortfolioBundle\Entity\Pages\SendPage'
            ),
            array(
                'name' => 'ContactPage',
                'class'=> 'kuma\PortfolioBundle\Entity\Pages\ContactPage'
            ),
            array(
                'name'  => 'ContentPage',
                'class' => 'kuma\PortfolioBundle\Entity\Pages\ContentPage'
            ),
	);
    }


    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
    	return 'Page';
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array('kumaPortfolioBundle:main');
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
	    return array('kumaPortfolioBundle:contentpage');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:Pages\ContentPage:view.html.twig';
    }
}
