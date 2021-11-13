<?php

namespace App\Forms;

use App\Http\Requests\ProfileUpdateRequest;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class ProfileUpdate extends Form
{
    public function buildForm()
    {
        $this
            ->add('firstname', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Voornaam',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                ],
            ])
            ->add('lastname', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Achternaam',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                ],
            ])
            ->add('email', Field::EMAIL, [
                'rules' => 'required',
                'label' => 'E-mailadres',
                'attr' => [
                    'class' => 'bg-gray-100 p-4 w-full h-12 placeholder-opacity-50 focus:shadow-outline',
                ]
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Opslaan',
                'attr' => [
                    'class' => 'bg-blue-400 hover:bg-blue-500 p-3 text-white font-bold rounded'
                ]
            ]);
    }
}
