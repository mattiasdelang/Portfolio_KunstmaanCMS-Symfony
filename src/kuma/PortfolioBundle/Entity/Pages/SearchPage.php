<?php

namespace kuma\PortfolioBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeSearchBundle\Entity\AbstractSearchPage;

/**
 * @ORM\Entity()
 * @ORM\Table(name="kuma_portfoliobundle_search_page")
 */
class SearchPage extends AbstractSearchPage
{
    /*
     * return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:Pages\SearchPage:view.html.twig';
    }
}