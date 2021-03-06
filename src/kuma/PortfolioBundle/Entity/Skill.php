<?php

namespace kuma\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Skill
 *
 * @ORM\Table(name="kuma_portfoliobundle_skill")
 * @ORM\Entity
 */
class Skill extends \Kunstmaan\AdminBundle\Entity\AbstractEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     * @Assert\Range(min = 0, max = 99,
     *               minMessage = "Too less",
     *               maxMessage = "Too much")
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer")
     *
     */
    private $weight;

    /**
     * @ORM\ManyToOne(targetEntity="kuma\PortfolioBundle\Entity\PageParts\SkillPagePart", inversedBy="skills")
     * @ORM\JoinColumn(name="skill_pagepart_id", referencedColumnName="id")
     */
    private $skillPagePart;

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Skill
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Skill
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set skillPagePart
     *
     * @param \kuma\PortfolioBundle\Entity\PageParts\SkillPagePart $skillPagePart
     *
     * @return Skill
     */
    public function setSkillPagePart(\kuma\PortfolioBundle\Entity\PageParts\SkillPagePart $skillPagePart = null)
    {
        $this->skillPagePart = $skillPagePart;

        return $this;
    }

    /**
     * Get skillPagePart
     *
     * @return \kuma\PortfolioBundle\Entity\PageParts\SkillPagePart
     */
    public function getSkillPagePart()
    {
        return $this->skillPagePart;
    }
}
