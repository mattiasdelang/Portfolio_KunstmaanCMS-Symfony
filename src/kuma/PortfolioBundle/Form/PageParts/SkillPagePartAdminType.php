<?php

namespace kuma\PortfolioBundle\Form\PageParts;

use kuma\PortfolioBundle\Form\SkillAdminType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Kunstmaan\MediaBundle\Validator\Constraints as Assert;

/**
 * SkillPagePartAdminType
 */
class SkillPagePartAdminType extends \Symfony\Component\Form\AbstractType
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
        $builder->add('skills', CollectionType::class, array(
            'entry_type' => SkillAdminType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
            'attr' => array(
                'nested_form' => true,
                'nested_sortable' => true,
                'nested_form_min' => 0,
                'nested_form_max' => 10,
            )

        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getBlockPrefix()
    {
        return 'kuma_portfoliobundle_skillpageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\kuma\PortfolioBundle\Entity\PageParts\SkillPagePart'
        ));
    }
}
