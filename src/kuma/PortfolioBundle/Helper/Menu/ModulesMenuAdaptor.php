<?php
namespace kuma\PortfolioBundle\Helper\Menu;

use Kunstmaan\AdminBundle\Helper\Menu\MenuAdaptorInterface;
use Kunstmaan\AdminBundle\Helper\Menu\MenuBuilder;
use Kunstmaan\AdminBundle\Helper\Menu\MenuItem;
use Kunstmaan\AdminBundle\Helper\Menu\TopMenuItem;
use Symfony\Component\HttpFoundation\Request;

class ModulesMenuAdaptor implements MenuAdaptorInterface
{

    /**
     * {@inheritDoc}
     */
    public function adaptChildren(MenuBuilder $menu, array &$children, MenuItem $parent = null, Request $request = null)
    {
        if (!is_null($parent) && 'KunstmaanAdminBundle_modules' == $parent->getRoute()) {
            $menuItem = new TopMenuItem($menu);
            $menuItem->setRoute('kumaportfoliobundle_admin_project');
            $menuItem->setLabel('Project');
            $menuItem->setParent($parent);
            if (stripos($request->attributes->get('_route'), $menuItem->getRoute()) === 0) {
                $menuItem->setActive(true);
                $parent->setActive(true);
            }
            $children[] = $menuItem;
        }

        if (!is_null($parent) && 'KunstmaanAdminBundle_modules' == $parent->getRoute()) {
            $menuItem = new TopMenuItem($menu);
            $menuItem->setRoute('kumaportfoliobundle_admin_article');
            $menuItem->setLabel('article');
            $menuItem->setParent($parent);
            if (stripos($request->attributes->get('_route'), $menuItem->getRoute()) === 0) {
                $menuItem->setActive(true);
                $parent->setActive(true);
            }
            $children[] = $menuItem;
        }

        if (!is_null($parent) && 'KunstmaanAdminBundle_modules' == $parent->getRoute()) {
            $menuItem = new TopMenuItem($menu);
            $menuItem->setRoute('kumaportfoliobundle_admin_skill');
            $menuItem->setLabel('skill');
            $menuItem->setParent($parent);
            if (stripos($request->attributes->get('_route'), $menuItem->getRoute()) === 0) {
                $menuItem->setActive(true);
                $parent->setActive(true);
            }
            $children[] = $menuItem;
        }
        if (!is_null($parent) && 'KunstmaanAdminBundle_modules' == $parent->getRoute()) {
            $menuItem = new TopMenuItem($menu);
            $menuItem->setRoute('kumaportfoliobundle_admin_contact');
            $menuItem->setLabel('contact');
            $menuItem->setParent($parent);
            if (stripos($request->attributes->get('_route'), $menuItem->getRoute()) === 0) {
                $menuItem->setActive(true);
                $parent->setActive(true);
            }
            $children[] = $menuItem;
        }

    }
}