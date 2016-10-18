<?php

namespace kuma\PortfolioBundle\Form\Pages;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Kunstmaan\MediaBundle\Validator\Constraints as Assert;

/**
 * ContactPageAdminType
 */
class ContactPageAdminType extends \Kunstmaan\FormBundle\Form\AbstractFormPageAdminType
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
        $builder->add('email', 'Symfony\Component\Form\Extension\Core\Type\TextType', array(
            'required' => false,
        ));
        $builder->add('question', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', array(
            'attr' => array('rows' => 10, 'cols' => 600),
            'required' => false,
        ));
        $builder->add('sendUrl', 'Kunstmaan\NodeBundle\Form\Type\URLChooserType', array(
            'required' => false,
        ));
        $builder->add('sendText', 'Symfony\Component\Form\Extension\Core\Type\TextType', array(
            'required' => false,
        ));
        $builder->add('sendNewWindow', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
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
        return 'kuma_portfoliobundle_contactpagetype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\kuma\PortfolioBundle\Entity\Pages\ContactPage'
        ));
    }
}
