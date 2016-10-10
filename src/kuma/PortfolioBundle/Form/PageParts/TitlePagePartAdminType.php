<?php

namespace kuma\PortfolioBundle\Form\PageParts;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Kunstmaan\MediaBundle\Validator\Constraints as Assert;

/**
 * TitlePagePartAdminType
 */
class TitlePagePartAdminType extends \Symfony\Component\Form\AbstractType
{

    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting form the
     * top most type. Type extensions can further modify the form.
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('name', 'Symfony\Component\Form\Extension\Core\Type\TextType', array(
            'required' => false,
        ));
        $builder->add('title', 'Symfony\Component\Form\Extension\Core\Type\TextType', array(
            'required' => false,
        ));
        $builder->add('buttonUrl', 'Kunstmaan\NodeBundle\Form\Type\URLChooserType', array(
            'required' => false,
        ));
        $builder->add('buttonText', 'Symfony\Component\Form\Extension\Core\Type\TextType', array(
            'required' => false,
        ));
        $builder->add('buttonNewWindow', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
            'required' => false,
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getBlockPrefix()
    {
        return 'kuma_portfoliobundle_titlepageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\kuma\PortfolioBundle\Entity\PageParts\TitlePagePart'
        ));
    }
}
