<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ClienteType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('email', 'email', array(
				'attr' => array('autofocus' => true),
				'label' => 'label.email',
		))
		->add('confirmacao-email', 'email', array(
				'label' => 'label.confirmacao-email',
		))
		->add('senha', 'textarea', array(
				'label' => 'label.senha',
		))
		->add('confirmacao-senha', 'textarea', array(
				'label' => 'label.confirmacao-senha',
		))
		;
	}
	
	public function configureOptions(OptionsResolver $resolver)
	{
// 		$resolver->setDefaults(array(
// 				'data_class' => 'AppBundle\Entity\Post',
// 		));
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function getName()
	{
		// Best Practice: use 'app_' as the prefix of your custom form types names
		// see http://symfony.com/doc/current/best_practices/forms.html#custom-form-field-types
		//return 'app_post';
	}
}