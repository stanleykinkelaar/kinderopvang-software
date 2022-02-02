<?php

namespace App\Http\Controllers\system_users;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\SystemUser;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    /**
     * @return mixed
     */
    public function index(): mixed
    {
        $user = auth()->user();

//        $form = $this->formBuilder->create(ProfileUpdate::class, [
//            'model' => $user,
//            'method' => 'POST',
//        ]);

        return view('dashboard.profile')
//            ->withForm($form)
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
