<?php

namespace App\Form\Type;


use App\Entity\Timesheet;
use App\Entity\Users;
use App\Entity\Worklog;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\Type;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormTypeInterface;
class TimesheetFormType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
//		$builder->add(
//			'hours_worked',
//			NumberType::class,
//			array(
//				'required' => true,
//				'constraints' => array(
//					new NotBlank(array('message' => 'Field required')),
//				)
//			)
//		);
//
//
//		$builder->add(
//			'date',
//			TextType::class,
//			array(
//				'required' => true,
//				'constraints' => array(
//					new NotBlank(array('message' => 'Field required')),
//				)
//			)
//		);

		$builder->add(
			'worklogs',
			CollectionType::class, [
			'entry_type' => WorklogFormType::class,
			'entry_options' => ['label' => false],
			'allow_add' => true,
			'allow_delete' => true,
			'by_reference' => false,
		]);


	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Timesheet::class,
			'csrf_protection'	 => true,
			'csrf_field_name'	 => '_token',
		));
	}
}