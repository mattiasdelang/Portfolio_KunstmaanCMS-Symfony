<?php

namespace kuma\PortfolioBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Controller\SlugActionInterface;

/**
 * PagerPage
 *
 * @ORM\Table(name="kuma_portfoliobundle_pager_pages")
 * @ORM\Entity
 */
class PagerPage extends \Kunstmaan\NodeBundle\Entity\AbstractPage implements \Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface, SlugActionInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return \kuma\PortfolioBundle\Form\Pages\PagerPageAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\Pages\PagerPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array();
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array(
            'kumaPortfolioBundle:main',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('kumaPortfolioBundle:contentpage');
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:Pages:Common/view.html.twig';
    }

    public function getControllerAction()
    {
        return 'app.controller.articlepage:articleAction';
    }
}