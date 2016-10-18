<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListPagePart
 *
 * @ORM\Table(name="kuma_portfoliobundle_list_page_parts")
 * @ORM\Entity
 */
class ListPagePart extends \kuma\PortfolioBundle\Entity\PageParts\AbstractPagePart
{


    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:PageParts:ListPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\ListPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\PageParts\ListPagePartAdminType();
    }
}