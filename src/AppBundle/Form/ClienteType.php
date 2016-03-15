<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

//INCLUIR TRANSLATION NAS MENSAGENS DE INVALIDEZ...

class ClienteType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('email', RepeatedType::class, array(
				'type' => EmailType::class,
    			'invalid_message' => 'The password fields must match.',
  				'options' => array('attr' => array('class' => 'email-field','autofocus' => true)),
  				'required' => true,
    			'first_options'  => array('label' => 'Email'),
    			'second_options' => array('label' => 'Confirme o seu email'),
		))
		->add('telefone', RepeatedType::class, array(
				'type' => PasswordType::class,
    			'invalid_message' => 'The password fields must match.',
  				'options' => array('attr' => array('class' => 'password-field')),
  				'required' => true,
    			'first_options'  => array('label' => 'Senha'),
    			'second_options' => array('label' => 'Confirme a sua senha'),
		))
		;
	}
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'AppBundle\Entity\Pessoa',
		));
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function getName()
	{
		//Best Practice: use 'app_' as the prefix of your custom form types names
		//see http://symfony.com/doc/current/best_practices/forms.html#custom-form-field-types
		return 'app_pessoa';
	}
}