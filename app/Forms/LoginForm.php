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
                'label' => 'E-mail',
                'attr' => [
                    'class' => 'bg-white h-8 w-64',
                    'placeholder' => 'email@email.nl'
                ],
            ])
            ->add('password', Field::PASSWORD, [
                'rules' => 'required',
                'label' => 'Wachtwoord',
                'attr' => [
                    'class' => 'bg-white h-8 w-64',
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
