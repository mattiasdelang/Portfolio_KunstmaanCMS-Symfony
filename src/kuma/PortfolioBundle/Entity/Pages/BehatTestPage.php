<?php

namespace kuma\PortfolioBundle\Entity\Pages;

use kuma\PortfolioBundle\Form\Pages\BehatTestPageAdminType;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * BehatTestPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="portfolio_behat_test_pages")
 */
class BehatTestPage extends AbstractPage implements HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new BehatTestPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
            array(
                'name' => 'PagerPage',
                'class'=> 'kuma\PortfolioBundle\Entity\Pages\PagerPage'
            ),
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
                'name'  => 'HomePage',
                'class' => 'kuma\PortfolioBundle\Entity\Pages\HomePage'
            ),
            array(
                'name'  => 'ContentPage',
                'class' => 'kuma\PortfolioBundle\Entity\Pages\ContentPage'
            ),
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('kumaPortfolioBundle:behat-test-page');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return '';
    }
}
