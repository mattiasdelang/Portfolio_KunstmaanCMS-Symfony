<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\MediaBundle\Entity\Media;

/**
 * AudioPagePart
 *
 * @ORM\Entity
 * @ORM\Table(name="portfolio_audio_page_parts")
 */
class AudioPagePart extends AbstractPagePart
{
    /**
     * @ORM\ManyToOne(targetEntity="Kunstmaan\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     */
    protected $media;

    /**
     * Get media
     *
     * @return Media
     */
    public function getMedia()
    {
	return $this->media;
    }

    /**
     * Set media
     *
     * @param Media $media
     *
     * @return AudioPagePart
     */
    public function setMedia($media)
    {
	$this->media = $media;

	return $this;
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
	return "kumaPortfolioBundle:PageParts/AudioPagePart:view.html.twig";
    }

    /**
     * @return AudioPagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \kuma\PortfolioBundle\Form\PageParts\AudioPagePartAdminType();
    }
}
