<?php

namespace FctBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EmpresasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class,array('label'=>'Nombre de la Empresa'))
            ->add('direccion',TextType::class)
            ->add('cp',IntegerType::class,array('label'=>'Código Postal'))
            ->add('telefono1',IntegerType::class,array('label'=>'Teléfono Principal'))
            ->add('telefono2',IntegerType::class,array('label'=>'Teléfono Secundario'))
            ->add('fechaCreacion',DateType::class,array('label'=>'Fecha de creación de la Empresa'))
            ->add('guardar',SubmitType::class)
            ->add('borrar', ResetType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FctBundle\Entity\Empresas'
        ));
    }
}
