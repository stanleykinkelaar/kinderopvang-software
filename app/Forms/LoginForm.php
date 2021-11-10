<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('email', Field::EMAIL, [
                'rules' => 'required',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                    'placeholder' => 'email@email.nl'
                ],
            ])
            ->add('password', Field::PASSWORD, [
                'rules' => 'required',
                'label' => 'Wachtwoord',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                    'placeholder' => 'Wachtwoord'
                ],
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'attr' => [
                    'class' => 'bg-blue-400 p-3 text-white font-bold rounded'
                ]
            ]);
    }
}
