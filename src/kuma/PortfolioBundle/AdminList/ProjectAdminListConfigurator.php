<?php

namespace kuma\PortfolioBundle\AdminList;

use Doctrine\ORM\EntityManager;

use kuma\PortfolioBundle\Form\ProjectAdminType;
use Kunstmaan\AdminListBundle\AdminList\FilterType\ORM;
use Kunstmaan\AdminListBundle\AdminList\Configurator\AbstractDoctrineORMAdminListConfigurator;
use Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper;
use Kunstmaan\AdminListBundle\AdminList\SortableInterface;

/**
 * The admin list configurator for Project
 */
class ProjectAdminListConfigurator extends AbstractDoctrineORMAdminListConfigurator implements SortableInterface {
    /**
     * @param EntityManager $em        The entity manager
     * @param AclHelper     $aclHelper The acl helper
     */
    public function __construct(EntityManager $em, AclHelper $aclHelper = null)
    {
        parent::__construct($em, $aclHelper);
        $this->setAdminType(new ProjectAdminType());
    }

    /**
     * Configure the visible columns
     */
    public function buildFields()
    {
        $this->addField('name', 'Name', true);
        $this->addField('software', 'Software', true);
        $this->addField('role', 'Role', true);
        $this->addField('link', 'Link', true);
        $this->addField('image', 'Image', true);
        $this->addField('weight', 'Weight', true);
    }

    /**
     * Build filters for admin list
     */
    public function buildFilters()
    {
        $this->addFilter('name', new ORM\StringFilterType('name'), 'Name');
        $this->addFilter('software', new ORM\StringFilterType('software'), 'Software');
        $this->addFilter('role', new ORM\StringFilterType('role'), 'Role');
        $this->addFilter('link', new ORM\StringFilterType('link'), 'Link');
        $this->addFilter('image', new ORM\StringFilterType('image'), 'Image');
        $this->addFilter('weight', new ORM\StringFilterType('weight'), 'Weight');
    }

    /**
     * Get bundle name
     *
     * @return string
     */
    public function getBundleName()
    {
        return 'kumaPortfolioBundle';
    }

    /**
     * Get entity name
     *
     * @return string
     */
    public function getEntityName()
    {
        return 'Project';
    }

    /**
     * Get sortable field name
     *
     * @return string
     */
    public function getSortableField()
    {
        return "weight";
    }

}
