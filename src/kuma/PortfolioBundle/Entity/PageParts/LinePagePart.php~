<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinePagePart
 *
 * @ORM\Table(name="portfolio_line_page_parts")
 * @ORM\Entity
 */
class LinePagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'kumaPortfolioBundle:PageParts:LinePagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\LinePagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \kuma\PortfolioBundle\Form\PageParts\LinePagePartAdminType();
    }
}
