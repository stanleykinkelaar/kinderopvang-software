<?php

namespace App\Http\Controllers;

use App\Forms\ProfileUpdate;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\SystemUser;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class ProfileController extends Controller
{
    private FormBuilder $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        $user = auth()->user();

        $form = $this->formBuilder->create(ProfileUpdate::class, [
            'model' => $user,
            'method' => 'POST',
        ]);

        return view('dashboard.profile')
            ->withForm($form)
            ->withUser($user);
    }

    /**
     * @param ProfileUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = auth()->user();
        $user = SystemUser::findOrFail($user->id);

        $user->update($request->all());
        $user->saveOrFail();

        return redirect()->back()
            ->with('success', 'Profiel wijzigingen succesvol opgeslagen');
    }
}
