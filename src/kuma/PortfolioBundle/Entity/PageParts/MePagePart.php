<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * MePagePart
 *
 * @ORM\Table(name="kuma_portfoliobundle_me_page_parts")
 * @ORM\Entity
 */
class MePagePart extends \kuma\PortfolioBundle\Entity\PageParts\AbstractPagePart
{
    /**
     * @var string
     *
     * @ORM\Column(name="image_alt_text", type="text", nullable=true)
     */
    private $imageAltText;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var \Kunstmaan\MediaBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="Kunstmaan\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     * })
     */
    private $image;


    /**
     * Set imageAltText
     *
     * @param string $imageAltText
     *
     * @return MePagePart
     */
    public function setImageAltText($imageAltText)
    {
        $this->imageAltText = $imageAltText;

        return $this;
    }

    /**
     * Get imageAltText
     *
     * @return string
     */
    public function getImageAltText()
    {
        return $this->imageAltText;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return MePagePart
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set image
     *
     * @param \Kunstmaan\MediaBundle\Entity\Media $image
     *
     * @return MePagePart
     */
    public function setImage(\Kunstmaan\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Kunstmaan\MediaBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:PageParts:MePagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\MePagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\PageParts\MePagePartAdminType();
    }
}
