<?php

namespace AymardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AymardBundle\Entity\Meta;

class PageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('title')
            ->add('slug')
            ->add('description', TextAreaType::class, ['attr' => ['style' => 'height:200px;']])
        ;
        
        $builder->add('meta', CollectionType::class, [
            'entry_type' => MetaType::class,
            'allow_add'    => true,
            'allow_delete' => true,
            'by_reference' => false,
        ]);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AymardBundle\Entity\Page'
        ));
    }
}
