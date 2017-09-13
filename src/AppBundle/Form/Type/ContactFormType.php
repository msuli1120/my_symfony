<?php

	namespace AppBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\Extension\Core\Type\EmailType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\FormBuilderInterface;

	class ContactFormType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add( 'from', EmailType::class, [
					'label' => 'Email Address'
				])
				->add( 'message', TextareaType::class, [
					'attr' => [
						'rows' => 5
					]
				])
				->add( 'send', SubmitType::class, [
					'attr' => [
						'class' => 'btn btn-lg btn-success btn-block'
					]
				])
			;
		}
	}