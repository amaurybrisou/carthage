<?php // src/AppBundle/Form/Type/MetaType.php
namespace AymardBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('property', TextType::class, ['attr' => ['class' => "form-control"]])
            ->add('content', TextType::class, ['attr' => ['class' => "form-control"]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AymardBundle\Entity\Meta',
        ));
    }
}

?>