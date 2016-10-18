<?php

namespace kuma\PortfolioBundle\AdminList;

use Doctrine\ORM\EntityManager;

use kuma\PortfolioBundle\Form\SkillAdminType;
use Kunstmaan\AdminListBundle\AdminList\FilterType\ORM;
use Kunstmaan\AdminListBundle\AdminList\Configurator\AbstractDoctrineORMAdminListConfigurator;
use Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper;
use Kunstmaan\AdminListBundle\AdminList\SortableInterface;

/**
 * The admin list configurator for Skill
 */
class SkillAdminListConfigurator extends AbstractDoctrineORMAdminListConfigurator implements SortableInterface {
    /**
     * @param EntityManager $em        The entity manager
     * @param AclHelper     $aclHelper The acl helper
     */
    public function __construct(EntityManager $em, AclHelper $aclHelper = null)
    {
        parent::__construct($em, $aclHelper);
        $this->setAdminType(new SkillAdminType());
    }

    /**
     * Configure the visible columns
     */
    public function buildFields()
    {
        $this->addField('name', 'Name', true);
        $this->addField('level', 'Level', true);
    }

    /**
     * Build filters for admin list
     */
    public function buildFilters()
    {
        $this->addFilter('name', new ORM\StringFilterType('name'), 'Name');
        $this->addFilter('level', new ORM\NumberFilterType('level'), 'Level');
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
        return 'Skill';
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
