<?php

namespace kuma\PortfolioBundle\Form\PageParts;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Kunstmaan\MediaBundle\Validator\Constraints as Assert;

/**
 * MePagePartAdminType
 */
class MePagePartAdminType extends \Symfony\Component\Form\AbstractType
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
        $builder->add('image', 'Kunstmaan\MediaBundle\Form\Type\MediaType', array(
            'mediatype' => 'image',
            'constraints' => array(new Assert\Media(array(
                'mimeTypes' => array('image/png',' image/jpeg','image/svg+xml'),
            ))),
            'required' => false,
        ));
        $builder->add('imageAltText', 'Symfony\Component\Form\Extension\Core\Type\TextType', array(
            'required' => false,
        ));
        $builder->add('text', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', array(
            'attr' => array('rows' => 10, 'cols' => 600),
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
        return 'kuma_portfoliobundle_mepageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\kuma\PortfolioBundle\Entity\PageParts\MePagePart'
        ));
    }
}
