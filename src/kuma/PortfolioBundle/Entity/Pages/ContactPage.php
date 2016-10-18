<?php

namespace kuma\PortfolioBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactPage
 *
 * @ORM\Table(name="kuma_portfoliobundle_contact_pages")
 * @ORM\Entity
 */
class ContactPage extends \Kunstmaan\FormBundle\Entity\AbstractFormPage implements \Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text", nullable=true)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="send_url", type="string", nullable=true)
     */
    private $sendUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="send_text", type="string", nullable=true)
     */
    private $sendText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="send_new_window", type="boolean", nullable=true)
     */
    private $sendNewWindow;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return ContactPage
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
     * Set email
     *
     * @param string $email
     *
     * @return ContactPage
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return ContactPage
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set sendUrl
     *
     * @param string $sendUrl
     *
     * @return ContactPage
     */
    public function setSendUrl($sendUrl)
    {
        $this->sendUrl = $sendUrl;

        return $this;
    }

    /**
     * Get sendUrl
     *
     * @return string
     */
    public function getSendUrl()
    {
        return $this->sendUrl;
    }

    /**
     * Set sendText
     *
     * @param string $sendText
     *
     * @return ContactPage
     */
    public function setSendText($sendText)
    {
        $this->sendText = $sendText;

        return $this;
    }

    /**
     * Get sendText
     *
     * @return string
     */
    public function getSendText()
    {
        return $this->sendText;
    }

    /**
     * Set sendNewWindow
     *
     * @param boolean $sendNewWindow
     *
     * @return ContactPage
     */
    public function setSendNewWindow($sendNewWindow)
    {
        $this->sendNewWindow = $sendNewWindow;

        return $this;
    }

    /**
     * Get sendNewWindow
     *
     * @return boolean
     */
    public function getSendNewWindow()
    {
        return $this->sendNewWindow;
    }
    /**
     * Returns the default backend form type for this page
     *
     * @return \kuma\PortfolioBundle\Form\Pages\ContactPageAdminType
     */
    public function getDefaultAdminType()
    {
        return new \kuma\PortfolioBundle\Form\Pages\ContactPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array();
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array(
            'kumaPortfolioBundle:contactpage',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('kumaPortfolioBundle:contactpage');
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'kumaPortfolioBundle:Pages\ContactPage:view.html.twig';
    }
}