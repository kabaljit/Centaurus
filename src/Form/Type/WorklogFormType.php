<?php

namespace App\Form\Type;


use App\Entity\Worklog;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class WorklogFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add(
			'issue',
			TextType::class
//			array(
//				'required' => true,
//				'constraints' => array(
//					new NotBlank(array('message' => 'Field required')),
//				)
//			)
		);

		$builder->add(
			'start',
			TextType::class,
			array(
				'required' => true,
				'constraints' => array(
					new NotBlank(array('message' => 'Field required')),
				)
			)
		);

		$builder->add(
			'end',
			TextType::class,
			array(
				'required' => true,
				'constraints' => array(
					new NotBlank(array('message' => 'Field required')),
				)
			)
		);


		$builder->add(
			'duration',
			NumberType::class,
			array(
				'required' => true,
				'constraints' => array(
					new NotBlank(array('message' => 'Field required')),
				)
			)
		);

		$builder->add(
			'description',
			TextType::class,
			array(
				'required' => true,
				'constraints' => array(
					new NotBlank(array('message' => 'Field required')),
				)
			)
		);

	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Worklog::class,
			'csrf_protection'	 => true,
			'csrf_field_name'	 => '_token',
		));
	}
}