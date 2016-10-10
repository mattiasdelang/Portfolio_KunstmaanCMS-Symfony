<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * TocPagePart
 *
 * @ORM\Table(name="portfolio_toc_page_parts")
 * @ORM\Entity
 */
class TocPagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'kumaPortfolioBundle:PageParts:TocPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\TocPagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \kuma\PortfolioBundle\Form\PageParts\TocPagePartAdminType();
    }
}
