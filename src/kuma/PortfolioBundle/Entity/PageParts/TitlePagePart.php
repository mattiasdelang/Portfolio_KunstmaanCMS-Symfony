<?php

namespace kuma\PortfolioBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * TitlePagePart
 *
 * @ORM\Table(name="kuma_portfoliobundle_title_page_parts")
 * @ORM\Entity
 */
class TitlePagePart extends \kuma\PortfolioBundle\Entity\PageParts\AbstractPagePart
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="button_url", type="string", nullable=true)
     */
    private $buttonUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="button_text", type="string", nullable=true)
     */
    private $buttonText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="button_new_window", type="boolean", nullable=true)
     */
    private $buttonNewWindow;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return TitlePagePart
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
     * Set title
     *
     * @param string $title
     *
     * @return TitlePagePart
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set buttonUrl
     *
     * @param string $buttonUrl
     *
     * @return TitlePagePart
     */
    public function setButtonUrl($buttonUrl)
    {
        $this->buttonUrl = $buttonUrl;

        return $this;
    }

    /**
     * Get buttonUrl
     *
     * @return string
     */
    public function getButtonUrl()
    {
        return $this->buttonUrl;
    }

    /**
     * Set buttonText
     *
     * @param string $buttonText
     *
     * @return TitlePagePart
     */
    public function setButtonText($buttonText)
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    /**
     * Get buttonText
     *
     * @return string
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * Set buttonNewWindow
     *
     * @param boolean $buttonNewWindow
     *
     * @return TitlePagePart
     */
    public function setButtonNewWindow($buttonNewWindow)
    {
        $this->buttonNewWindow = $buttonNewWindow;

        return $this;
    }

    /**
     * Get buttonNewWindow
     *
     * @return boolean
     */
    public function getButtonNewWindow()
    {
        return $this->buttonNewWindow;
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:PageParts:TitlePagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \kuma\PortfolioBundle\Form\PageParts\TitlePagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\PageParts\TitlePagePartAdminType();
    }
}
