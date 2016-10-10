<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactPagePart
 *
 * @ORM\Table(name="kuma_portfoliobundle_contact_page_parts")
 * @ORM\Entity
 */
class ContactPagePart extends \kuma\PortfolioBundle\Entity\PageParts\AbstractPagePart
{


    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:PageParts:ContactPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\ContactPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\PageParts\ContactPagePartAdminType();
    }
}
