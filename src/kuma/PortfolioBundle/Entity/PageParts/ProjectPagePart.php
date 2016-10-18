<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectPagePart
 *
 * @ORM\Table(name="kuma_portfoliobundle_project_page_parts")
 * @ORM\Entity
 */
class ProjectPagePart extends \kuma\PortfolioBundle\Entity\PageParts\AbstractPagePart
{


    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:PageParts:ProjectPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\ProjectPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\PageParts\ProjectPagePartAdminType();
    }
}
