<?php

namespace AymardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('meta_description')
            ->add('meta_title')
            ->add('meta_site_name')
            ->add('meta_content')
            ->add('meta_url')
            ->add('meta_image')
            ->add('meta_keywords')
            ->add('description', TextAreaType::class, ['attr' => ['style' => 'height:400px;width:300px;']])
        ;
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
