<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ProfileRequest;
use App\Services\Site\AccountService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function accountPage(AccountService $accountService)
    {
        return $accountService->accountPage();
    }

    public function editAccount(AccountService $accountService)
    {
        return $accountService->editAccount();
    }

    public function saveAccount(ProfileRequest $request,AccountService $accountService)
    {
        if ($request->password && $request->old_password) {
            $this->validate($request, [
                'password' => ['sometimes', 'min:8', 'confirmed'],
            ]);
        } elseif ($request->password && $request->old_password != '') {
            $this->validate($request, [
                'old_password' => ['required'],
            ]);
        } elseif ($request->password != '' && $request->old_password) {
            $this->validate($request, [
                'password' => ['required', 'min:8', 'confirmed'],
            ]);
        } elseif ($request->password != '' && $request->old_password != '' && $request->password_confirmation) {
            $this->validate($request, [
                'password' => ['required'],
                'old_password' => ['required'],
            ]);
        }

        return $accountService->updateProfile($request);
    }

    public function removeFromWishlist(Request $request,AccountService $accountService)
    {
        return $accountService->removeFromWishlist($request);
    }


}
