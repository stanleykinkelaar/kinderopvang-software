<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class SetPassword extends Form
{
    public function buildForm()
    {
        $this
            ->add('email', Field::EMAIL, [
                'rules' => 'required',
                'label' => 'E-mailadres',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                ],
            ])
            ->add('password', Field::PASSWORD, [
                'rules' => 'required',
                'label' => 'E-mailadres',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                ],
            ])
            ->add('email', Field::PASSWORD, [
                'rules' => 'required',
                'label' => 'E-mailadres',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                ],
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Gebruik wachtwoord',
                'attr' => [
                    'class' => 'bg-blue-400 hover:bg-blue-500 p-3 text-white font-bold rounded'
                ]
            ]);
    }
}
