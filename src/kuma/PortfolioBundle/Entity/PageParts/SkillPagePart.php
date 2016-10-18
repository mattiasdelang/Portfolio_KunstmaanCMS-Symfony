<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SkillPagePart
 *
 * @ORM\Table(name="kuma_portfoliobundle_skill_page_parts")
 * @ORM\Entity
 */
class SkillPagePart extends \kuma\PortfolioBundle\Entity\PageParts\AbstractPagePart
{
    /**
     * @ORM\OneToMany(targetEntity="kuma\PortfolioBundle\Entity\Skill", mappedBy="skillPagePart", cascade={"persist", "remove"})
     */
    private $skills;

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:PageParts:SkillPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\SkillPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\PageParts\SkillPagePartAdminType();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add skill
     *
     * @param \kuma\PortfolioBundle\Entity\Skill $skill
     *
     * @return SkillPagePart
     */
    public function addSkill(\kuma\PortfolioBundle\Entity\Skill $skill)
    {
        $this->skills[] = $skill;

        $skill->setSkillPagePart($this);

        return $this;
    }

    /**
     * Remove skill
     *
     * @param \kuma\PortfolioBundle\Entity\Skill $skill
     */
    public function removeSkill(\kuma\PortfolioBundle\Entity\Skill $skill)
    {
        $this->skills->removeElement($skill);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkills()
    {
        return $this->skills;
    }
}
