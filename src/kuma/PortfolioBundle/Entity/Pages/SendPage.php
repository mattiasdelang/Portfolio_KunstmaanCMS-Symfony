<?php

namespace kuma\PortfolioBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;

/**
 * SendPage
 *
 * @ORM\Table(name="kuma_portfoliobundle_send_pages")
 * @ORM\Entity
 */
class SendPage extends \Kunstmaan\FormBundle\Entity\AbstractFormPage implements \Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return \kuma\PortfolioBundle\Form\Pages\SendPageAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\Pages\SendPageAdminType();
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
            'kumaPortfolioBundle:sendpage',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('kumaPortfolioBundle:sendpage');
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:Pages\SendPage:view.html.twig';
    }
}