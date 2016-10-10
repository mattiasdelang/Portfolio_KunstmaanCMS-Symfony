<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * ToTopPagePart
 *
 * @ORM\Table(name="portfolio_to_top_page_parts")
 * @ORM\Entity
 */
class ToTopPagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'kumaPortfolioBundle:PageParts:ToTopPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\ToTopPagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \kuma\PortfolioBundle\Form\PageParts\ToTopPagePartAdminType();
    }
}
